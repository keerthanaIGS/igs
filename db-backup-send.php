<?php
date_default_timezone_set('Asia/Kolkata');
ini_set('display_errors', 0);
error_reporting(0);
error_log('infog solution hrm running');
// === DATABASE CONFIGURATION ===
$hostname = 'localhost';
$username = 'infogsolution_hrm_live';
$password = 'infogsolution_hrm_live';
$dbname   = 'infogsolution_hrm_live';

// === CLIENT & EMAIL CONFIGURATION ===
$client_name="Info G Innovative Solutions"; 

$from_email = "firstmatrix01@gmail.com";
$to = "infogbackup2025@gmail.com";
$cc = "krishnamax008@gmail.com";

// === SETUP BACKUP FOLDER STRUCTURE ===
$baseDir = dirname(__FILE__);
$backup_dir = $baseDir . '/../infog_backups/';

if (!is_dir($backup_dir)) {
    if (!mkdir($backup_dir, 0777, true)) {
        die("Failed to create backup directory: $backup_dir");
    }
}

$currentYear = date('Y');
$currentMonth = date('m');
$currentDay = date('d');
$backupFolderPath = "$backup_dir/$currentYear/$currentMonth/$currentDay";

if (!is_dir($backupFolderPath)) {
    if (!mkdir($backupFolderPath, 0777, true)) {
        die("Failed to create backup folder structure: $backupFolderPath");
    }
}

// === GENERATE BACKUP FILE NAMES ===
$timestamp = date('Y-m-d_h-i-s_A');
$backup_filename = $dbname . '_backup_' . $timestamp . '.sql';
$zip_filename = $dbname . '_backup_' . $timestamp . '.zip';

$backup_filepath = "$backupFolderPath/$backup_filename";
$zip_filepath = "$backupFolderPath/$zip_filename";

// === FUNCTION TO BACKUP DATABASE ===
function backupDatabase($host, $user, $pass, $db, $backupFilePath) {
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_error) {
        return false;
    }

    $tables = [];
    $result = $mysqli->query("SHOW TABLES");
    while ($row = $result->fetch_array()) {
        $tables[] = $row[0];
    }

    $sqlScript = "-- Database Backup for `$db`\n-- Generated on " . date('Y-m-d H:i:s') . "\n\n";

    foreach ($tables as $table) {
        // Table structure
        $result = $mysqli->query("SHOW CREATE TABLE `$table`");
        $row = $result->fetch_assoc();
        $sqlScript .= "\n-- Table structure for `$table`\n";
        $sqlScript .= "DROP TABLE IF EXISTS `$table`;\n";
        $sqlScript .= $row['Create Table'] . ";\n\n";

        // Table data
        $result = $mysqli->query("SELECT * FROM `$table`");
        while ($row = $result->fetch_assoc()) {
            $values = array_map([$mysqli, 'real_escape_string'], array_values($row));
            $values = array_map(function ($v) {
                return isset($v) ? "'$v'" : "NULL";
            }, $values);
            $sqlScript .= "INSERT INTO `$table` VALUES (" . implode(", ", $values) . ");\n";
        }
        $sqlScript .= "\n";
    }

    file_put_contents($backupFilePath, $sqlScript);
    $mysqli->close();
    return true;
}

// === CREATE BACKUP FILE ===
if (backupDatabase($hostname, $username, $password, $dbname, $backup_filepath)) {
    // Compress SQL to ZIP
    $zip = new ZipArchive();
    if ($zip->open($zip_filepath, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($backup_filepath, $backup_filename);
        $zip->close();

        // Prepare email
        $subject = "$client_name Database Backup - " . date("Y-m-d");
        $backup_date = date("F j, Y, g:i A");
        $file_content = chunk_split(base64_encode(file_get_contents($zip_filepath)));
        $boundary = md5(time());

        // Headers
        $headers = "From: $client_name <$from_email>\r\n";
        $headers .= "CC: " . $cc . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        // Email body
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
        $body .= "<html><body>";
        $body .= "<h2>$client_name Database Backup</h2>";
        $body .= "<p>Dear Team,</p>";
        $body .= "<p>Please find the attached database backup for <b>$client_name</b>.</p>";
        $body .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; font-size:16px; color:#333;'>";
        $body .= "<tr><th style='background:#f2f2f2;'>Backup Date</th><td>$backup_date</td></tr>";
        $body .= "<tr><th style='background:#f2f2f2;'>File Name</th><td>$zip_filename</td></tr>";
        $body .= "</table>";
        $body .= "<p>Best Regards,<br><b>Firstmatrix Solutions IT Team</b></p>";
        $body .= "</body></html>\r\n";

        // Attach file
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: application/octet-stream; name=\"$zip_filename\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$zip_filename\"\r\n\r\n";
        $body .= $file_content . "\r\n";
        $body .= "--$boundary--";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "✅ Backup sent successfully!\n";
            unlink($backup_filepath); // delete raw .sql file
            // unlink($zip_filepath); // optionally delete ZIP too
        } else {
            echo "❌ Failed to send backup email.\n";
        }
    } else {
        echo "❌ Error creating the ZIP file.\n";
    }
} else {
    echo "❌ Error creating the database backup file.\n";
}

// === DELETE FOLDERS OLDER THAN 4 DAYS ===
$daysToKeep = 4;
$currentTimestamp = time();

foreach (glob($backup_dir . $currentYear . '/*/*') as $folder) {
    if (is_dir($folder) && filemtime($folder) < $currentTimestamp - ($daysToKeep * 86400)) {
        deleteDirectory($folder);
    }
}

// === RECURSIVE DELETE FUNCTION ===
function deleteDirectory($dir) {
    if (!is_dir($dir)) return false;
    foreach (scandir($dir) as $file) {
        if ($file == '.' || $file == '..') continue;
        $path = "$dir/$file";
        is_dir($path) ? deleteDirectory($path) : unlink($path);
    }
    return rmdir($dir);
}


?>
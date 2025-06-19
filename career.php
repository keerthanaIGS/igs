<?php include 'header.php'; ?>
<?php include "hrm.infogsolution.com/config/config.php";

$statement = $pdo->prepare("SELECT c.* FROM `tbl_careers` c WHERE c.status=1 ORDER BY order_wise asc");
$statement->execute();
$datas = $statement->fetchAll(PDO::FETCH_ASSOC);
$totalData = $statement->rowCount();
	
	
$statement_locations = $pdo->prepare("SELECT l.* FROM `tbl_locations` l WHERE l.status=1");
$statement_locations->execute();
$locations_datas = $statement_locations->fetchAll(PDO::FETCH_ASSOC);
$locations_totalData = $statement_locations->rowCount();

?>

<main class="main">
   <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
      <div class="container">
         <h2 class="breadcrumb-title">Career</h2>
         <ul class="breadcrumb-menu">
            <li><a href="index<?=$extension?>">Home</a></li>
            <li class="active">Career</li>
         </ul>
      </div>
   </div>
   <div class="feature-area mt-0">
	<div class="container">
		<div class="feature-wrapper">
			<div class="row">
				<div class="faq-area py-120">
    				<div class="container">
    					<div class="row align-items-center">
    						<!--<div class="col-lg-6">
    							<div class="faq-img">
    								<img src="assets/img/faq/01.png" alt="">
    							</div>
    						</div>-->
    						<div class="col-lg-12">
    							<div class="faq-right">
    								<div class="site-heading mb-3">
    									<span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Career</span>
    									<h2 class="site-title my-3">Our Job <span>Openings</span></h2>
    								</div>
    								<!--<p class="about-text">There are many variations of passages of Lorem Ipsum available,
    									but the majority have suffered alteration in some form by injected.
    								</p>-->
    								<div class="mt-3">
    									<div class="accordion" id="accordionExample">
    								<?php if($totalData>0){
    								    $i = 1;
    								    foreach($datas as $career){
    								        $ids = $career['id'];
    								        $title = $career['title'];
    								        $content = $career['content'];
    								        
    								        if($i==1){
    								            $class="collapsed ";
    								        }else{
    								            $class="collapsed ";
    								        }
    								?>
    								
    								
    								
    								        <div class="accordion-item">
    											<h2 class="accordion-header" id="H_<?=$ids?>">
    												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Info_<?=$ids?>" aria-expanded="false" aria-controls="Info_<?=$ids?>">
    												<span><i class="far fa-handshake"></i></span> <?=$title?> 
    												<!--<a href="#contactForm" onclick="Career(<?//=$ids?>, '<?//=$title?>')" class="btn btn-info btn-xs apply_button">Apply Now</a>-->
    												</button>
    											</h2>
    											<div id="Info_<?=$ids?>" class="accordion-collapse collapse" aria-labelledby="H_<?=$ids?>" data-bs-parent="#accordionExample">
    												<div class="accordion-body">
    													<?=$content?>
    													
    													<a href="#contactForm" onclick="Career(<?=$ids?>, '<?=$title?>')" class="btn btn-info btn-xs apply_button" style="margin-top: 10px; margin-bottom: 10px;">Apply Now</a>
    												</div>
    											</div>
    										</div>
    										
    								<?php $i++; }}else{
    								    echo "<center><b style='color: red;'>No Records Found</b></center>";
    								}
    								?>
    										<!--
    										<div class="accordion-item">
    											<h2 class="accordion-header" id="headingTwo">
    												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    												<span><i class="far fa-handshake"></i></span> Voice Process- Telecalling Sales Executive:
    												</button>
    											</h2>
    											<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    												<div class="accordion-body">
    													<div class="feature-item">
                                    						
                                    						<div class="feature-content">
                                    							<p>
                                    							    <h4>Job description:</h4>
                                    							    <ul>
                                    							        <li>- Require experienced associates to work in credit card selling/lead conversion process for Dubai.
                                        							        The sales person identifies potential buyers based on the given leads and convinces them to buy the 
                                        							        credit cards by explaining the benefits to the buyer for purchasing the product.</li>
                                    							    </ul>
                                    							    <br>
                                    							    <h4>Resposibility:</h4>
                                    							    <ul>
                                    							        <li>- Present, promote and sell products/services using solid arguments to existing and prospective customers.</li>
                                                                        <li>- Perform cost-benefit and needs analysis of existing/potential customers to meet their needs.</li>
                                                                        <li>- Establish, develop and maintain positive business and customer relationships.</li>
                                                                        <li>- Serves customers by helping them select products and closing the sale.</li>
                                                                        <li>- Guide to customers about discounts and special offers.</li>
                                                                        <li>- Drives sales through engagement of customers, suggestive selling, and sharing product knowledge.</li>
                                                                        <li>- Ensure high levels of customer’s satisfaction through excellent service.</li>
                                                                        <li>- To have excellent customer service skills and good comment in Emglish.</li>
                                                                        <li>- Answering any questions customers might have about card and loans.</li>
                                    							    </ul>
                                    							    <br>
                                    							    <h4>Telecalling Sales Executive Job Specification :</h4>
                                    							    <ul>
                                    							        <li>- Any Degree with good communication skill in English, listening and Good energy level
                                                                            Product knowledge, Excellent Customer service, BPO experience, Meeting sales goals.</li>
                                                                        <li>- Experience working in sales of credit card and Loans.</li>
                                                                        <li>- Flexible working hours</li>
                                                                        <li>- Customer-service experience. Excellent verbal communication skills in English. 
                                                                            Multi-tasking and time-management skills, with the ability to prioritize tasks.</li>
                                    							    </ul>
                                    							    
                                    							 
                                    							</p>
                                    						</div>
                                    					</div>
    												</div>
    											</div>
    										</div>
    										<div class="accordion-item">
    											<h2 class="accordion-header" id="headingThree">
    												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    												<span><i class="far fa-handshake"></i></span> Process executive - Image annotation process:
    												</button>
    											</h2>
    											<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    												<div class="accordion-body">
    													<div class="feature-item">
                                    						
                                    						<div class="feature-content">
                                    							<p>
                                    							    <h4>Job description:</h4>
                                    							    <h5><?=$site_name?> aims to revolutionize data annotation service to pave way for the AI age</h5>
                                    							    <ul>
                                    							        <li>- We need candidate who has basic knowledge of Data masking, labelling and annotation.</li>
                                    
                                                                        <li>- We prefer candidate who has got experience in Data Annotation and Labelling</li>
                                                                            
                                                                        <li>- We are looking for candidates who have worked on 2D and 3D Labelling.</li>
                                                                            
                                                                        <li>- Looking for candidates with average to good communication skill.</li>
                                                                            
                                                                        <li>- Candidates should be available to work on rotational shifts.</li>
                                                                            
                                                                        <li>- Ability to multi and manage various projects elements</li>
                                                                            
                                                                        <li>- Any graduate fresher with good knowledge into Adobe Photoshop, CorelDraw, CVAT, etc</li>
                                    							    </ul>
                                    							    <br>
                                    							    <h5>Day-to-day responsibilities include:</h5>
                                    							    <ul>
                                    							        <li>-Work on engaging in the accurate and efficient annotation of data (image, text, audio, signal) using the provided tools</li>
                                                                        <li>-Work on engaging in data entry</li>
                                    							    </ul>
                                    							 
                                    							</p>
                                    						</div>
                                    					</div>
    												</div>
    											</div>
    										</div>-->
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
			    </div>
				
			</div>
		</div>
	</div>
</div>


   <div class="login-area">
      <div class="container">
         <div class="col-md-12 mx-auto">
            <div class="login-form" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
               <div class="login-header">
                  <img src="<?=$logo_dark?>" alt="">
                  <h2>Register Resume</h2>
               </div>
               <div id="content-div">
               <form id="contactForm" method="POST">
                  <div class="form-group">
                     <label>Full Name</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="form-group">
                    
                     <input type="hidden" name="type" id="type" value="send_mail" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="form-group">
                     <label>Email Address</label>
                     <input type="email" name="email"  id="email" class="form-control" placeholder="Your Email" required>
                  </div>
                  <div class="form-group">
                     <label>Mobile Number</label>
                     <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Your Mobile Number" required>
                  </div>
                  <div class="form-group">
                     <label>Qualification</label>
                     <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Your Qualification" required>
                  </div>
                  
                  <div class="form-group">
                     <label>Preferred Job Location</label>
                     <select name="location" id="location" class="form-control" required>
                        <option value="">--Select an Option--</option>
                        <?php if($locations_totalData>0){ 
                            foreach($locations_datas as $locations){
                                $location_name = $locations['name'];
                        ?>
                            <option value="<?=$location_name?>"><?=$location_name?></option>
                        <?php } } ?>
                     </select>
                  </div>
                  
                  <div class="form-group">
                     <label>Your Career</label>
                     <select name="careers" id="careers" class="form-control" required>
                        <option value="">Select an Careers</option>
                        <?php if($totalData>0){ 
                            foreach($datas as $career){
                                $career_name = $career['title'];
                        ?>
                            <option value="<?=$career_name?>"><?=$career_name?></option>
                        <?php } } ?>
                     </select>
                  </div>
                  
                  
                  <div class="form-group">
                     <label>Work Experience</label>
                     <input type="text" name="experience" id="experience" class="form-control" placeholder="Your Work Experience" required>
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <textarea type="text" name="address"  id="address" rows="4" cols="50" class="form-control" placeholder="Your Address" required></textarea>
                  </div>
                  <div class="form-group">
                     <label>Upload Resume</label>
                     <input type="file" name="resume" id="resume" class="form-control" >
                  </div>
                  <!--<div class="form-check form-group">
                     <input class="form-check-input" type="checkbox" value="" id="agree">
                     <label class="form-check-label" for="agree">
                     I agree with the <a href="#">Terms Of Service.</a>
                     </label>
                  </div>-->
                  <div class="d-flex align-items-center">
                       <div>
                        <i id='submit_spin'></i>
                        <button type="submit" id="mail_btn" class="theme-btn"><i class="far fa-paper-plane"></i> Submit</button>
                        <div id="msgSubmit"></div>
                       </div>
                  </div>
               </form>
               </div>
               
               <div id="update-div" style="display: none;">
                    <center style="font-size: 24px; font-weight: 500; color: darkolivegreen;">
                        <h3 style="font-size: 45px;color: green;font-weight: 700;">Thanks for Your Interest!</h3><br>
                        Thank you for your interest in joining our team.<br>
                        We've received your application and will review it shortly.
                    </center>
                </div>
                <div id="loading-div" style="display: none;">
                     <center> <img src="images/loading.gif" style="width: 250px;"><br><b class="blinking">Processing Please Wait...</b></center>
                </div>
            </div>
         </div>
      </div>
   </div>
</main>
</br></br>
<?php include 'footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$( document ).ready(function() {
   $("#contactForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    $("#content-div").hide();
    $("#loading-div").show();
    var form = $(this);
    var actionUrl = 'mail/api/career-api.php';
    console.log('submit...');
    var formData = new FormData(this);
                formData.append('type', 'send_mail');
                                $.ajax({
                            url: actionUrl,
                            type: 'post',
                            dataType: 'json',
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            enctype: 'multipart/form-data',
                            success: function (data) {
                                $("#update-div").show();
                                $("#loading-div").hide();
                                console.log('submited : Response : ...'+data);
                              //alert(data); // show response from the php script.
                              //window.location.reload();
                            }
    });
   });
});
</script>

<style>
    .apply_button{
        width: 108px !important;
        height: 35px !important;
        font-size: 14px;
        font-weight: 600;
        margin-left: 10px;
    }
</style>

<script>
    function Career(id, title){
        $("#careers").val(title);
        $("#name").focus();
    }
</script>
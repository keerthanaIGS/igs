<?php include 'header.php'; ?>
<div class="search-popup">
   <button class="close-search"><span class="far fa-times"></span></button>
   <form action="#">
      <div class="form-group">
         <input type="search" name="search-field" placeholder="Search Here..." required>
         <button type="submit"><i class="far fa-search"></i></button>
      </div>
   </form>
</div>
<main class="main">
   <div class="site-breadcrumb" style="background: url(images/slide1.jpg)">
      <div class="container">
         <h2 class="breadcrumb-title">Contact Us</h2>
         <ul class="breadcrumb-menu">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact Us</li>
         </ul>
      </div>
   </div>
   <div class="contact-area py-120">
      <div class="container">
         <div class="contact-wrapper">
            <div class="row">
               <div class="col-lg-8 align-self-center">
                  <div class="contact-form">
                     <div class="contact-form-header">
                        <h2>Get In Touch</h2>
                        <p style="color: black;"><!--It is a long established fact that a reader will be distracted by the readable
                           content of a page randomised words which don't look even slightly when looking at its layout.--> 
                        </p>
                     </div>
                    <div id="content-div">
                     <form method="post" id="contactForm">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="type" id="type" value="send_mail" hidden>
                        </div>
                        <div class="form-group">
                           <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required>
                        </div>
                        <div class="form-group">
                           <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                        </div>
                        <div>
                            <i id='submit_spin'></i>
                        <button type="submit" class="theme-btn" id="mail_btn">Send Message <i class="far fa-paper-plane"></i></button>
                        <div id="msgSubmit"></div>
                        </div>
                        <div class="col-md-12 mt-3">
                           <div class="form-messege text-success"></div>
                        </div>
                     </form>
                    </div> 
                    <div id="update-div" style="display: none;">
                    <center style="font-size: 24px; font-weight: 500; color: darkolivegreen;">
                        <h3 style="font-size: 45px;color: green;font-weight: 700;">Thank You for Reaching Out!</h3><br>
                        We've received your message and will get back to you shortly. In the meantime, feel free to explore more of our website.<br>
                        Thanks for Your Interest!
                    </center>
                </div>
                    <div id="loading-div" style="display: none;">
                         <center> <img src="images/loading.gif" style="width: 250px;"><br><b class="blinking">Processing Please Wait...</b></center>
                    </div>
                  </div>
               </div>
               
               
               
        
               <div class="col-lg-4">
                   <div class="contact-content">
                       
                       
                       
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Head Quarters</h5>
                           <p style="color: black;">293 / 4, MG Road,
                              New Fairlands, Salem,
                              Tamil Nadu - 636016, India.
                           </p>
                        </div>
                     </div>
                     
                     
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Branch</h5>
                           <p style="color: black;">Nitin’s Enclave, 91/146, Rana Lakshmanan Nagar, Perundurai Road, Erode - 638011, India.
                           </p>
                        </div>
                     </div>
                     
                     
                     
                     
                     
                     
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Call Us</h5>
                           <p style="color: black;">+91 8946-082-285</p>
                           <p style="color: black;">+91 427-3500402</p>
                        </div>
                     </div>
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Email Us</h5>
                           <p style="color: black;">
                               <a href="mailto:support@infogsolution.co.in" class="__cf_email__" data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">support@infogsolution.co.in</a>
                            </p>
                        </div>
                     </div>
                  </div>
                   
                   
                   
               </div>
          
               <!--<div class="col-lg-6" style="padding-top: 10px;">
                   <center><b>Salem</b></center>
                  <div class="contact-content">
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Office Address</h5>
                           <p style="color: black;">293 / 4, MG Road,
                              New Fairlands, Salem,
                              Tamil Nadu 636016, India.
                           </p>
                        </div>
                     </div>
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Call Us</h5>
                           <p style="color: black;">+91 9943-501-501</p>
                           <p style="color: black;">427-3500898 </p>
                        </div>
                     </div>
                     <div class="contact-info">
                        <div class="contact-info-icon">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                           <h5>Email Us</h5>
                           <p style="color: black;"><a href="mailto:info@infogsolution.com" class="__cf_email__" data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">info@infogsolution.com</a></p>
                        </div>
                     </div>
                  </div>
               </div>-->
            
       
               
            </div>
         </div>
      </div>
   </div>
   <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15629.432726188365!2d78.13995667759404!3d11.669008017513379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf042af146013%3A0x4104c8849da07579!2sInfo%20G%20Solution!5e0!3m2!1sen!2sin!4v1661161463074!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
       $("#contactForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        $("#content-div").hide();
        $("#loading-div").show();
        var form = $(this);
        var actionUrl = 'mail/api/register-api.php';
        console.log('submit...');
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
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
<?php include 'footer.php'; ?>
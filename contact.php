<?php
$pageTitle = "Contact Us";
include_once("header.php");
?>

<!--  Page Content  -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Contact Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Contact US</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        
                    </p>
                    <?php if(!isset($_GET["submit"])) {?>
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="https://formspree.io/ferric.chemicals@gmail.com" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" required="required" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" required="required" name="email" id="email" >
                            </div>
                             <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="text" placeholder="Your Company" class="form-control" required="required" name="company" id="company" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject" class="form-control" required="required" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" required="required" name="message" id="message"></textarea>    
                            </div>
                            <input type="hidden" name="_next" value="//<?php echo $_SERVER['HTTP_HOST'];?>/contact.php?submit=done" />
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                            </div>                      
                            
                        </form>
                    </div>
                    <?php } else { ?>
                    <h1 class="text-success">Thank You for contact us. </h1><h3>We will back to you soon.</h3>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-6 hidden">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.
                        
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2spushpraj+industrial+estate!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-4">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>B/120 , Pushpraj Industrial Estate, <br>Nutan Mill compound, <br/>Near City Gold, Bapunagar Saraspur<br/>Ahmedabad - 24</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>ferric.chemicals@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 hidden">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 999 999 999</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once("footer.php");
?>
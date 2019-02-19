<?php

require_once  'classes.php';

$title = 'About';

require_once 'header1.php';
?>
<body>
<section style="margin-top: 0px;"> 
<script type="text/javascript" src="../JS/slideShow.js"></script>

<div class="row"  style="marging-left: 20px;">
    <div class="col-md-12" style="padding-top: 50px; padding-bottom: 0px;">
        <table class="center" style="height: 100px;" width="1071">
            <tbody>
                <tr>
                    <td style="width: 267px;">&nbsp;<img name="slide1"></td>
                    <td style="width: 267px;">&nbsp;<img name="slide2"></td>
                    <td style="width: 268px;">&nbsp;<img name="slide3"></td>
                    <td style="width: 268px;">&nbsp;<img name="slide4"></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require_once  'contact.php';?>

<section style="margin-top: 0px; background-color: #0b315a;">
        <div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-12" style="color: #fff">
                    <h3>Would you like to work with us?</h3>
                    <a href="#contact" class="btn btn-default-o btn-lg">Call Us Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titles2" style="color: #4c4c4c; text-align: center;">
                        <h3>Let's make some magic</h3>
                        <p>Get in Touch with Us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                <form method="POST"  id="registerform" class="contact-form" style="margin-bottom: 10px;" role="form">

                    <input type="text" name="fname" class="form-control" value="" placeholder="First name" pattern="^[a-zA-Z]+$" required>
                    <br>
                    <input type="email" name="useremail" class="form-control" value="" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <br>
                    <input type="number" name="phone" class="form-control" value="" placeholder="Phone" pattern="^[a-zA-Z0-9_]+$" required>
                    <br>
                   
                    <textarea rows="10" class="form-control" name="mssg" value="" placeholder="Your Message"></textarea>
                    <br>
                    <button type="submit" name="submit" class="btn btn-main btn-lg" value="OK" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane "></i> Send</button>
                    <br>
                </form>



                    <div id="result-message" role="alert"></div>
                    </div>
                    <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <h3 class="sub-txt" style="color: #4c4c4c; margin-top: 0;">Business Hours</h3>
                            <p style="color: #4c4c4c;">
                                Monday-Friday: 9AM-6PM<br>
                                Public Holidays: 9AM-1PM<br>
                                Weekends: Closed
                            </p>
                            <address>
                                <h3 class="sub-txt" style="color: #4c4c4c;">Come See Us</h3>
                                <p style="color: #4c4c4c;">
                                    4th floor, Block A<br>
                                    Cape Town Garage<br>
                                    Woodstock Exchange<br>
                                    66-68 Albert Road<br>
                                    Woodstock, Cape Town
                                </p>
                            </address>
                            <h3 class="sub-txt" style="color: #4c4c4c;">Contact Details</h3>
                            <p style="color: #4c4c4c;">
                                Office Number: 082 701 4065<br>
                                Other Number: 071 219 1657<br>
                                Email Us: hello@zakhanya.co.za<br>
                            </p>
                            <div class="">
                                <a href="https://www.linkedin.com/company/10649386/" target="_blank" class="social linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a><br>
                                <a href="https://www.facebook.com/zakhanyasystems/" target="_blank" class="social facebook"><i class="fa fa-facebook"></i> Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="//code.tidio.co/wjh8o1utwpu0ozo1izhubkexgfcmzdsy.js"></script>
</body>


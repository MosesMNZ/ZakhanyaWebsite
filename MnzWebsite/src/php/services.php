

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php

require_once  'classes.php';

$title = 'About';


require_once 'header1.php';
?>
    <section  class="background1" style="margin-top: 0px; color: #fff;" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titles2" style="padding-top: 8%; text-align: center;">
                        <h3>What we do</h3>
                        <p>Only the best</p>
                    </div>
                    <div class="row" style="padding-top: 7%;">
                        <div class="col-md-3">
                            <div class="st-feature">
                                <div class="st-feature-icon" style="color: #fff;"><i class="fa fa-gears"></i></div>
                                    <strong class="st-feature-title" style="color: #fff;">Custom Development</strong>
                                    <p>Custom made corporate software solutions, to cater to your every business need</p>
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="st-feature">
                                <div class="st-feature-icon" style="color: #fff;"><i class="fa fa-mobile"></i></div>
                                    <strong class="st-feature-title" style="color: #fff;">Mobile Applications</strong>
                                    <p>Android and IOS mobile applications, built using hybrid or native technologies</p>
                                </div>
                            </div>
                        
                        <div class="col-md-3">
                            <div class="st-feature">
                                <div class="st-feature-icon" style="color: #fff;"><i class="fa fa-globe"></i></div>
                                    <strong class="st-feature-title" style="color: #fff;">Corporate Websites</strong>
                                        <p>Beautifully made websites, for your own corporate identity, that you can be proud of</p>
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="st-feature">
                                <div class="st-feature-icon" style="color: #fff;"><i class="fa fa-users"></i></div>
                                    <strong class="st-feature-title" style="color: #fff;">Outsourcing</strong>
                                    <p>Get developers to work on your project, at your offices, without the hassle of hiring</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    <section class="features-desc">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="../ressources/mac2.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-7" style="color: #4c4c4c;">
                    <h3 class="sub-text" style="font-size: 25px;margin-top:0; margin-bottom:1em; color: #4c4c4c;"><b>SOME OF THE REASONS TO WORK WITH US</b></h3>
                    <p class="sub-text" style="margin-top:0; color: #4c4c4c;">
                    <?php
                        $myfile = fopen("services.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("services.txt"));
                        fclose($myfile);
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="//code.tidio.co/wjh8o1utwpu0ozo1izhubkexgfcmzdsy.js"></script>

</body>
</html> 
<?php
require 'include_php/configwithcookies.php'; 
$page = "Contact Us";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include_php/head.php'); ?>
    <title><?php print $page; ?></title>
</head>
<body>
<?php include('include_php/header.php'); ?>
<div class="breadcrumb" id="aboutus">
    <ol>
        <li><a href="index">Home</a></li>
        <li><?php print $page; ?></li>
    </ol>
</div>
<section class="content">
    <div class="row mb-lg">
        <div class="grid-12 grid-sm-6 padded">
            <h3>Drop us a line<hr/></h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="entered_fullname">Full name <span class="required-span">*</span></label>
                    <input type="text" class="form-control" name="fullname" id="entered_fullname" required>
                </div>
                <div class="form-group">
                <label for="entered_email">Email <span class="required-span">*</span></label>
                    <input type="email" class="form-control" name="email" id="entered_email" required>
                </div>
                <div class="form-group">
                <label for="entered_subject">Subject <span class="required-span">*</span></label>
                    <input type="text" class="form-control" name="subject" id="entered_subject">
                </div>
                <div class="form-group">
                <label for="entered_message">Message <span class="required-span">*</span></label>
                    <textarea name="message" class="form-control" id="entered_message" required></textarea>
                </div>
                <div class="form-group">
                    <label >Attachment</label>
                    <div class="file-input">
                        <input type="file" id="filecustom" name="attachment" class="filecustom">
                        <label for="filecustom">Select file
                            <p class="file-name"></p>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn contactus">Send</button>
                </div>
            </form>
        </div>
        <div class="grid-12 grid-sm-6 padded">
            <h3>Contact Information <hr/></h3>
            <p class="block">We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated. Please complete the form below. </p>
            <p class="block"><i class="fa fa-home"></i> 72 Greerton Road, Gate Pa, Tauranga 3112, New Zealand</p>
            <p class="block"><i class="fa fa-phone"></i> <a href="tel:07-000-0000">07-000-0000</a></p>
            <p class="block"><i class="fa fa-envelope"></i> <a href="mailto:customer@reown.co.nz">customer@reown.co.nz</a></p>
            <p class="block"><i class="fa fa-clock"></i> Everyday 9:00-17:00</p>
        </div>
        
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
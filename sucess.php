<?php
require 'include_php/configwithcookies.php'; 
$page = "Sucessfull payment";
setcookie('cart', '', time()-3600 , "/");
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
    </ol>
</div>
<section class="content">
    <div class="row">
        <div class="grid-12 padded mb-4">
            <h3>Thank You<hr/></h3>
            <p style="text-align:justify;">Order has been confirmed, we have send you email about the order. Please your email and products will be delivery to you.</p>
            <p style="text-align:justify;">If you have any questions regarding this Privacy Policy, you should contact our Customer Service Department by email at <a href="mailto:contact@reown.co.nz"><span class="__cf_email__" >contact@reown.co.nz</span></a></p>
        </div>
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
<?php
require 'include_php/configwithcookies.php'; 
if(!isset($_SESSION['clientID'])){
    $_SESSION['url'] = 'cart';
    header('Location: register');
}
$page = "Shopping Cart";
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
    <div class="row">
        <div class="error" style="display:none; color:red;"></div>
    </div>
    <div class="row">
        <div class="grid-md-8 grid-12">
            <h3>List of item on cart</h3>
            <?php
            $total = 0.00;
            $cartfalse = true;
            $cartproduct = array();
            if(@$cartData){
                print '<ul>';
                for ($i=0; $i < sizeof($cartData); $i++) { 
                    $pID = $cartData[$i]['product_id'];
                    $size = $cartData[$i]['size'];
                    $qty = $cartData[$i]['qty'];
                    $psql = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $pID") or die(mysqli_error());
                    $rowp = mysqli_fetch_object($psql);
                    $thumbnails = mysqli_query($conn, "SELECT img_src FROM  productimage WHERE image_type = 1 AND pID = $pID LIMIT 1") or die(mysqli_error($conn));
                    $row_thumb = mysqli_fetch_object($thumbnails);
                    
                    $sql = mysqli_query($conn, "SELECT CV.color_code as colorCode, CV.color_name as colorName, CV.color_id as colorID FROM productvariant as PV, colorvariable as CV WHERE CV.color_id = PV.colorID AND PV.pID = $pID GROUP BY PV.colorID Limit 1") or die(mysqli_error($conn));
                    $rowCV = mysqli_fetch_object($sql);
                    $sql = mysqli_query($conn, "SELECT size_id FROM sizevariable WHERE size_name = '$size'") or die(mysqli_error($conn));
                    $rowSV = mysqli_fetch_object($sql);
                    $sql = mysqli_query($conn, "SELECT price FROM productvariant WHERE pID = $pID GROUP BY price LIMIT 1") or die(mysqli_error($conn));
                    $rowSql =  mysqli_fetch_object($sql);
                    $total += $rowSql->price * $qty;
                    ?>
                        <div class="pb-1">
                            <p><span class="bold">Product Name :</span> <?php print $rowp->product_name; ?> <span class="bold">Size: <?php print $size; ?></p>
                            <p><span class="bold">Price(per unit):</span> $<?php print $rowSql->price; ?>  <span class="bold">Quantity:</span> <?php print $qty; ?></p>
                            <p><span class="bold">Total:</span> $<?php print $rowSql->price * $qty; ?></p>
                        </div>
                        <br/>
                    <?php
                }
                print '</ul>';
            }
            else{
                print 'No product';
            }
            ?>
           
        </div>
        <div class="grid-md-4 grid-12">
            Total amount of   
            <p>Total <span>$<?php print $total; ?></span></p>
            <a class="bg-primiary btn-lg paybtn" <?php $cartfalse == true ? print 'disabled': print ''; ?>>Pay</a>
        </div>
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
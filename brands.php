<?php
require 'include_php/configwithcookies.php'; 
$page = "Brands";
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
    <?php
    $band_cat = mysqli_query($conn, "SELECT brand_list_name FROM brand GROUP BY brand_list_name") or die(mysqli_error($conn));
    $brand_list_name = array();
    while($row = mysqli_fetch_object($band_cat)){
        $brand_list_name[] = $row->brand_list_name;
    }
    
    ?>
    <div class="filter-containor mb-3">
        <div>
            <button class="d-flex align-items-center border rounded-sm justify-content-center d-sm-block filter-button border pb-3 pt-3 bg-primiary w-100">Filter Brands By <span class="filter-letter"></span><i class="fas fa-chevron-down ml-1"></i></button>
        </div>
        <ul class="flex-wrap list-unstyled justify-content-start filter-lists filterListOpacityHidden">
            <li class="border p-2 flex-1 all-cat cursor-pointer active">All</li>
            <?php
            foreach($brand_list_name as $brand_name){
                ?>
            <li data-id="<?php print $brand_name ?>" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                <?php print $brand_name ?>                                
            </li>
                <?php
            }
            ?>
            
            
        </ul>
    </div>
    <div class="filter-header d-flex d-sm-none mt-3 mb-3 p-3">
        <h2 class="filter-letter-top m-0">All Brands</h2>
        <h2 class="filter-letter m-0 ml-1"></h2>
    </div>
    <div class="filter-contents">
    <?php foreach($brand_list_name as $brand_name){ ?>
        <div class="filter-container" id="<?php print $brand_name ?>">
            <div class="row">
                <?php $sql = mysqli_query($conn, "SELECT * FROM brand WHERE brand_list_name = '$brand_name' ORDER BY brand_name") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_object($sql)){
                        ?>
                        <a href="brand-<?php print $row->brand_url ?>" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                            <div class="grouped-filter-inner rounded-lg p-4 h-100">
                                <span class="mb-2"><?php print $row->brand_name; ?></span>
                                <div class="filter-image-containor">
                                    <img src="Image/icons/<?php print $row->brand_logo; ?>" alt="">
                                </div>
                            </div>   
                        </a>
                        <?php
                    } 
                ?>
                
                
            </div>
        </div>
        <?php
        } 
    ?>
        
        
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
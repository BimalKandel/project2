<?php
require 'include_php/configwithcookies.php'; 
$page = "Shop";
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
    <form action="" method="GET">   
        <div class="row pb-4">
            <div class="grid-md-5-t grid-12">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <?php
                    $sqltype = mysqli_query($conn, "SELECT * FROM `type`") or die(mysqli_error($conn));
                    while($rowtype = mysqli_fetch_object($sqltype)){
                        ?>
                        <option value="<?php print $rowtype->type_id ?>" <?php if(isset($Type) && $Type == $rowtype->type_id){ print 'selected'; } ?>><?php print $rowtype->type_name ?></option>
                        <?php
                    }       
                    ?>
                </select>
            </div>
            <div class="grid-md-5-t grid-12">
                <label for="category">Category</label>
                <select name="category" id="category">
                    <?php
                    $sqlcategories = mysqli_query($conn, "SELECT * FROM `categories`") or die(mysqli_error($conn));
                    while($rowcategories = mysqli_fetch_object($sqlcategories)){
                        ?>
                        <option value="<?php print $rowcategories->category_id ?>" <?php if(isset($categories) && $categories == $rowcategories->category_id){ print 'selected'; } ?>><?php print $rowcategories->category_name ?></option>
                        <?php
                    }       
                    ?>
                </select>
            </div>
            <div class="grid-md-5-t grid-12">
                <label for="color">Color</label>
                <select name="color" id="color">
                    <?php
                    $sqlcolor = mysqli_query($conn, "SELECT * FROM `colorvariable`") or die(mysqli_error($conn));
                    while($rowcolor = mysqli_fetch_object($sqlcolor)){
                        ?>
                        <option value="<?php print $rowcolor->color_id ?>" <?php if(isset($color) && $color == $rowcolor->color_id){ print 'selected'; } ?>><?php print $rowcolor->color_name ?></option>
                        <?php
                    }       
                    ?>
                </select>
            </div>
            <div class="grid-md-5-t grid-12">
                <label for="brand">Brand</label>
                <select name="brand" id="brand">
                    <?php
                    $sqlbrand = mysqli_query($conn, "SELECT * FROM `brand`") or die(mysqli_error($conn));
                    while($rowbrand = mysqli_fetch_object($sqlbrand)){
                        ?>
                        <option value="<?php print $rowbrand->brand_id ?>" <?php if(isset($brand) && $brand == $rowbrand->brand_id){ print 'selected'; } ?>><?php print $rowbrand->brand_name ?></option>
                        <?php
                    }       
                    ?>
                </select>
            </div>
            <div class="grid-md-5-t grid-12">
                <label for="sort-by">Sort By</label>
                <select name="sort-by" id="sort-by">
                    <option value="price-low">Lower price</option>
                    <option value="price-high">Higher price</option>
                </select>
            </div>
        </div>
    </form>
    <div class="row">
    <?php
    $sql = "SELECT * FROM product WHERE prodcut_status = 1";
    $sqlproducts = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($sqlproducts) > 0){
        while($row = mysqli_fetch_object($sqlproducts)){
            $thumbnails = mysqli_query($conn, "SELECT img_src FROM  productimage WHERE image_type = 1 AND pID = ".$row->product_id." LIMIT 1") or die(mysqli_error($conn));
            $row_thumb = mysqli_fetch_object($thumbnails);
            $colorVariable = array();
            $sizeVariable = array();
            $sql = mysqli_query($conn, "SELECT CV.color_code as colorCode, CV.color_name as colorName FROM productvariant as PV, colorvariable as CV WHERE CV.color_id = PV.colorID AND PV.pID = $row->product_id GROUP BY PV.colorID") or die(mysqli_error($conn));
            while($rowPV = mysqli_fetch_object($sql)){
                $colorVariable[''.$rowPV->colorName.''] = $rowPV->colorCode;
            }
            $sql = mysqli_query($conn, "SELECT SV.size_name as sizeName FROM productvariant as PV, sizevariable as SV WHERE SV.size_id = PV.sizeID AND PV.pID = $row->product_id GROUP BY PV.sizeID") or die(mysqli_error($conn));
            while($rowPV = mysqli_fetch_object($sql)){
                $sizeVariable[] = $rowPV->sizeName;
            }
            $sql = mysqli_query($conn, "SELECT price FROM productvariant WHERE pID = $row->product_id GROUP BY price LIMIT 1") or die(mysqli_error($conn));
            $rowSql =  mysqli_fetch_object($sql);
            ?>
            <article class="product-list grid-12 grid-sm-6 grid-md-3" data-id-product="12">
                <div class="product-outer">
                    <div class="thumbnail-container product-inner">
                        <div class="product-image">
                            <a href="#" class="thumbnail product-thumbnail">
                                <img src="Image/Product/<?php print $row_thumb->img_src; ?>" alt="" data-full-size-image-url="Image/Product/<?php print $row_thumb->img_src; ?>">
                            </a>
                            <ul class="product-flags">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-item-control">
                                <div class="product-item-action">
                                    <div class="wishlist product-item-wishlist">
                                        <a class="addToWishlist wishlistProd_12" href="#" data-rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <form action="cart" method="post" class="addingtoCart">
                                        <div class="pg_attr_custom">
                                            <div class="product-list-variants">
                                                <div class="product-attribute">
                                                    <div class="clearfix product-variants-item">
                                                        <h4 class="control-label panel-product-label">Size</h4>
                                                        <div class="attribute-values">
                                                            <ul>
                                                                <?php
                                                                $i=1;
                                                                foreach($sizeVariable as $sv){
                                                                    ?>
                                                                    <li title="<?php print $sv; ?>" class="input-container pull-xs-left">
                                                                        <input class="input-radio data_product_attribute" type="radio" data-product-attribute="<?php print $sv; ?>" name="group[1]" value="<?php print $sv; ?>" <?php $i==1?print 'checked="checked"': print ''; ?>>
                                                                        <span class="radio-label" title="<?php print $sv; ?>"><?php print $sv; ?></span>
                                                                    </li>
                                                                    <?php
                                                                    $i++;
                                                                } ?>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="clearfix product-variants-item">
                                                        <h4 class="control-label panel-product-label">Color</h4>
                                                        <div class="attribute-values" id="index">
                                                            <ul class="panel-product-line panel-product-colors">
                                                                <?php
                                                                $i = 1;
                                                                foreach($colorVariable as $cv => $value){ ?>
                                                                <li title="<?php print $cv; ?>" class="pull-xs-left input-container">
                                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="2" name="group[2]" value="<?php print $value; ?>" <?php $i==1?print 'checked="checked"': print ''; ?>>
                                                                    <span title="<?php print $cv; ?>" class="color" style="background-color: <?php print $color; ?>"><span class="sr-only"><?php print $cv; ?></span></span>
                                                                </li>
                                                                <?php
                                                                $i++;
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group_addcart_quickshop">
                                            <span class="pg_button_quickshop product-item-cart">Quick Shop</span>
                                            <input type="hidden" value="addtocart" name="action">
                                            <input type="hidden" value="<?php print $row->product_id; ?>" name="product_id">
                                            <input type="hidden" class="input-group form-control" name="qty" value="1">
                                            <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                        </div>
                                    </form>             
                                </div>
                            </div>
                            <div class="pg_attr_quickshop">
                                <span class="close_quickshop"><i class="fas fa-times"></i></span>
                                <form action="cart" method="post" class="addingtoCart1" >
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <?php
                                                            $i=1;
                                                            foreach($sizeVariable as $sv){
                                                                ?>
                                                                <li title="<?php print $sv; ?>" class="input-container pull-xs-left">
                                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="<?php print $sv; ?>" name="group[1]" value="<?php print $sv; ?>" <?php $i==1?print 'checked="checked"': print ''; ?>>
                                                                    <span class="radio-label" title="<?php print $sv; ?>"><?php print $sv; ?></span>
                                                                </li>
                                                                <?php
                                                                $i++;
                                                        } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Color</h4>
                                                <div class="attribute-values">
                                                    <ul class="panel-product-line panel-product-colors">
                                                        <?php
                                                        $i = 1;
                                                        foreach($sizeVariable as $sv){
                                                            ?>
                                                            <li title="<?php print $sv; ?>" class="input-container pull-xs-left">
                                                                <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[2]" value="<?php print $sv; ?>"  <?php $i==1?print 'checked="checked"': print ''; ?>>
                                                                <span class="radio-label" title="<?php print $sv; ?>"><?php print $sv; ?></span>
                                                            </li>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_price_ajax" style="display:none"></div>
                                    <input type="hidden" value="1" name="ajax">
                                    <input type="hidden" value="productrefresh" name="action">
                                    <input type="hidden" value="<?php print $row->product_id; ?>" name="product_id">
                                    <input type="hidden" class="input-group form-control" name="qty" value="1">
                                    <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="product-description product-infor">
                            <h3 class="h3 product-title" itemprop="name">
                            <a href="#"><?php print $row->product_name; ?></a>
                            </h3>
                            <div class="product-price-and-shipping product-price">
                                <span itemprop="price" class="price ">$<?php print $rowSql->price; ?></span>
                            </div>
                            <div class="variant-links item-colors">
                                <?php
                                foreach($colorVariable as $color => $value){
                                    ?><a class="color catalog-swatch-item" title="<?php print $color; ?>" style="display: none;"><span class="sr-only" style="background-color: <?php print $value; ?>"></span></a><?php
                                }
                                ?>
                                <span class="js-count count">+4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        <?php
        }
    }
    else{
        print '<h3> NO prodcuts at the moments</h3>';
    }
    ?>
    </div>
    
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
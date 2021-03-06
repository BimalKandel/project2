<?php
require 'include_php/configwithcookies.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_php/head.php'); ?>
    <title>Re-own</title>
</head>
<body>
    <section class="top">
        <img src="Image/SVG/Right.svg" id="right-backgorund-element"/>
        <a href="#readmore" class="right-more">Read More <i class="fa fa-arrow-right"></i></a>
        <?php include('include_php/header.php'); ?>
        <?php include('include_php/custom-shape-divider.php'); ?>
        <div class="banner">
            <div class="banner-containor">
                <h1>Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi voluptatibus porro similique enim, qui perspiciatis accusantium harum, dolorem id laboriosam. At cumque harum ipsa et nostrum, libero veniam vel.</p>
            </div>
            <div class="banner-image">
                <img class="banner-image-src" src="Image/recycle.jpg" alt="" srcset="">
            </div>
            
        </div>
    </section>
    <section class="buy-sell">
        <div class="buy">
            <a href="shop" class="btn-large" id="buying-btn">Buy</a>
        </div>
        <div class="sell">
            <a href="sell" class="btn-large" id="selling-btn">Sell</a>
        </div>
    </section>
    
    <section class="features-product">       
        <div class="split">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,16.8c0-8.11-8.88-13.2-19.92-13.2H0V120H1200V3.6H619.92C608.88,3.6,600,8.66,600,16.8Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="top-section">
            <h2><span class="title-of-section">Lastest</span>
                <a href="product"><button class="view-all">View All <i class="fas fa-arrow-right"></i></button></a></h2>
            
            <hr/>
        </div>
        <div class="lastest-main">
        <?php
            $product = mysqli_query($conn, "SELECT * FROM product WHERE prodcut_status = 1 LIMIT 4") or die(mysqli_error($conn));
            while($row = mysqli_fetch_object($product)){
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
                                <form action="cart" method="post" class="addingtoCart1">
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <?php
                                                        $i = 1;
                                                        foreach($sizeVariable as $sv){
                                                            ?>
                                                            <li title="<?php print $sv; ?>" class="input-container pull-xs-left">
                                                                <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="<?php print $sv; ?>"  <?php $i==1?print 'checked="checked"': print ''; ?>>
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
                                foreach($colorVariable as $color =>$value){
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
            ?>
        </div>
    </section>
    <div class="spacer layer1"></div>
    <section class="brands">
        <div class="top-section">
            <h2><span class="title-of-section">Brands</span>
                <a href="brands"><button class="view-all">View All <i class="fas fa-arrow-right"></i></button></a></h2>
            
            <hr/>
        </div>
        <div class="brand-main">
            <?php
            $brands = mysqli_query($conn, "SELECT * FROM brand ORDER BY brand_name LIMIT 5") or die(mysqli_error($conn));
            while($row = mysqli_fetch_object($brands)){
               ?>
            <div class="brand grid-12 grid-sm-6 grid-md-4 grid-lg-3 grid-xl-5-t">
                <a href="brand-<?php print $row->brand_url; ?>"><img src="Image/icons/<?php print $row->brand_logo; ?>" alt="<?php print $row->brand_name; ?>"></a>
            </div>
               <?php
            }
            ?>
        </div>
    </section>
    <div class="spacer layer2"></div>
    <?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
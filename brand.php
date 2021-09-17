<?php
if(!isset($_GET['key'])){
    header('Location: brands');
}
$key = str_replace('_', ' ', $_GET['key']);
?>
<?php
require 'include_php/config.php'; 
$page = $key;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include_php/head.php'); ?>
    <title><?php print $page.' - ReOwn'; ?></title>
</head>
<body>
<?php include('include_php/header.php'); ?>
<div class="breadcrumb" id="aboutus">
    <ol>
        <li><a href="index">Home</a></li>
        <li><?php print $page; ?></li>
    </ol>
</div>
<section class="content d-flex">

    <article class="product-list grid-12 grid-sm-6 grid-md-3" data-id-product="12">
        <div class="product-outer">
            <div class="thumbnail-container product-inner">
                <div class="product-image">
                    <a href="product-1" class="thumbnail product-thumbnail">
                        <img src="Image/Product/39ea3e21b6.jpg" alt="" data-full-size-image-url="Image/Product/39ea3e21b6.jpg">
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
                            <form action="cart.php" method="post">
                                <div class="pg_attr_custom">
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <li title="S" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                            <span class="radio-label" title="S">S</span>
                                                        </li>
                                                        <li title="M" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                            <span class="radio-label" title="M">M</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Color</h4>
                                                <div class="attribute-values" id="index">
                                                    <ul class="panel-product-line panel-product-colors">
                                                        <li title="Grey" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                            <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                        </li>
                                                        <li title="Off White" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                            <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                        </li>
                                                        <li title="Brown" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                            <span title="Brown" class="color" style="background-color: #964B00"><span class="sr-only">Brown</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="block_price_ajax" style="display:none"></div>
                                    <input type="hidden" value="1" name="ajax">
                                    <input type="hidden" value="productrefresh" name="action"> -->
                                </div>
                                <div class="group_addcart_quickshop">
                                    <span class="pg_button_quickshop product-item-cart">Quick Shop</span>
                                    <!-- <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                                    <input type="hidden" value="12" name="id_product">
                                    <input type="hidden" class="input-group form-control" name="qty" value="1"> -->
                                    <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                </div>
                            </form>             
                        </div>
                    </div>
                    <div class="pg_attr_quickshop">
                        <span class="close_quickshop"><i class="fas fa-times"></i></span>
                        <form action="cart.php" method="post">
                            <div class="product-list-variants">
                                <div class="product-attribute">
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Size</h4>
                                        <div class="attribute-values">
                                            <ul>
                                                <li title="S" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                    <span class="radio-label" title="S">S</span>
                                                </li>
                                                <li title="M" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                    <span class="radio-label" title="M">M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Color</h4>
                                        <div class="attribute-values">
                                            <ul class="panel-product-line panel-product-colors">
                                                <li title="Grey" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                    <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                </li>
                                                <li title="Off White" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                    <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                </li>
                                                <li title="Brown" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                    <span title="Brown" class="color" style="background-color: rgb(150, 75, 0); display: none;"><span class="sr-only">Brown</span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block_price_ajax" style="display:none"></div>
                            <input type="hidden" value="1" name="ajax">
                            <input type="hidden" value="productrefresh" name="action">
                            <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                            <input type="hidden" value="12" name="id_product">
                            <input type="hidden" class="input-group form-control" name="qty" value="1">
                            <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="product-description product-infor">
                    <h3 class="h3 product-title" itemprop="name">
                        <a href="https://prestagold.net/claue/en/tshirts/12-131-faded-short-sleeves-tshirt.html#/1-size-s/17-color-brown">Calvin Klein Logo Sweatpants</a>
                    </h3>
                    <div class="product-price-and-shipping product-price">
                        <span itemprop="price" class="price ">$16.51</span>
                    </div>
                    <div class="variant-links item-colors">
                        <a href="https://prestagold.net/claue/en/tshirts/12-130-faded-short-sleeves-tshirt.html#/2-size-m/5-color-grey" class="color catalog-swatch-item color_Grey" title="Grey" style="display: none;"><span class="sr-only" style="background-color: #AAB2BD"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-129-faded-short-sleeves-tshirt.html#/2-size-m/9-color-off_white" class="color catalog-swatch-item color_Off White" title="Off White" style="display: none;"><span class="sr-only" style="background-color: #faebd7"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-128-faded-short-sleeves-tshirt.html#/2-size-m/17-color-brown" class="color catalog-swatch-item color_Brown" title="Brown" style="display: none;"><span class="sr-only" style="background-color: #964B00"></span></a>
                        <span class="js-count count">+4</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="product-list grid-12 grid-sm-6 grid-md-3" data-id-product="12">
        <div class="product-outer">
            <div class="thumbnail-container product-inner">
                <div class="product-image">
                    <a href="product-1" class="thumbnail product-thumbnail">
                        <img src="Image/Product/99ca58e781.jpg" alt="" data-full-size-image-url="Image/Product/99ca58e781.jpg">
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
                            <form action="cart.php" method="post">
                                <div class="pg_attr_custom">
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <li title="S" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                            <span class="radio-label" title="S">S</span>
                                                        </li>
                                                        <li title="M" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                            <span class="radio-label" title="M">M</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Color</h4>
                                                <div class="attribute-values" id="index">
                                                    <ul class="panel-product-line panel-product-colors">
                                                        <li title="Grey" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                            <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                        </li>
                                                        <li title="Off White" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                            <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                        </li>
                                                        <li title="Brown" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                            <span title="Brown" class="color" style="background-color: #964B00"><span class="sr-only">Brown</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="block_price_ajax" style="display:none"></div>
                                    <input type="hidden" value="1" name="ajax">
                                    <input type="hidden" value="productrefresh" name="action"> -->
                                </div>
                                <div class="group_addcart_quickshop">
                                    <span class="pg_button_quickshop product-item-cart">Quick Shop</span>
                                    <!-- <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                                    <input type="hidden" value="12" name="id_product">
                                    <input type="hidden" class="input-group form-control" name="qty" value="1"> -->
                                    <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                </div>
                            </form>             
                        </div>
                    </div>
                    <div class="pg_attr_quickshop">
                        <span class="close_quickshop"><i class="fas fa-times"></i></span>
                        <form action="cart.php" method="post">
                            <div class="product-list-variants">
                                <div class="product-attribute">
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Size</h4>
                                        <div class="attribute-values">
                                            <ul>
                                                <li title="S" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                    <span class="radio-label" title="S">S</span>
                                                </li>
                                                <li title="M" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                    <span class="radio-label" title="M">M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Color</h4>
                                        <div class="attribute-values">
                                            <ul class="panel-product-line panel-product-colors">
                                                <li title="Grey" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                    <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                </li>
                                                <li title="Off White" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                    <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                </li>
                                                <li title="Brown" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                    <span title="Brown" class="color" style="background-color: rgb(150, 75, 0); display: none;"><span class="sr-only">Brown</span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block_price_ajax" style="display:none"></div>
                            <input type="hidden" value="1" name="ajax">
                            <input type="hidden" value="productrefresh" name="action">
                            <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                            <input type="hidden" value="12" name="id_product">
                            <input type="hidden" class="input-group form-control" name="qty" value="1">
                            <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="product-description product-infor">
                    <h3 class="h3 product-title" itemprop="name">
                        <a href="https://prestagold.net/claue/en/tshirts/12-131-faded-short-sleeves-tshirt.html#/1-size-s/17-color-brown">Calvin Klein Logo Sweatpants</a>
                    </h3>
                    <div class="product-price-and-shipping product-price">
                        <span itemprop="price" class="price ">$16.51</span>
                    </div>
                    <div class="variant-links item-colors">
                        <a href="https://prestagold.net/claue/en/tshirts/12-130-faded-short-sleeves-tshirt.html#/2-size-m/5-color-grey" class="color catalog-swatch-item color_Grey" title="Grey" style="display: none;"><span class="sr-only" style="background-color: #AAB2BD"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-129-faded-short-sleeves-tshirt.html#/2-size-m/9-color-off_white" class="color catalog-swatch-item color_Off White" title="Off White" style="display: none;"><span class="sr-only" style="background-color: #faebd7"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-128-faded-short-sleeves-tshirt.html#/2-size-m/17-color-brown" class="color catalog-swatch-item color_Brown" title="Brown" style="display: none;"><span class="sr-only" style="background-color: #964B00"></span></a>
                        <span class="js-count count">+4</span>
                    </div>
                </div>
            </div>
        </div>
        
    </article>
    <article class="product-list grid-12 grid-sm-6 grid-md-3" data-id-product="12">
        <div class="product-outer">
            <div class="thumbnail-container product-inner">
                <div class="product-image">
                    <a href="product-1" class="thumbnail product-thumbnail">
                        <img src="Image/Product/e53292d1c.jpg" alt="" data-full-size-image-url="Image/Product/e53292d1c.jpg">
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
                            <form action="cart.php" method="post">
                                <div class="pg_attr_custom">
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <li title="S" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                            <span class="radio-label" title="S">S</span>
                                                        </li>
                                                        <li title="M" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                            <span class="radio-label" title="M">M</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Color</h4>
                                                <div class="attribute-values" id="index">
                                                    <ul class="panel-product-line panel-product-colors">
                                                        <li title="Grey" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                            <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                        </li>
                                                        <li title="Off White" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                            <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                        </li>
                                                        <li title="Brown" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                            <span title="Brown" class="color" style="background-color: #964B00"><span class="sr-only">Brown</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="block_price_ajax" style="display:none"></div>
                                    <input type="hidden" value="1" name="ajax">
                                    <input type="hidden" value="productrefresh" name="action"> -->
                                </div>
                                <div class="group_addcart_quickshop">
                                    <span class="pg_button_quickshop product-item-cart">Quick Shop</span>
                                    <!-- <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                                    <input type="hidden" value="12" name="id_product">
                                    <input type="hidden" class="input-group form-control" name="qty" value="1"> -->
                                    <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                </div>
                            </form>             
                        </div>
                    </div>
                    <div class="pg_attr_quickshop">
                        <span class="close_quickshop"><i class="fas fa-times"></i></span>
                        <form action="cart.php" method="post">
                            <div class="product-list-variants">
                                <div class="product-attribute">
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Size</h4>
                                        <div class="attribute-values">
                                            <ul>
                                                <li title="S" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                    <span class="radio-label" title="S">S</span>
                                                </li>
                                                <li title="M" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                    <span class="radio-label" title="M">M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Color</h4>
                                        <div class="attribute-values">
                                            <ul class="panel-product-line panel-product-colors">
                                                <li title="Grey" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                    <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                </li>
                                                <li title="Off White" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                    <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                </li>
                                                <li title="Brown" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                    <span title="Brown" class="color" style="background-color: rgb(150, 75, 0); display: none;"><span class="sr-only">Brown</span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block_price_ajax" style="display:none"></div>
                            <input type="hidden" value="1" name="ajax">
                            <input type="hidden" value="productrefresh" name="action">
                            <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                            <input type="hidden" value="12" name="id_product">
                            <input type="hidden" class="input-group form-control" name="qty" value="1">
                            <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="product-description product-infor">
                    <h3 class="h3 product-title" itemprop="name">
                        <a href="https://prestagold.net/claue/en/tshirts/12-131-faded-short-sleeves-tshirt.html#/1-size-s/17-color-brown">Calvin Klein Logo Sweatpants</a>
                    </h3>
                    <div class="product-price-and-shipping product-price">
                        <span itemprop="price" class="price ">$16.51</span>
                    </div>
                    <div class="variant-links item-colors">
                        <a href="https://prestagold.net/claue/en/tshirts/12-130-faded-short-sleeves-tshirt.html#/2-size-m/5-color-grey" class="color catalog-swatch-item color_Grey" title="Grey" style="display: none;"><span class="sr-only" style="background-color: #AAB2BD"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-129-faded-short-sleeves-tshirt.html#/2-size-m/9-color-off_white" class="color catalog-swatch-item color_Off White" title="Off White" style="display: none;"><span class="sr-only" style="background-color: #faebd7"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-128-faded-short-sleeves-tshirt.html#/2-size-m/17-color-brown" class="color catalog-swatch-item color_Brown" title="Brown" style="display: none;"><span class="sr-only" style="background-color: #964B00"></span></a>
                        <span class="js-count count">+4</span>
                    </div>
                </div>
            </div>
        </div>
        
    </article>
    <article class="product-list grid-12 grid-sm-6 grid-md-3" data-id-product="12">
        <div class="product-outer">
            <div class="thumbnail-container product-inner">
                <div class="product-image">
                    <a href="product-1" class="thumbnail product-thumbnail">
                        <img src="Image/Product/39ea3e21b6.jpg" alt="" data-full-size-image-url="Image/Product/39ea3e21b6.jpg">
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
                            <form action="cart.php" method="post">
                                <div class="pg_attr_custom">
                                    <div class="product-list-variants">
                                        <div class="product-attribute">
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Size</h4>
                                                <div class="attribute-values">
                                                    <ul>
                                                        <li title="S" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                            <span class="radio-label" title="S">S</span>
                                                        </li>
                                                        <li title="M" class="input-container pull-xs-left">
                                                            <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                            <span class="radio-label" title="M">M</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix product-variants-item">
                                                <h4 class="control-label panel-product-label">Color</h4>
                                                <div class="attribute-values" id="index">
                                                    <ul class="panel-product-line panel-product-colors">
                                                        <li title="Grey" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                            <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                        </li>
                                                        <li title="Off White" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                            <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                        </li>
                                                        <li title="Brown" class="pull-xs-left input-container">
                                                            <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                            <span title="Brown" class="color" style="background-color: #964B00"><span class="sr-only">Brown</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="block_price_ajax" style="display:none"></div>
                                    <input type="hidden" value="1" name="ajax">
                                    <input type="hidden" value="productrefresh" name="action"> -->
                                </div>
                                <div class="group_addcart_quickshop">
                                    <span class="pg_button_quickshop product-item-cart">Quick Shop</span>
                                    <!-- <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                                    <input type="hidden" value="12" name="id_product">
                                    <input type="hidden" class="input-group form-control" name="qty" value="1"> -->
                                    <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                                </div>
                            </form>             
                        </div>
                    </div>
                    <div class="pg_attr_quickshop">
                        <span class="close_quickshop"><i class="fas fa-times"></i></span>
                        <form action="cart.php" method="post">
                            <div class="product-list-variants">
                                <div class="product-attribute">
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Size</h4>
                                        <div class="attribute-values">
                                            <ul>
                                                <li title="S" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="1" checked="checked">
                                                    <span class="radio-label" title="S">S</span>
                                                </li>
                                                <li title="M" class="input-container pull-xs-left">
                                                    <input class="input-radio data_product_attribute" type="radio" data-product-attribute="1" name="group[1]" value="2">
                                                    <span class="radio-label" title="M">M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix product-variants-item">
                                        <h4 class="control-label panel-product-label">Color</h4>
                                        <div class="attribute-values">
                                            <ul class="panel-product-line panel-product-colors">
                                                <li title="Grey" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="5">
                                                    <span title="Grey" class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                </li>
                                                <li title="Off White" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="9">
                                                    <span title="Off White" class="color" style="background-color: #faebd7"><span class="sr-only">Off White</span></span>
                                                </li>
                                                <li title="Brown" class="pull-xs-left input-container">
                                                    <input class="input-color data_product_attribute" type="radio" data-product-attribute="3" name="group[3]" value="17" checked="checked">
                                                    <span title="Brown" class="color" style="background-color: rgb(150, 75, 0); display: none;"><span class="sr-only">Brown</span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block_price_ajax" style="display:none"></div>
                            <input type="hidden" value="1" name="ajax">
                            <input type="hidden" value="productrefresh" name="action">
                            <input type="hidden" name="token" value="4bbb84a853943eaf0b862c463fc3322d">
                            <input type="hidden" value="12" name="id_product">
                            <input type="hidden" class="input-group form-control" name="qty" value="1">
                            <button data-button-action="add-to-cart" class="product-item-cart">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="product-description product-infor">
                    <h3 class="h3 product-title" itemprop="name">
                        <a href="https://prestagold.net/claue/en/tshirts/12-131-faded-short-sleeves-tshirt.html#/1-size-s/17-color-brown">Calvin Klein Logo Sweatpants</a>
                    </h3>
                    <div class="product-price-and-shipping product-price">
                        <span itemprop="price" class="price ">$16.51</span>
                    </div>
                    <div class="variant-links item-colors">
                        <a href="https://prestagold.net/claue/en/tshirts/12-130-faded-short-sleeves-tshirt.html#/2-size-m/5-color-grey" class="color catalog-swatch-item color_Grey" title="Grey" style="display: none;"><span class="sr-only" style="background-color: #AAB2BD"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-129-faded-short-sleeves-tshirt.html#/2-size-m/9-color-off_white" class="color catalog-swatch-item color_Off White" title="Off White" style="display: none;"><span class="sr-only" style="background-color: #faebd7"></span></a>
                        <a href="https://prestagold.net/claue/en/tshirts/12-128-faded-short-sleeves-tshirt.html#/2-size-m/17-color-brown" class="color catalog-swatch-item color_Brown" title="Brown" style="display: none;"><span class="sr-only" style="background-color: #964B00"></span></a>
                        <span class="js-count count">+4</span>
                    </div>
                </div>
            </div>
        </div>
        
    </article>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
<?php
require 'include_php/config.php'; 
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
    <div class="filter-containor mb-3">
        <div>
            <button class="d-flex align-items-center border rounded-sm justify-content-center d-sm-block filter-button border pb-3 pt-3 bg-primiary w-100">Filter Brands By <span class="filter-letter"></span><i class="fas fa-chevron-down ml-1"></i></button>
        </div>
        <ul class="flex-wrap list-unstyled justify-content-start filter-lists filterListOpacityHidden">
            <li class="border p-2 flex-1 all-cat cursor-pointer active">All</li>
            <li data-id="0-9" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                0-9                                
            </li>
            <li data-id="A" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                A                                
            </li>
            <li data-id="B" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                B                                
            </li>
            <li data-id="C" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                C                                
            </li>
            <li data-id="D" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                D                                
            </li>
            <li data-id="E" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                E                                
            </li>
            <li data-id="F" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                F                                
            </li>
            <li data-id="G" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                G                                
            </li>
            <li data-id="H" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                H                                
            </li>
            <li data-id="I" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                I                                
            </li>
            <li data-id="J" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                J                                
            </li>
            <li data-id="K" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                K                                
            </li>
            <li data-id="L" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                L                                
            </li>
            <li data-id="M" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                M                                
            </li>
            <li data-id="N" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                N                                
            </li>
            <li data-id="O" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                O                                
            </li>
            <li data-id="P" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                P                                
            </li>
            <li data-id="Q" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                Q                                
            </li>
            <li data-id="R" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                R                                
            </li>
            <li data-id="S" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                S                                
            </li>
            <li data-id="T" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                T                                
            </li>
            <li data-id="U" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                U                                
            </li>
            <li data-id="V" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                V                                
            </li>
            <li data-id="W" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                W                                
            </li>
            <li data-id="X" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                X                                
            </li>
            <li data-id="Y" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                Y                                
            </li>
            <li data-id="Z" class="border p-2 filter-cat flex-1 cursor-pointer text-center">
                Z                                
            </li>
        </ul>
    </div>
    <div class="filter-header d-flex d-sm-none mt-3 mb-3 p-3">
        <h2 class="filter-letter-top m-0">All Brands</h2>
        <h2 class="filter-letter m-0 ml-1"></h2>
    </div>
    <div class="filter-contents">
        <div class="filter-container" id="0-9">
            <div class="row">
                <a href="brand-1" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
                <a href="brand-2" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
            </div>
        </div>
        <div class="filter-container" id="A">
            <div class="row">
                <a href="#asdasd" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
                <a href="#asdasd" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
            </div>
        </div>
        <div class="filter-container" id="B">
            <div class="row">
                <a href="brand-b1" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
                <a href="brand-b2" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
            </div>
        </div>
        <div class="filter-container" id="C">
            <div class="row">
                <a href="#asdasd" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
                <a href="#asdasd" class="text-decoration-none padded mb-4 grid-12 grid-md-4 grid-lg-3">
                    <div class="grouped-filter-inner rounded-lg p-4 h-100">
                        <span class="mb-2">Champion</span>
                        <div class="filter-image-containor">
                            <img src="Image/icons/champion.png" alt="">
                        </div>
                    </div>   
                </a>
            </div>
        </div>
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
<header>
    <div class="logo">
        <a href="index"><img src="Image/icons/main.-logo.png" alt=""></a>
    </div>
    <div class="menu">
        <div class="search">
            <form class="form-search" action="search" method="get"><input type="text" name="" id=""><button type="submit"><i class="fa fa-search"></i></button></form>
        </div>
        <nav>
            <div class="menu-icon show-mobile-view">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            
            <ul>
                <li><a href="shop">Shop</a></li>
                <li><a href="brands">Brands</a></li>
                <li><a href="sell">Sell</a></li>
                <?php if(isset($_SESSION['clientID'])){
                    $name = abbreviate($_SESSION['client_name']);
                    ?>
                    <li><a href="#"><?php print $name; ?></a></li>
                    <?php
                }
                else{
                    ?>
                    <li><a href="register">Login/SignUp</a></li>
                    <?php
                } ?>
                
                <li><a href="aboutus">About</a></li>
                <li><a href="cart"><i class="fab fa-opencart"></i> <span class="cart-number">0</span></a></li>
                <?php if(isset($_SESSION['clientID'])){
                    $name = abbreviate($_SESSION['client_name']);
                    ?>
                    <li><a href="logout">Logout</a></li>
                    <?php
                }?>
            </ul>
        </nav>
    </div>
</header>
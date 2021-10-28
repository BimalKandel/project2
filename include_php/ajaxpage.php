<?php
include('configwithcookies.php');
if(isset($_POST['action']) && $_POST['action'] == 'addtocart'){
    
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];
    $group = $_POST['group'];
    $size = $group[1];
    $color = $group[2];
    $product = array(
        "product_id" => $product_id,
        "qty" => $qty,
        "size" => $size,
        "color" => $color
    );
    $cartDatainside = array();
   
    if(@$cartData){
        $cartDatainside = $cartData;
        $products = array();

        for ($i=0; $i < sizeof($cartDatainside); $i++) { 
            $p = $cartDatainside[$i];
            $products[$p['product_id']] = $size ;
            if($p['product_id'] == $product_id && $p['size'] == $size){
                $p['qty'] += $qty;
                $cartDatainside[$i]['qty'] = $p['qty'];
                
            }
            
        }
        if(!array_key_exists($product_id, $products)){
            $cartDatainside[] = $product;
        }
        
        
        
    }
    else{
        $cartDatainside[] = $product;
        
    }
    print_r($cartDatainside);
    setcookie('cart', json_encode($cartDatainside), time()+3600 , "/");
   

}
if(isset($_POST['removefromcart'])){
    if(@$cartData){
        for ($i=0; $i < sizeof($cartData); $i++) { 
            $p = $cartData[$i];
            if($p['product_id'] == $product_id){
                unset($array[$i]);
                $cartData = array_values($cartData);
                
            }
            else{
                @$cartData[] = $product;
            }
        }
    }
    if(count(@$cartData[0]) == 0){
        setcookie('cart', '', time()-3600 , "/");
    }
    else{
        setcookie('cart', json_encode($cartData), time()+3600 , "/");
    }
}
if(isset($_POST['numberofcontent'])){
    $size = 0;
    if(@$cartData){
        for ($i=0; $i < sizeof($cartData); $i++) { 
            if(count(@$cartData[$i]) != 0){
                $size ++;
            }
        }
    }
    print $size;
}
if(isset($_POST['paynow'])){
    if(@$cartData){
        $clientID = $_SESSION['clientID'];
        $sql = mysqli_query($conn, "INSERT INTO orders (clientId, total_amount, discount, created, status) VALUES($clientID , 0.00,0.00, NOW(), 1)");

        $orderID = mysqli_insert_id($conn);
        $sqlInsert = "INSERT INTO orderitem (order_id, product_variableID, quantity, pricePerUnity, total) VALUES";
        $total = 0.00;

        for($i=0; $i < sizeof($cartData); $i++){
            $pID = $cartData[$i]['product_id'];
            $qty = $cartData[$i]['qty'];
            $size = $cartData[$i]['size'];
            $color = $cartData[$i]['color'];
            $sql = mysqli_query($conn, "SELECT variant_id, price FROM  productvariant WHERE pID = $pID AND sizeID = (SELECT size_id FROM sizevariable WHERE size_name = '$size') AND colorID = (SELECT color_id FROM colorvariable  WHERE color_code = '$color')") or die(mysqli_error($conn));
            $rp = mysqli_fetch_object($sql);
            $variant_id = $rp->variant_id;
            $price = $rp->price;
            $totalunit = $price * $qty;
            $total += $totalunit;
            $sqlInsert .= " ($orderID, $variant_id, $qty, $price, $totalunit)";
            if($i != (sizeof($cartData) -1 ) && sizeof($cartData) != 1){
                $sqlInsert .=",";
            }
        }
        $inset = mysqli_query($conn, $sqlInsert) or die(mysqli_error($conn));
        $update = mysqli_query($conn, "UPDATE orders SET total_amount = $total WHERE order_id = $orderID") or die(mysqli_error($conn));
        print 'okay';
    }
}
?>
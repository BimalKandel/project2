<?php
require 'include_php/configwithcookies.php'; 
$page = "Login/Register";
if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];    
    $insert = mysqli_query($conn, "INSERT INTO client (client_fullname, client_email,client_address,client_phone,client_password,client_created, client_status) VALUES('$fullname','$email','$address','$phone','$password', NOW(), 1)") or die(mysqli_error($conn));
    $_SESSION['clientID'] = mysqli_insert_id($conn);
    $_SESSION['client_name'] = $fullname;
    if(isset($_SESSION['url'])){
        $url = $_SESSION['url'];
        unset($_SESSION['url']);
        header('Location: '.$url);
    }
    else{
        header('Location: index');
    }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];  
    $sql = mysqli_query($conn, "SELECT * FROM client WHERE client_email= '$email' AND client_password = '$password' AND client_status = 1") or die(mysqli_error($conn));
    $num = mysqli_num_rows($sql);
    if($num == 0){
        $error = "Invalid credential. Please try again";
    }
    else if($num == 1){
        $row = mysqli_fetch_object($sql);
        $_SESSION['clientID'] = $row->client_id;
        $_SESSION['client_name'] = $row->client_fullname;
        if(isset($_SESSION['url'])){
            $url = $_SESSION['url'];
            unset($_SESSION['url']);
            header('Location: '.$url);
        }
        else{
            header('Location: index');
        }
    }
    else{
        $error = "Something went wrong. Please mail us your details";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include_php/head.php'); ?>
    <title><?php print $page; ?></title>
</head>
<body>
<?php include('include_php/header.php'); ?>

<section class="content">
    <div class="row">
        <div class="grid-12 padded grid-md-6 mb-4">
            <h3>Login<hr/></h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="entered_email">Email <span class="required-span">*</span></label>
                    <input type="email" class="form-control" name="email" id="entered_email" required>
                </div>
                <div class="form-group">
                    <label for="entered_password">Password</label>
                    <input type="password" class="form-control" name="password" id="entered_password" required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn contactus" value="Login" name="login">
                </div>
            </form>
        </div>
        <div class="grid-12 padded grid-md-6 mb-4">
            <h3>Register<hr/></h3>
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
                    <label for="entered_address">Address <span class="required-span">*</span></label>
                    <input type="text" class="form-control" name="address" id="entered_address" required>
                </div>
                <div class="form-group">
                    <label for="entered_phone">Phone <span class="required-span">*</span></label>
                    <input type="text" class="form-control" name="phone" id="entered_phone" required/>
                </div>
                <div class="form-group">
                    <label for="entered_password">Password</label>
                    <input type="password" class="form-control" name="password" id="entered_password" required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn contactus" value="Register" name="register">
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('include_php/footer-n-script.php'); ?>
</body>
</html>
<?php
// dummy email and password
   $myemail="mrisholigare@gmail.com";
   $mypassword="12345";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];
if( $mypassword== $password && $myemail==$emai){

}else{
    echo "wrong credentials,try again!"
}

}else{
    header("location: sessions.php");
}

?>
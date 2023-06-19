<?php
session_start();

$inputEmail = $_POST['email'];
$inputPassword = $_POST['pwd'];

include('connection.php');

$sql = "SELECT * FROM userinfo ";
$result = mysqli_query($conn,$sql);

$mail = mysqli_fetch_all($result);

foreach($mail as $ajay){
    if(($inputEmail == $ajay[3]) and ($inputPassword == $ajay[4])){
        // $loginFlag = true;
        $_SESSION['user'] = $ajay[1];
        $_SESSION['usertoken'] = $ajay[0];
        header('Location:index.php');
    }else{
         $loginFlag = "false";
    }

}

?>
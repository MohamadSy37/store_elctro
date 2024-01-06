<?php
include("../../php/db_con.php");
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $re_pass=md5($_POST['re_pass']);
    if($pass===$re_pass){
        $check_email="SELECT * FROM user WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
    header("Location: ../index.php?rn=The Email used");

        }else{
        $sql=mysqli_query($con,"INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')");
        if($sql){
            header("Location: ../index.php?rn=user join");

        }
    }
}else{
    header("Location: ../index.php?rn=The Password Not corect");
    //error passord 
}
}

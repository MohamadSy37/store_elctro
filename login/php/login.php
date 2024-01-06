<?php
include('../../php/db_con.php');
session_start();
if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $check_email="SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_array($res);
        if($password===$row['password']){
            $_SESSION['user_id']=$row['id'];
            if($row['type']==="user"){

                header("Location: ../../user/stor.php");
            }else{
                header("Location: ../../admin/");
            }

        }else{
            header("Location: ../index.php?rn=The Password Not corect");
        }
    }else{
        header("Location: ../index.php?rn=The Email Not Used");
    }
}
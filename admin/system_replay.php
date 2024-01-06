<?php
include("../php/db_con.php");
session_start();
if(isset($_POST['send'])){
    $id_pay=$_POST['id_pay'];
    $pay=$_POST['pay'];
    $Noted=$_POST['Noted'];
    $sql=mysqli_query($con,"UPDATE `paymant` SET `statue`='$pay',`noted`='$Noted' WHERE `id`='$id_pay'");
    if($sql){
        header("Location: index.php?rn=send massage");

    }else{
        header("Location: index.php?rn=not send massage");

    }
}
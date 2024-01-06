<?php
session_start();
include("../php/db_con.php");
if(isset($_POST['pay'])){
$code=$_POST['code'];
$cost=$_POST['cost'];
$prodact=$_POST['id_prodact'];
$site=$_POST['site'];
$number=$_POST['number'];
$id_user=$_SESSION['user_id'];
$cost_pro=$_POST['cost_pro'];

if($cost_pro<$cost){
    header("Location: index.php?rn=the mony not enough");

}else{
    $sql=mysqli_query($con,"INSERT INTO `paymant`(`code`, `id_user`, `mony`, `site`, `phone`, `prodact`) VALUES ('$code','$id_user','$cost','$site','$number','$prodact')");
    
    $array = explode(",", $prodact);
    foreach ($array as $number) {
    $deleted=mysqli_query($con,"DELETE FROM `store` WHERE `id_user`='$id_user' AND `id_pro`='$number'");
    }
    if($sql){
        header("Location: index.php?rn=Payment completed. Your request will be reviewed by the administrator");

    }else{
        header("Location: index.php?rn=an error occurred");

    }
}
}
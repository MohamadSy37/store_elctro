<?php
include("../php/db_con.php");
session_start();
$id=$_GET['rn'];
$sql_cato=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$id'");
$res_cato=mysqli_fetch_array($sql_cato);
$id_user=$_SESSION['user_id'];
$sql=mysqli_query($con,"INSERT INTO `store`(`id_user`, `id_pro`) VALUES ('$id_user','$id')");
header("location: index.php");

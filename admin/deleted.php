<?php
include("../php/db_con.php");
if(isset($_GET['deler_pro'])){
    $sql_pay=mysqli_query($con,"SELECT * FROM `paymant` WHERE 1");
    while($row_pay=mysqli_fetch_array($sql_pay)){
        $id_pay=$row_pay['id'];
        $array = explode(",", $row_pay['prodact']);
        foreach ($array as $number) {
            if($number===$_GET['deler_pro']){
                $delet_pay=mysqli_query($con,"DELETE FROM `paymant` WHERE `id`='$id_pay'");
            }
        }
    }
    $sql_store=mysqli_query($con,"DELETE FROM `store` WHERE `id_pro`='$_GET[deler_pro]'");
    $sql_prodact=mysqli_query($con,"DELETE FROM `prodact` WHERE `id`='$_GET[deler_pro]'");
    header("Location: index.php?rn=Deleted prodact");
}
























if(isset($_GET['deleted_cat'])){
    $sql_prodact=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id_catogary`='$_GET[deleted_cat]'");
    while($row_prodact=mysqli_fetch_array($sql_prodact)){
        $sql_pay=mysqli_query($con,"SELECT * FROM `paymant` WHERE 1"); 
        while($row_pay=mysqli_fetch_array($sql_pay)){
            $id_pay=$row_pay['id'];
            $array = explode(",", $row_pay['prodact']);
            foreach ($array as $number) {
                if($number===$row_prodact['id']){
                    $delet_pay=mysqli_query($con,"DELETE FROM `paymant` WHERE `id`='$id_pay'");
                }
            }
        }

        $sql_store=mysqli_query($con,"DELETE FROM `store` WHERE `id_pro`='$row_prodact[id]'");

        $sql_prodacted=mysqli_query($con,"DELETE FROM `prodact` WHERE `id`='$row_prodact[id]'");


    }
    $sql_cat=mysqli_query($con,"DELETE FROM `category` WHERE `id`='$_GET[deleted_cat]'");

    
    header("Location: index.php?rn=Deleted category");
}
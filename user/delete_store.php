<?php
include("../php/db_con.php");
$id_store=$_GET['rn'];
$sql=mysqli_query($con,"DELETE FROM `store` WHERE `id`='$id_store'");
header("Location: stor.php?rn=delete prodact for store");

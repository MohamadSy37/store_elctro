<?php
include("../../../php/db_con.php");
if(isset($_POST['add'])&& isset($_FILES['file'])){
    
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $name=$_POST['name'];
    $disc=$_POST['disc'];
    
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
                
            $new_image_name = uniqid("category-", true). '.'.$file_ex_lc;
            $image_file = 'category/'.$new_image_name;
            $upload='../../Images/category/'.$new_image_name;
            move_uploaded_file($tmp_name, $upload);
            $sql=mysqli_query($con,"INSERT INTO `category`(`name`, `img`, `disc`) VALUES ('$name','$new_image_name','$disc')");
            if($sql){
            header("Location: ../../add_categoryt.php?rn=Success Add Category");

            }

        }else{
            header("Location: ../../add_categoryt.php?rn=The image not upload plase upload png or jpg or jpeg ");


        }
    }else{
            header("Location: ../../add_categoryt.php?rn=error ");
    }
}




//add prodact

if(isset($_POST['add_pro'])&& isset($_FILES['file'])){
    
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $catogory=$_POST['catogary'];
    $disc=$_POST['disc'];
    
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
                
            $new_image_name = uniqid("prodact-", true). '.'.$file_ex_lc;
            $image_file = 'prodact/'.$new_image_name;
            $upload='../../Images/prodact/'.$new_image_name;
            move_uploaded_file($tmp_name, $upload);
            $sql=mysqli_query($con,"INSERT INTO `prodact`(`name`, `img`, `disc`, `cost`, `id_catogary`) VALUES ('$name','$new_image_name','$disc','$cost','$catogory')");
            if($sql){
            header("Location: ../../add_prodact.php?rn=Success Add Category");

            }

        }else{
            header("Location: ../../add_prodact.php?rn=The image not upload plase upload png or jpg or jpeg ");


        }
    }else{
            header("Location: ../../add_prodact.php?rn=error ");
    }
}
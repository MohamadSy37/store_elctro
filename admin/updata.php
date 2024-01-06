<?php
include("../php/db_con.php");
session_start();
if(isset($_POST['add'])&& isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
                
            $new_image_name = uniqid("profile-", true). '.'.$file_ex_lc;
            $image_file = 'Images/profile/'.$new_image_name;
            move_uploaded_file($tmp_name, $image_file);
            $sql=mysqli_query($con,"UPDATE `user` SET `name`='$name',`email`='$email',`img`='$new_image_name' WHERE `id`='$_SESSION[user_id]'");
if($sql){
    header("Location: index.php?rn=The upload succfull ");

}else{
    header("Location: index.php?rn=The upload Not succfull ");
    
}
        }else{
            header("Location: index.php?rn=The image not upload plase upload png or jpg or jpeg ");


        }
    }else{
            header("Location: index.php?rn=error ");
    }
}

if(isset($_POST['addpassword'])){
    $name=md5($_POST['name']);
    $email=md5($_POST['email']);
    if($name===$email){
        $sql=mysqli_query($con,"UPDATE `user` SET `password`='$name' WHERE `id`='$_SESSION[user_id]'");
        if($sql){
            header("Location: index.php?rn=Success update ");

        }else{
            header("Location: index.php?rn=error ");

        }
    }else{
        header("Location: info.php?rn=The password Not corect ");

    }
  
}
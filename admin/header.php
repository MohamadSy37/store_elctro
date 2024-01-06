<?php
include("../php/db_con.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pcoint</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">Pcoint</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="category.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">category</span>
                </a></li>
                <li><a href="Prodact.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Prodact</span>
                </a></li>
                <li><a href="order.php">
                <i class="fa-regular fa-rectangle-list"></i>
                    <span class="link-name">Order</span>
                </a></li>
                <li><a href="Chat/users.php">
                <i class="fa-regular fa-comment"></i>
                    <span class="link-name">chat</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../php/logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <?php
                        
                        $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
                        $res=mysqli_fetch_array($sql);
                        if($res['img']!==""){
                            ?>
                            <a href="info.php"><span class="data-list"><img src="Images/profile/<?php echo$res['img'];?>" class="proto" alt=""></span></a>
                            <?php
                                }else{
                                    ?>
                            <a href="info.php"><span class="data-list"><img src="Images/profile/profile.png" class="proto" alt=""></span></a>
    
                                    <?php
                                }?>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                    <i class="fa-solid fa-money-bill"></i>
                        <span class="text">paymant</span>
                        <span class="number">
                            <?php 
                        $sqli="SELECT COUNT(*) as total FROM paymant WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                            echo $ff['total'];
                        ?>
                        </span>
                    </div>
                    <div class="box box2">
                    <i class="fa-solid fa-cart-shopping"></i>
                        <span class="text">Prodact</span>
                        <span class="number">
                            <?php 
                        $sqli="SELECT COUNT(*) as total FROM prodact WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                            echo $ff['total'];
                        ?>
                        </span>
                    </div>
                    <div class="box box3">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                        <span class="text">category</span>
                        <span class="number">
                            
                        <?php 
                        $sqli="SELECT COUNT(*) as total FROM category WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                            echo $ff['total'];
                        ?>
                        </span>
                    </div>
                </div>
            </div>
            <style>
                            .data-list{
                                height: 100px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                        </style>
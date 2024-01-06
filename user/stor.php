<?php
include("header.php");
?>
<style>
    .box_prodect{
    display: flex;
    flex-wrap: wrap;
}
.prodact{
    text-align: center;
    width: 25%;
    background-color: #CCC;
    padding: 8px;
    border-radius:12px ;
    box-shadow:3px 2px 1px 0px #000;
    cursor: pointer;
    margin: 16px;
}
.prodact .pro{
    width: 50%;
}
.prodact:hover{
    transform: scale(1.1);
    transition: 2s all;
}
.txt1{
    color: #921b1b;
}
.txt_cost{
    color: green;
}
.btn{
    padding: 3px;
    border-radius: 12px;
    cursor: pointer;
}
.up{
    background-color: #1b9225;
    color: #ccc;
}
.da{
    background-color: #921b1b;
    color: #ccc;
}
.pay{
    background-color: #0E4BF1;
    color: #CCC;
}
@media (max-width: 1000px) {
    .box_prodect{
        flex-direction: column;
    }
    .prodact{
        width: 75%;
    }
}
.title_txt{
    text-align: center;
}
.sum{
    background-color: #ccc;
    border-top: 2px solid #000;
    width: 75%;
}
</style>
          
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cart</span>
                </div>
<?php
                        $sql=mysqli_query($con,"SELECT * FROM `store` WHERE `id_user`='$_SESSION[user_id]'");
                        while($res=mysqli_fetch_array($sql)){
                            $sql_prodact=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$res[id_pro]'");
                            $del=mysqli_fetch_array($sql_prodact);
                       
                                            ?>
                        <div class="prodact">
                            <img src="../admin/Images/prodact/<?php echo$del['img'];?>" class="pro" alt="">
                            <h2 class="txt1"><?php echo$del['name'];?></h2>
                            <p class="desc">
                            <?php echo$del['disc'];?>
                            </p>
                            <b class="num"><?php echo$del['cost'];?> <span class="txt_cost">cost Prodact</span></b><br>
                            <br><a href="delete_store.php?rn=<?php echo$res['id'];?>"><button class="btn da">delete</button></a>
                        </div>
                        <?php
     
                            }
?>

                            <?php
                            $cost=0;
                            $check_user_cart=mysqli_query($con,"SELECT * FROM `store` WHERE `id_user`='$_SESSION[user_id]'");
                            while($sum=mysqli_fetch_array($check_user_cart)){
                                $sql_pro=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$sum[id_pro]'");
                                $res_pro=mysqli_fetch_array($sql_pro);
                                $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                                if(mysqli_num_rows($check_payment)>0){
                                    $row=mysqli_fetch_array($check_payment);
                                    $string = $row['prodact'];
                                    $array = explode(",", $string);
                                    foreach ($array as $number) {
                                        $sql_pro=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$number'");
                                        if(mysqli_num_rows($sql_pro)>0){
                                        $row_prodact=mysqli_fetch_array($sql_pro);
                                        if($row_prodact['id']===$del['id']){

                                        }

                                    }
                                }
                            }
                        ?>
                                <?php
                                $cost=$cost+$res_pro['cost'];
                        }
                            
                            ?>
                                                    <div class="sum">
                            The sum is =
                            <?php
                            echo$cost;
                        
                            ?>
    <div>
    <a href="pay.php?cost=<?php echo$cost;?>"><button class="btn pay">Pay the money</button></a>
    <?php
    
    ?>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
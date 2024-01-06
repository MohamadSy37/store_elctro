<?php
include("header.php");

?>
<style>
    .box_sum{
        border-top: 2px solid #000;

    }
    .count{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .count .logo_cash{
        width: 200px;
        height: 100px;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 75%;
        padding: 20px;
        border-radius: 12px;
        background: #ccc;

    }
    form .box_input{
        display: flex;
        flex-direction: column;
    }
    .btn{
    padding: 3px;
    border-radius: 12px;
    cursor: pointer;
    width: 25%;
    margin-top: 20px;
}

.pay{
    background-color: #0E4BF1;
    color: #CCC;
}
</style>
          
<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Pay</span>
                </div>

                <div class="menu-items">
                <div class="activity-data">
                <div class="data names">
                        <span class="data-title">Name</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM `store` WHERE `id_user`='$_SESSION[user_id]'");
                        while($res=mysqli_fetch_array($sql)){
                            $check_cart=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$res[id_pro]'");
                            $del=mysqli_fetch_array($check_cart);
                            if(mysqli_num_rows($check_cart)>0){
                        ?>
                        <span class="data-list"><?php echo$del['name'];?></span>
                        <?php
                        }
                    }
                        ?>
                    </div>
                    <div class="data email">
                        <span class="data-title">cost</span>
                        <?php
                        $id_prodactes="";
                        $sql=mysqli_query($con,"SELECT * FROM `store` WHERE `id_user`='$_SESSION[user_id]'");
                        while($res=mysqli_fetch_array($sql)){
                            $check_cart=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$res[id_pro]'");
                            $del=mysqli_fetch_array($check_cart);
                            if(mysqli_num_rows($check_cart)>0){
                                $id_prodactes.=",".$del['id'];
                        ?>
                        <span class="data-list"><?php echo$del['cost'];?>s.y</span>
                        <?php
                        }
                    }
                        ?>
                    </div>
                </div>
                <div class="box_sum">
                    The sum is: <?php echo$_GET['cost'];?> s.y
                </div>
                <div class="count">
                    <img src="images/syraitail.jpg" class="logo_cash" alt="">
                    <b>Send money to the following number via Syriatel Cash</b>
                    <h3>67832469324</h3>
                    <b>Then enter your payment information</b>
                    <form action="system_pay.php" method="post">
                    <div class="box_input">
                        <label for="code">Payment transaction number</label>
                        <input type="number" name="code" id="code">
                    </div>
                    <div class="box_input">
                        <label for="cost">paid up</label>
                        <input type="number" name="cost" id="cost">
                    </div>
                    <div class="box_input">
                        <label for="site">the site</label>
                        <input type="text" value="" name="site" id="site">
                    </div>
                    <input type="text" name="id_prodact" value="<?php echo$id_prodactes;?>" hidden id="">
                    <div class="box_input">
                        <label for="number">Phone number</label>
                        <input type="number" name="number" id="number">
                    </div>
                    <input type="number" name="cost_pro" value="<?php echo$_GET['cost']; ?>" hidden id="">
                    <div class="box_input">
                        <input type="submit" name="pay" class="btn pay" value="send">
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
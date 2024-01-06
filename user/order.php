<?php
include("header.php");
?>
     <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">order</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <?php
                        $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                        if(mysqli_num_rows($check_payment)>0){
                            while($row=mysqli_fetch_array($check_payment)){
                            $string = $row['prodact'];
                            ?>

                        <span class="data-list">
                            <?php 
                        
$array = explode(",", $string);
foreach ($array as $number) {
    $sql_pro=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$number'");
    if(mysqli_num_rows($sql_pro)>0){
    $row_prodact=mysqli_fetch_array($sql_pro);
echo$row_prodact['name']." | ";
    }

}
                    
                        ?></span>
                        <?php
                            }
                            }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="data email">
                        <span class="data-title">cost</span>
                        <?php
                        $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                        if(mysqli_num_rows($check_payment)>0){
                            while($row=mysqli_fetch_array($check_payment)){
                            $string = $row['prodact'];
                            ?>

                        <span class="data-list"><?php 
                        
$array = explode(",", $string);
foreach ($array as $number) {
    $sql_pro=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$number'");
    
    if(mysqli_num_rows($sql_pro)>0){
    $row_prodact=mysqli_fetch_array($sql_pro);
echo$row_prodact['cost']." | ";
    }
}
                    
                        ?></span>
                        <?php
                            }
                            }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="data joined">
                        <span class="data-title">sum</span>
                        <?php
                        $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                        if(mysqli_num_rows($check_payment)>0){
                            while($row_pay=mysqli_fetch_array($check_payment)){
                        ?>

                        <span class="data-list"><?php echo $row_pay['mony'];?></span>
                        <?php
                            }
                        }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <?php
                        $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                        if(mysqli_num_rows($check_payment)>0){
                            while($row_pay=mysqli_fetch_array($check_payment)){
                        ?>

                        <span class="data-list"><?php echo $row_pay['statue'];?></span>
                        <?php
                            }
                        }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="data status">
                        <span class="data-title">Noted</span>
                        <?php
                        $check_payment=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id_user`='$_SESSION[user_id]'");
                        if(mysqli_num_rows($check_payment)>0){
                            while($req_pay=mysqli_fetch_array($check_payment)){
                        if($req_pay['noted']!==""){
                        ?>


                        <span class="data-list"><?php echo $req_pay['noted'];?></span>
                        <?php
                        }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php

                        }
                    }
                        }else{
                            ?>
                            <span class="data-list">NO result</span>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
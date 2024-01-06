<?php
include("header.php");
?>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
<style>
    .proto{
        border-radius: 50%;
        width: 40px;
    }
</style>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <?php
                        
                        $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `type`='user'");
                        if(mysqli_num_rows($sql)>0){
                            while($res=mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list"><?php echo$res['name'];?></span>
                        <?php
                            }
                        }?>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php
                        
                        $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `type`='user'");
                        
                        if(mysqli_num_rows($sql)>0){
                            while($res=mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list"><?php echo$res['email'];?></span>
                        <?php
                            }
                        }?>
                    </div>
                    <div class="data status">

                        <span class="data-title">img</span>
                        <?php
                        
                        $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `type`='user'");
                        if(mysqli_num_rows($sql)>0){
                        while($res=mysqli_fetch_array($sql)){
                            if($res['img']!==""){
                        ?>
                        <span class="data-list"><img src="../user/Images/profile/<?php echo$res['img'];?>" class="proto" alt=""></span>
                        <?php
                            }else{
                                ?>
                        <span class="data-list"><img src="../user/Images/profile/profile.png" class="proto" alt=""></span>

                                <?php
                            }
                        }
}?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
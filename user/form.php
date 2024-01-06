<?php
if(isset($_GET['verification'])){
    $password=md5($_GET['password']);
    $checkpassword=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
    $res=mysqli_fetch_array($checkpassword);
    if($password===$res['password']){
        ?>
                        <div class="form_contiener">
                    <form action="updata.php" enctype="multipart/form-data" method="post">
                        <div class="input_contiener">
                            <label for="file">Image</label>
                            <input type="file" name="file"  id="file"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="" value="<?php echo$res['name'];?>" id="name"require>
                        </div>
                        
                        <div class="input_contiener">
                            <label for="charger">email</label>
                            <input type="email" name="email" placeholder="" value="<?php echo$res['email'];?>" id="charger"require>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="add" value="updata">
                        </div>
                    </form>
                </div>
                        <div class="form_contiener">
                            <form action="updata.php" method="post">
                            <div class="input_contiener">
                            <label for="name">password</label>
                            <input type="password" name="name" placeholder="" value="<?php echo$res['name'];?>" id="name"require>
                        </div>
                        
                        <div class="input_contiener">
                            <label for="charger">repassword</label>
                            <input type="password" name="email" placeholder="" value="<?php echo$res['email'];?>" id="charger"require>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="addpassword" value="updata">
                        </div>
                            </form>
                        </div>
        <?php
    }else{
        echo"<script>alert('The password Not corect.');</script>";

    }
}
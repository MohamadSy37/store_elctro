<?php
include("header.php");
?>
                <style>
                    .box_form{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .box_form form{
                        display: flex;
                        flex-direction: column;
                        width: 75%;
                        background: #ccc;
                        border-radius: 12px;
                        padding: 8px;
                    }
                    .box_input{
                        display: flex;
                        flex-direction: column;
                    }
                    .row{
                        display: flex;

                    }
                    .btn{
    padding: 3px;
    border-radius: 12px;
    cursor: pointer;
    margin-top: 20px;
}

.pay{
    background-color: #0E4BF1;
    color: #CCC;
}
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
.box_prodect{
    display: flex;
    justify-content: center;
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

                </style>
                
<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Replay</span>
                </div>
                <div class="menu-items">
                    <div class="box_prodect">
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM `paymant` WHERE `id`='$_GET[rn]'");
                        while($res=mysqli_fetch_array($sql)){
                            $sql_user=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$res[id_user]'");
                            $row_user=mysqli_fetch_array($sql_user);
                        ?>
                        <div class="prodact">
                            <?php
                                $array = explode(",", $res['prodact']);
                                foreach ($array as $number) {
                                    $sql_prodact=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$number'");
                                    $row_pro=mysqli_fetch_array($sql_prodact);
                                    ?>
                                    <img src="Images/prodact/<?php echo$row_pro['img'];?>" width="200px" height="200px" style="border-radius: 50%;" alt="">
                                    <?php
                                }
                            ?>
                            <h2 class="txt1">phone: <?php echo$res['phone'];?></h2>
                            <h2 class="txt1">Paid: <?php echo$res['mony'];?></h2>
                            <h2 class="txt1">code: <?php echo$res['code'];?></h2>
                            <h2 class="txt1">Site: <?php echo$res['site'];?></h2>
                            <h4 class="txt1">User name: <?php echo$row_user['name'];?></h4><br>
                            <h4 class="txt1">User email: <?php echo$row_user['email'];?></h4>

                        </div>
                        <?php
                        }?>
                    </div>
                </div>
                    <div class="box_form">
                        <form action="system_replay.php" method="post">
                            <div class="box_input">
                                <div class="row">
                                    <input type="radio" name="pay" value="no pay" id="no">
                                    <label for="no">No pay</label>
                                </div>
                                <input type="number" name="id_pay" hidden value="<?php echo$_GET['rn'];?>" id="">
                                <div class="row">
                                    <input type="radio" name="pay" value="pay" id="yes">
                                    <label for="yes">pay</label>
                                </div>
                            </div>
                            <div class="box_input">
                                <label for="Noted">Noted</label>
                                <textarea name="Noted" id="Noted" cols="30" rows="10"></textarea>
                            </div>
                            
                            <div class="box_input">
                                <input type="submit" class="btn pay" name="send" value="send">
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
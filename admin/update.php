<?php
    include("header.php");

    $id_pro=$_GET['rn'];
    $sql_prodact=mysqli_query($con,"SELECT * FROM `prodact` WHERE `id`='$id_pro'");
    $row_prod=mysqli_fetch_array($sql_prodact);
    
     
    ?>
<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">prodact</span>
                </div>
                <style>
                    .form_contiener{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .form_contiener form{
                        display: flex;
                        flex-direction: column;
                        background-color: #ccc;
                        width: 75%;
                        padding: 10px;
                        border-radius: 12px;
                    }
                    .input_contiener{
                        display: flex;
                        flex-direction: column;
                        margin-top: 20px;
                    }
                </style>
                <div class="menu-items">
                <div class="form_contiener">
                    <form action="asset/php/class_updated.php" enctype="multipart/form-data" method="post">
                        <input type="text" name="id_pro" value="<?php echo$_GET['rn'];?>" hidden>
                        <div class="input_contiener">
                            <label for="file">Image</label>
                            <input type="file" name="file"  id="file"required>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo$row_prod['name'];?>" name="name" placeholder="solar noun" id="name"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Cost</label>
                            <input type="number" min="0" value="<?php echo$row_prod['cost'];?>"  name="cost" placeholder="solar noun" id="name"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Category</label>
                           <select name="catogary" id="">
                            <?php
                            $sql=mysqli_query($con,"SELECT * FROM `category` WHERE 1");
                            while($row=mysqli_fetch_array($sql)){
                                if($row['id']===$row_prod['id_catogary']){
                                    ?>

                                <option selected value="<?php echo$row['id'];?>"><?php echo$row['name'];?></option>
                                    <?php
                                }else{
                                    ?>
                                <option value="<?php echo$row['id'];?>"><?php echo$row['name'];?></option>
                                <?php
                                }
                            }
                            ?>
                           </select>
                        </div>
                        
                        
                        <div class="input_contiener">
                            <label for="Description">Description</label>
                            <textarea name="disc" id="Description" cols="30" rows="10"require><?php echo$row_prod['disc'];?></textarea>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="add_pro" value="Updated">
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
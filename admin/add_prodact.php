<?php
    include("header.php");

    if(isset($_GET['rn'])){
        $error=$_GET['rn'];
        echo"<script>alert('".$error.".');</script>";
    }
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
                    <form action="asset/php/class_add.php" enctype="multipart/form-data" method="post">
                        <div class="input_contiener">
                            <label for="file">Image</label>
                            <input type="file" name="file"  id="file"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="solar noun" id="name"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Cost</label>
                            <input type="number" min="0"  name="cost" placeholder="solar noun" id="name"require>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Category</label>
                           <select name="catogary" id="">
                            <?php
                            $sql=mysqli_query($con,"SELECT * FROM `category` WHERE 1");
                            while($row=mysqli_fetch_array($sql)){
                                    ?>
                                <option value="<?php echo$row['id'];?>"><?php echo$row['name'];?></option>
                                <?php
                            }
                            ?>
                           </select>
                        </div>
                        
                        
                        <div class="input_contiener">
                            <label for="Description">Description</label>
                            <textarea name="disc" id="Description" cols="30" rows="10"require></textarea>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="add_pro" value="add">
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
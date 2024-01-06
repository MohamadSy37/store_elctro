<?php
    include("header.php");

        $id=$_GET['rn'];
    $sql=mysqli_query($con,"SELECT * FROM `category` WHERE `id`='$id'");
    $row_cat=mysqli_fetch_array($sql);
    ?>
<div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">category</span>
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
                        <div class="input_contiener">
                            <label for="file">Image</label>
                            <input type="file" name="file"  id="file"required>
                        </div>
                        <div class="input_contiener">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo$row_cat['name'];?>" name="name" placeholder="solar noun" id="name"require>
                        </div>
                        <input type="text" name="id" value="<?php echo$id?>" hidden>
                        <div class="input_contiener">
                            <label for="Description">Description</label>
                            <textarea name="disc" id="Description" cols="30" rows="10"require><?php echo$row_cat['disc'];?></textarea>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="add" value="Update">
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
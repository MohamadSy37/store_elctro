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
                    <span class="text">category</span>
                </div>
                <div class="menu-items">
                    <div class="title_txt">
                        <a href="add_categoryt.php"><button class="btn up">Add category</button></a>
                    </div>
                    <div class="box_prodect">
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM `category` WHERE 1");
                        while($res=mysqli_fetch_array($sql)){
                        ?>
                        <div class="prodact">
                            <img src="Images/category/<?php echo$res['img'];?>" class="pro" alt="">
                            <h2 class="txt1"><?php echo$res['name'];?></h2>
                            <p class="desc">
                            <?php echo$res['disc'];?>
                            </p>
                           <br> <a href="updata_cat.php?rn=<?php echo$res['id'];?>"><button class="btn up">update</button></a>
                            <a href="deleted.php?deleted_cat=<?php echo$res['id'];?>"><button class="btn da">delete</button></a>
                        </div>
                        <?php
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
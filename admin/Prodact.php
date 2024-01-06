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
                    <span class="text">prodact</span>
                </div>
                <div class="menu-items">
                    <div class="title_txt">
                        <a href="add_prodact.php"><button class="btn up">Add prodact</button></a>
                    </div>
                    <div class="box_prodect">
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM `prodact` WHERE 1");
                        while($res=mysqli_fetch_array($sql)){
                            $sql_catogary=mysqli_query($con,"SELECT * FROM `category` WHERE `id`='$res[id_catogary]'");
                            $row_catogary=mysqli_fetch_array($sql_catogary);
                        ?>
                        <div class="prodact">
                            <img src="Images/prodact/<?php echo$res['img'];?>" class="pro" alt="">
                            <h2 class="txt1"><?php echo$res['name'];?></h2>
                            <h2 class="txt1"><?php echo$row_catogary['name'];?></h2>
                            <p class="desc">
                            <?php echo$res['disc'];?>
                            </p>
                            <b class="cost"><span class="txt_cost">cost:</span> <?php echo$res['cost'];?>s.y</b>
                           <br> <a href="update.php?rn=<?php echo$res['id'];?>"><button class="btn up">update</button></a>
                            <a href="deleted.php?deler_pro=<?php echo$res['id'];?>"><button class="btn da">delete</button></a>
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
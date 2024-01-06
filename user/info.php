<?php
include("header.php");
?>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Edit Information</span>
                </div>

<style>
                    .form_contiener{
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        margin-top: 80px;
                    
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
                    <form action="" method="GET">
                        <div class="input_contiener">
                            <label for="password">Password</label>
                            <input type="password" name="password"  id="password"require>
                        </div>
                        <div class="input_contiener">
                            <input type="submit" name="verification" value="verification">
                        </div>
                    </form>
                    <?php
                        include("form.php");
                    ?>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
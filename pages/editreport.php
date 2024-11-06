<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <main>
        <section class="main-section">
            <div class="sideView">
                <?php include 'navbar.php' ?>
            </div>
            <div class="main-main-box">
                <div class="top-container">
                    <center>
                        <h1>LOITOKTOK SCHOOL EQUIPMENT MANAGEMENT SYSTEM</h1>
                    </center>
                </div>
                <div class="dah-main">
                <section class="conatiner-box">
                    <div class="items-form">
                        <?php 
                            if (isset($_POST['btnEdit'])) {
                                # code...
                                $item=$_POST['item'];
                                $type=$_POST['type'];
                                $quantity=$_POST['quantity'];
                                $department=$_POST['department'];
                                $id=$_POST['id'];
                                $name=$_POST['name'];
                                $phone=$_POST['phone'];

                            }
                        ?>
                        <form action="editreport.php" method="POST">
                            <div class="topBard-form">
                                <h4>Edit Report</h4>
                            </div>
                            <br>
                            <div>
                                <small>Name</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $name ?>" name="name">
                            </div>
                            <div>
                                <small>Phone</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $phone ?>" name="phone">
                            </div>
                            <div>
                                <small>Item Name</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $item ?>" name="item">
                            </div>
                            <div>
                                <small>Type</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $type ?>" name="type">
                            </div>
                           
                            <div>
                                <small>Quantity</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $quantity ?>" name="quantity">
                            </div>
                            <div>
                                <small>Depertment</small>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $department ?>" name="department">
                                <input type="hidden" value="<?php echo $id ?>" name="id">
                            </div>
                            <div>
                                <button class="btnAdd" name="btnUpdate">Update Report</button>
                            </div>
                        </form>
                    </div>
                </section>
                </div>
            </div>
            <?php
                if (isset($_POST['btnUpdate'])) {
                    # code...
                    $conn=mysqli_connect("localhost","root","","loitoktok");
                    $item=$_POST['item'];
                    $type=$_POST['type'];
                    $quantity=$_POST['quantity'];
                    $department=$_POST['department'];
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $phone=$_POST['phone'];
                 
                    $sql="UPDATE `reports` SET `item`='$item',`type`='$type',`quantity`='$quantity',`department`='$department',`name`='$name',`phone`='$phone' WHERE  id='$id'";
                    $exec=mysqli_query($conn,$sql);

                    if ($exec) {
                        echo '
                            <section class="pop-container">
                            <div class="pop-up">
                                <center>
                                    <div><strong>Success !</strong></div><br>
                                    <div><small>Report Updated Successfull</small></div>
                                    <div><a href="reports.php"><button>Done</button></a></div>
                                </center>
                            </div>
                        </section>
                        ';
                    }else{
                        echo 'sql error';
                    }
                }
            ?>
        </section>
    </main>
</body>



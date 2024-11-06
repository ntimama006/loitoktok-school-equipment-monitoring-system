<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                            }
                        ?>
                        <form action="edititem.php" method="POST">
                            <div class="topBard-form">
                                <h4>Edit Item</h4>
                            </div>
                            <br>
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
                                <button class="btnAdd" name="btnUpdate">Update Item</button>
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
                    echo $item;
                    echo $type;
                    echo $quantity;
                    echo $department;
                    $sql="UPDATE `items` SET `item`='$item',`type`='$type',`quantity`='$quantity',`department`='$department' WHERE id='$id'";
                    $exec=mysqli_query($conn,$sql);

                    if ($exec) {
                        # code...
                        header('location:home.php');
                    }else{
                        echo 'sql error';
                    }
                }
            ?>
        </section>
    </main>
</body>



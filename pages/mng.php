<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Items</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
   
    <main class="main-section">
            <div class="sideView">
                <?php include 'navbar.php' ?>
            </div>
            <div class="main-main-box">
                <div class="top-container">
                    <center>
                        <h1>LOITOKTOK SCHOOL EQUIPMENT MANAGEMENT SYSTEM</h1>
                    </center>
                </div>
                <section class="conatiner-box1">
                    <div class="flexDiv-iem">
                    <div class="item-pot">
                        <?php 
                        if (isset($_POST['btnManage'])) {
                            # code...
                            $item=$_POST['item'];
                            $id=$_POST['id'];
                            $type=$_POST['type'];
                            $quantity=$_POST['quantity'];
                            $department=$_POST['department'];

                            $s_item=$_SESSION['sitem']=$item;
                            $s_id=$_SESSION['sid']=$id;
                            $s_type=$_SESSION['stype']=$type;
                            $s_quantity=$_SESSION['squantity']=$quantity;
                            $s_department=$_SESSION['sdepartment']=$department;
                        }
                        
                        ?>
                        <div>
                            <div><h3>Item</h3></div>
                            <div>
                                <small><strong><?php echo $_SESSION['sitem'] ?></strong></small>
                            </div>
                            <div>
                                <small>Type : <?php echo $_SESSION['stype']  ?></small>
                            </div>
                            <div>
                                <small>Available Quantity: <?php echo $_SESSION['squantity']  ?></small>
                            </div>
                            <?php 
                                            $item=$_SESSION['sitem'];
                                            $type=$_SESSION['stype'];
                                            $id=$_SESSION['sid'];
                                            $department=$_SESSION['sdepartment'];
                                            $conn=mysqli_connect("localhost","root","","loitoktok");
                                             $sql="SELECT *,SUM(quantity) AS lostQ FROM `lost` WHERE item='$item'";
                                             $exec=mysqli_query($conn,$sql);
                                             $fetch=mysqli_fetch_array($exec);

                                             $sql1="SELECT *,SUM(quantity) AS damQ FROM `damages` WHERE item='$item'";
                                             $exec1=mysqli_query($conn,$sql1);
                                             $fetch1=mysqli_fetch_array($exec1);
                                             
                                        ?>
                            <div>
                                <small>Lost Quantity: <?php echo $fetch['lostQ'] ?></small>
                            </div>
                            <div>
                                <small>Damage Quantity: <?php echo $fetch1['damQ'] ?></small>
                            </div>
                            
                            <div><small>Add Damage</small></div>
                            <div>
                            <form action="handleM.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="item" value="<?php echo $item ?>">
                                <input type="hidden" name="type" value="<?php echo $type ?>">
                                <input type="text" name="quantity" placeholder="quantity">
                                <input type="hidden" name="department" value="<?php echo $department ?>">
                                <button class="btnasLost" name="btnAddDamage">Add as damage</button>
                            </form>
                            </div>
                            <br>
                            <hr>
                            <div><small>Add Lost</small></div>
                                <button class="btnasLost" name="btnAddLost" onclick="openPopView()">Add as lost</button>
                        </div>

                        <div class="dark-container hidden" id="popView">
                            <form method="POST" action="handleM.php" class="box-501">
                                <div class="flexDiv"><h4>Add Lost</h4> <a href="" class="xLink">X</a></div>
                                <div>
                                <div>
                                    <input type="text" placeholder="Quantity" name="quantity">
                                </div>
                                <div>
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="item" value="<?php echo $item ?>">
                                <input type="hidden" name="type" value="<?php echo $type ?>">
                                <input type="hidden" name="department" value="<?php echo $department ?>">
                                <div>
                                    <input type="date" placeholder="Date" name="date">
                                </div>
                                <div>
                                    <button name="btnLost">Add Lost</button>
                                </div>
                                </div>
                             </form>
                        </div>
                       
                        
                    </div>
                    <div class="giveDiv">
                        <br><br>
                        <div><h3>Give out</h3></div>
                        <br>
                        <form action="handleMng.php" method="POST">
                            <div><small><small>Quantity:</small></small></div>
                            <div><input type="text" name="quantity"></div><br>
                            <div><small><small>Name</small></small></div>
                            <div><input type="text" name="name"></div><br>
                            <div><small><small>Phone</small></small></div>
                            <div><input type="text" name="phone"></div><br>
                            <div><small>Description:</small></div>
                            <div><input type="text" name="description"></div><br>
                            <div><small>Date:</small></div>
                            <div><input type="date" name="date"></div><br>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="item" value="<?php echo $item ?>">
                            <input type="hidden" name="type" value="<?php echo $type ?>">
                            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                            <input type="hidden" name="department" value="<?php echo $department ?>">
                            <div><button name="btnSubmit">Submit</button></div>
                        </form>
                    </div>
                   
                    </div>
                </section>
            </div>
    </main>
   <script src="app.js"></script>
</body>
</html>
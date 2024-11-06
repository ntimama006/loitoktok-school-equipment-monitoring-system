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
                    
                    <div class="cbox2 box2-can">
                        <div id="cb1" class="show-cb">
                            <div class="top-cbox2">
                                <h2>Manage Items</h2>
                            </div>
                            <div>
                            <?php 
                                             $conn=mysqli_connect("localhost","root","","loitoktok");
                                             $sql="SELECT * FROM `items` WHERE 1";
                                             $exec=mysqli_query($conn,$sql);
                                             $count=mysqli_num_rows($exec);
                                             if ($count==0) {
                                             }else{
                                                while ($row=mysqli_fetch_array($exec)) {
                                                    $id=$row['id'];
                                                    $item=$row['item'];
                                                    $type=$row['type'];
                                                    $quantity=$row['quantity'];
                                                    $department=$row['department'];
                                                 
                                        ?>
                                <div class="card-item-m">
                                    <div>
                                        <h3><?php echo $item ?></h3>
                                        <div>
                                            <small><strong>Type</strong> <?php echo $type ?></small>
                                        </div>
                                        <div>
                                            <small><strong>Quantity Available :</strong> <?php echo $quantity ?></small>
                                        </div>
                                    </div>
                                    <div>
                                        <form action="mng.php" method="post">
                                            <input type="hidden" value="<?php echo $id ?>" name="id">
                                            <input type="hidden" value="<?php echo $item ?>" name="item">
                                            <input type="hidden" value="<?php echo $type ?>" name="type">
                                            <input type="hidden" value="<?php echo $quantity ?>" name="quantity">
                                            <input type="hidden" value="<?php echo $department ?>" name="department">
                                            
                                            <button class="btnManage" name="btnManage">Manage Item</button>
                                        </form>
                           
                                    </div>
                                </div>
                                <?php }}?>
                              
                            </div>
                        </div>
                    </div>

                </section>
            </div>
    </main>
</body>
</html>
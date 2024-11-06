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
                        <h1>LOITOKTOK SCHOOL EQUIPMENT MANAGEMENT SYSTEM</h1>
                </div>
                <hr>
                <div class="dah-main">
                
                    <div class="sum-bod">
                    <div class="top-cbox2 dashboard">
                        <h2>DASHBOARD</h2>
                    </div>
                        <div class="card-item-dash dash1">
                        <?php
                                  $conn=mysqli_connect("localhost","root","","loitoktok");
                                  $sql="SELECT *,SUM(quantity) AS tot FROM `items` WHERE 1";
                                  $exec=mysqli_query($conn,$sql);
                                  $fetch=mysqli_fetch_array($exec);
                                  
                                  $total= $fetch['tot'];
                            ?>
                                
                            <center>
                            <strong><?php echo $total ?></strong>
                            <br>
                            <small>Available items</small>
                            </center>
                        </div>
                        <br>
                        <div class="card-item-dash dash2">
                        <?php
                                 $conn=mysqli_connect("localhost","root","","loitoktok");
                                 $sql="SELECT * FROM `items` WHERE status='lost'";
                                 $exec=mysqli_query($conn,$sql);
                                 $count=mysqli_num_rows($exec);
                            ?>
                            <center>
                            <strong><?php echo $count ?></strong>
                            <br>
                            <small>Lost items</small>
                            </center>
                        </div>
                        <br>
                        <div class="card-item-dash dash3">
                        <?php
                                 $conn=mysqli_connect("localhost","root","","loitoktok");
                                 $sql="SELECT * FROM `damages` WHERE 1";
                                 $exec=mysqli_query($conn,$sql);
                                 $count=mysqli_num_rows($exec);
                            ?>
                            <center>
                            <strong><?php echo $count  ?></strong>
                            <br>
                            <small>Damaged items</small>
                            </center>
                        </div>
                    </div>
                    <div class="cbox2">
                    <div class="">
                        <div>
                            <div class="top-cbox2">
                                <h2>ALL EQUIPMENTS</h2>
                            </div>
                            <div>
                                <table class="tableMain">
                                    <thead>
                                        <th>Item</th>
                                        <th>Type</th>
                                        <th>Available Quantity</th>
                                        <th>Department</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
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
                                        <tr>
                                            <td><?php echo $item ?></td>
                                            <td><?php echo $type ?></td>
                                            <td><?php echo $quantity ?></td>
                                            <td><?php echo $department ?></td>
                                            <td>
                                                <form action="edititem.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="item" value="<?php echo $item ?>">
                                                    <input type="hidden" name="type" value="<?php echo $type ?>">
                                                    <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                                                    <input type="hidden" name="department" value="<?php echo $department ?>">
                                                     <button name="btnEdit" class="btnEdit1">Edit</button>
                                                </form>
                                                </td>
                                                <td>
                                                <form action="../handlers/del.php" method="post">
                                                <button name="btnDel" onclick="showPop()" class="btnDel1">Delete</button>
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                </form>
                                               
                                    
                                                
                                            </td>
                                        </tr>
                                       <?php }} ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="totDIv">
                                <div>
                                    <h4>Total</h4>
                                </div>
                                <div>
                              
                                <?php
                                 $conn=mysqli_connect("localhost","root","","loitoktok");
                                 $sql="SELECT * FROM `items` WHERE 1";
                                 $exec=mysqli_query($conn,$sql);
                                 $count=mysqli_num_rows($exec);
                                ?>
                                    <h4><?php echo $count ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <script src="app.js"></script>
</body>



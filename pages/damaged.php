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
                    <div class="cenDiv">
                        <center>
                            <h4>Damaged Items</h4>
                        </center>
                        <br>
                        <hr>
                        <br>
                        <div>
                            <ul class="ulBox">
                            <?php 
                                $conn=mysqli_connect("localhost","root","","loitoktok");
                                $sql="SELECT * FROM `damages` WHERE 1";
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
                                <li>
                                <div>
                                        <h3><?php echo $item ?></h3> 
                                        Quantity - <strong><?php echo $quantity ?></strong> <br>
                                        <?php echo $department ?>
                                    </div>
                                    <div class="wwwDiv">
                                        <strong class="lostTxt">Damaged</strong>
                                        <button class="btnX">X</button>
                                    </div>
                                </li>
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>

                </section>
            </div>
    </main>
</body>
</html>
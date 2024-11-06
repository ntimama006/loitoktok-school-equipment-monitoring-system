<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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
                    <div class="ttBox">
                        <div>
                             <a href="pdf.php"><button class="btnReport">Generate report</button></a>
                            <table class="tableReport">
                                <thead>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Item</th>
                                    <th>Type</th>
                                    <th>Quantity</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php
                                         $conn=mysqli_connect("localhost","root","","loitoktok");
                                         $sql="SELECT * FROM `reports` WHERE 1";
                                         $exec=mysqli_query($conn,$sql);
                                         $count=mysqli_num_rows($exec);

                                         if ($count==0) {
                                         }else{
                                            while ($row=mysqli_fetch_array($exec)) {
                                                  $id=$row['id'];
                                                  $name=$row['name'];
                                                  $phone=$row['phone'];
                                                  $item=$row['item'];
                                                  $type=$row['type'];
                                                  $quantity=$row['quantity'];
                                                  $department=$row['department'];
                                                  $date=$row['date'];
                                    ?>
                                    <tr class="tr">
                                        <td><?php  echo $name ?></td>
                                        <td><?php  echo $phone ?></td>
                                        <td><?php  echo $item ?></td>
                                        <td><?php  echo $type ?></td>
                                        <td><?php  echo $quantity ?></td>
                                        <td><?php  echo $department ?></td>
                                        <td><?php  echo $date ?></td>
                                        <td>
                                            <form action="editreport.php" method="POST">
                                                <input type="hidden" name="name" value="<?php echo $name  ?>">
                                                    <input type="hidden" name="phone" value="<?php echo $phone ?>">
                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="item" value="<?php echo $item ?>">
                                                    <input type="hidden" name="type" value="<?php echo $type ?>">
                                                    <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                                                    <input type="hidden" name="department" value="<?php echo $department ?>">
                                                <button name="btnEdit">Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="upDel.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $id  ?>">
                                                <button name="btnDel">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }}?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <script src="app.js"></script>
</body>



<link rel="stylesheet" href="style.css">
<?php
                        if (isset($_POST['btnSubmit'])) {
                            # code...
                            $conn=mysqli_connect("localhost","root","","loitoktok");
                            $quantity=$_POST['quantity'];
                            $name=$_POST['name'];
                            $phone=$_POST['phone'];
                            $description=$_POST['description'];
                            $item=$_POST['item'];
                            $type=$_POST['type'];
                            $quantity=$_POST['quantity'];
                            $department=$_POST['department'];
                            $id=$_POST['id'];
                            $date=$_POST['date'];
                            
                            $sql="INSERT INTO `reports`(`id`, `item`, `type`, `quantity`, `department`, `name`, `phone`, `description`,`date`) VALUES (null,'$item','$type','$quantity','$department','$name','$phone','$description','$date')";
                            $exec=mysqli_query($conn,$sql);
                            
                            if ($exec) {
                                $sqli_old="SELECT * FROM `items` WHERE id='$id'";
                                $old_exec=mysqli_query($conn,$sqli_old);
                                $countold=mysqli_num_rows($old_exec);
                                if ($countold==0) {
                                }else{
                                    while ($row=mysqli_fetch_array($old_exec)) {
                                        $old_quantity=$row['quantity'];
                                        $new_quantity=$old_quantity-$quantity;
                                        $sql1="UPDATE `items` SET `quantity`='$new_quantity', `status`='lost' WHERE id='$id'";
                                        $xec=mysqli_query($conn,$sql1);
                                        if ($xec) {
                            
                                            echo '
                                            <section class="pop-container">
                                                <div class="pop-up">
                                                    <center>
                                                        <div><strong>Success !</strong></div><br>
                                                        <div><small>Submited Successfull</small></div>
                                                        <div><a href="reports.php"><button>Done</button></a></div>
                                                    </center>
                                                </div>
                                            </section>
                                            ';
                                        }else{
                                            echo 'sql error';
                                        }
                                    }
                                }
                            
                            }else{
                                echo 'sql error';
                            }

                        }
                     
                    ?>
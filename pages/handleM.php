<link rel="stylesheet" href="style.css">
<?php
  if (isset($_POST['btnLost'])) {
    # code...
    $conn=mysqli_connect("localhost","root","","loitoktok");
    // $quantity=$_POST['quantity'];
    $item=$_POST['item'];
    $type=$_POST['type'];
    $quantity=$_POST['quantity'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $date=$_POST['date'];
    // $ttLq=$_POST['ttLq'];
    $department=$_POST['department'];
    $sql="INSERT INTO `lost`(`id`, `item`, `type`, `quantity`, `department`,`name`, `date`) VALUES (null,'$item','$type','$quantity','$department','$name','$date')";
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
                            <div><small>Item Added to Lost</small></div>
                            <div><a href="lostitems.php"><button>Done</button></a></div>
                        </center>
                    </div>
                     </section>
                ';
                }else{
        
                }
            }
        }
       
    }else{
        echo 'sql error';
    }
    
}
   if (isset($_POST['btnAddDamage'])) {
    # code...
    $conn=mysqli_connect("localhost","root","","loitoktok");
    // $quantity=$_POST['quantity'];
    $item=$_POST['item'];
    $type=$_POST['type'];
    $quantity=$_POST['quantity'];
    $id=$_POST['id'];
    $department=$_POST['department'];
    $sql="INSERT INTO `damages`(`id`, `item`, `type`, `quantity`, `department`) VALUES (null,'$item','$type','$quantity','$department')";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        $sql1="UPDATE `items` SET `status`='available' WHERE id='$id'";
        $xec=mysqli_query($conn,$sql1);
        if ($xec) {
            header('location:damaged.php');
        }else{

        }
    }else{
        echo 'sql error';
    }
    
}


?>
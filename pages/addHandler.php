<link rel="stylesheet" href="style.css">
<?php
   if (isset($_POST['btnAdd'])) {
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $item=$_POST['item'];
    $type=$_POST['type'];
    $quantity=$_POST['quantity'];
    $department=$_POST['department'];

    $sql="INSERT INTO `items`(`id`, `item`, `type`, `quantity`, `department`,`status`) VALUES (null,'$item','$type','$quantity','$department','available')";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        echo '
        <section class="pop-container">
        <div class="pop-up">
            <center>
                <div><strong>Success !</strong></div><br>
                <div><small>Item Added Successfull</small></div>
                <div><a href="additem.php"><button>Done</button></a></div>
            </center>
        </div>
    </section>
    ';
    }else{
        echo 'sql error';
    }
}


?>
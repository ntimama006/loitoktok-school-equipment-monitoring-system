<?php
if (isset($_POST['btnX'])) {
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $id=$_POST['id'];
    $sql="DELETE FROM `lost` WHERE id='$id'";
    $exec=mysqli_query($conn,$sql);
    if ($exec) {
        header('location:lostitems.php');
    }else{
        echo 'sql erro';
    }
}

?>
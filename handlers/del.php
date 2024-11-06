<link rel="stylesheet" href="../pages/style.css">
<?php
    if (isset($_POST['btnDel'])) {
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $id=$_POST['id'];
    $sql="DELETE FROM `items` WHERE id='$id'";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        echo '
         <section class="pop-container" >
                                                    <div class="pop-up">
                                                        <center>
                                                            <div><strong>Confirm !</strong></div><br>
                                                            <div><small>Are you sure you want to delete</small></div>
                                                            <div><a href="../pages/home.php"><button name="btnDel" class="btnDelete">Delete</button></a></div>
                                                        </center>
                                                    </div>
                                                </section>
        ';   
    }else{
        echo 'sql error';
    }
}

?>
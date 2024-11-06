<link rel="stylesheet" href="style.css">
<?php
if (isset($_POST['btnCreate'])) {
    # code...
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO `users`(`id`, `name`, `phone`, `username`, `password`) VALUES (null,'$name','$phone','$username','$password')";

    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        echo '
            <section class="pop-container">
            <div class="pop-up">
                <center>
                    <div><strong>Success !</strong></div><br>
                    <div><small>Account Registered successfull you can now login</small></div>
                    <div><a href="index.php"><button>Done</button></a></div>
                </center>
            </div>
        </section>
        ';
    }else{
        echo 'sql error';
    }
}

if (isset($_POST['btnLogin'])) {
    $conn=mysqli_connect("localhost","root","","loitoktok");
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `users` WHERE username='$username' and password='$password'";
    $exec=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($exec);

    if ($count==0) {
        echo 'wrong password';
    }else{
        echo '
            <section class="pop-container">
            <div class="pop-up">
                <center>
                    <div><strong>Success !</strong></div><br>
                    <div><small>Login successfull</small></div>
                    <div><a href="home.php"><button>Done</button></a></div>
                </center>
            </div>
        </section>
        
        ';
    }

}


?>
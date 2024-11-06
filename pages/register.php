<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loitoktok</title>
    <link rel="stylesheet" href="style.css">
    <style>
     
    </style>
</head>
<body class="body-auth">
    <main class="auth-main">
        <div class="loginForm">
            <form action="User.php" method="POST">
                <div><center><h1>Register</h1></center></div>
                <br><hr>
                <br>
                <div class="flexReg">
                    <div>
                        <div>
                            <small>Full Names</small>
                        </div>
                        <div>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <small>Phone</small>
                        </div>
                        <div>
                            <input type="text" name="phone">
                        </div>
                        <div>
                            <small>Email</small>
                        </div>
                        <div >
                            <input type="text" name="email">
                        </div>
                        <script>
                            const check=document.getElementById('tenantCheck')
                            if (check.checked) {
                                check.value="yes";
                                console.log(check.value);
                                
                            }else{
                                check.value="no";
                                console.log(check.value);
                            }
                        </script>
                    </div>
                    <div>
                        <div>
                            <small>Username</small>
                        </div>
                        <div>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <small>Password</small>
                        </div>
                        <div>
                            <input type="password" name="password">
                        </div>
                        <br>
                        <div>
                            <button name="btnCreate">Create account</button>
                        </div>
                        <center><small>or</small></center>
                        <br>
                        <div>
                            <small>you have an account <a href="index.php">Login</a></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      
    </main>
</body>
</html>
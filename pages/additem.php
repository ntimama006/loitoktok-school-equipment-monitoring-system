<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <section class="conatiner-box">
                    <div class="items-form">
                        <form action="addHandler.php" method="POST">
                            <div class="topBard-form">
                                <h4>Add Items</h4>
                            </div>
                            <br>
                            <div>
                                <small>Item Name</small>
                            </div>
                            <div>
                                <input type="text" name="item">
                            </div>
                            <div>
                                <small>Type</small>
                            </div>
                            <div>
                                <input type="text" name="type">
                            </div>
                            <div>
                                <small>Quantity</small>
                            </div>
                            <div>
                                <input type="text" name="quantity">
                            </div>
                            <div>
                                <small>Depertment</small>
                            </div>
                            <div>
                                <input type="text" name="department">
                            </div>
                            <div>
                                <button class="btnAdd" name="btnAdd">Add Item</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
    </main>
</body>
</html>
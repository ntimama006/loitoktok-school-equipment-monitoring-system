<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <strong>Admin panel</strong>
            </div>
            <div>
                <small>Logout</small>
            </div>
        </nav>
    </header>
    <main class="admin-main">
        <div class="side-nav">
            <div>
                <ul class="sideUL">
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="landlods.php">Landloads</a></li>
                    <li><a href="houses.php">Houses</a></li>
                </ul>
            </div>
        </div>
        <div class="admin-main-content">
        <div>
                <div class="top-bar">
                    <small><strong>Users</strong></small>
                </div>
                <hr>
                <section class="barMain">
                    <table class="table1">
                        <thead>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Apartment</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Abdulaziz Said</td>
                                <td>07987783</td>
                                <td>Nakuru</td>
                                <td>Ndumberi invt.</td>
                                <td><button>Edit</button></td>
                                <td><button>Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </main>
</body>
</html>
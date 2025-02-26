<?php
require "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    //Save data to database

    $stmt = $conn->prepare("INSERT INTO users (username,email,password) VALUES( ?,?,?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    header("location:login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager Application</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="header-left">
            <h1 class="app-title">Task Manager Application</h1>
            <p class="greeting"></p>
        </div>
        <div class="header-right">
            <div class="main-profile img">
                <a href="login.html">
                    <h2 class="app-title">Login</h2>
                </a>
            </div>

        </div>
    </header>
    <nav class="navbar">

    </nav>
    <main class="dashboard">
        <div class="form-container">
            <h2 style="color: #0d0c22;">Signup form</h2>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="email">email</label>
                <input type="email" name="email" placeholder="email" required>
                <label for="password">password</label>
                <input type="password" name="password" placeholder="password" required>
                <!-- <label for="profile-image">profile-image</label>
                <input type="file" name="profile-image" id="profile-image" accept='image/*'> -->
                <button type="submit" style="width: 100%">Signup</button>
            </form>
        </div>

    </main>


</body>

</html>
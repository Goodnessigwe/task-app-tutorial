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
                <a href="index.html">
                    <h2 class="app-title">Signup</h2>
                </a>
            </div>
            
        </div>
    </header>
    <nav class="navbar">
        
    </nav>
    <main class="dashboard">
        <div class="form-container">
            <h2 style="color: #0d0c22;">Login form</h2>
            <form method="post">
                <label for="email">email</label>
                <input type="email" name="email" placeholder="email" required>
                <label for="password">password</label>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" style="width: 100%">Login</button>
            </form>
        </div>
        
    </main>
    
    
</body>
</html>
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
                <img src="" alt="main profile image">
            </div>
        </div>
    </header>
    <nav class="navbar">
        <button onclick="location.href='dashboard.html'">
            Dashboard
        </button>
        <button onclick="location.href='creat-task.html'">
            Add New Task
        </button>
        <button onclick="location.href='history.html'">
            View history
        </button>
        <button onclick="location.href='logout.html'">
            Logout
        </button>
    </nav>
    <main class="dashboard">
        <div class="form-container">
            <h2 style="color: #0d0c22;">Create Task form</h2>
            <form method="post">
                <label for="title">Task Title</label>
                <input type="text" name="title" placeholder="Enter Task Title" id="title" required>

                <label for="description">Task Description</label>
               <textarea name="description" id="description" placeholder="Enter Task Description"></textarea>

               <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" required> 

                <label for="section_name">Add Section Name</label>
                <input type="text" name="section_name" id="section_name" required>
               <button type="submit" style="width: 100%">Signup</button>
            </form>
        </div>
    </main>
    
</body>
</html>
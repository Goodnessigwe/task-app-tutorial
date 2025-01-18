<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager Application</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th,td{
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #444;
        }
        th{
            background-color: #252540;
        }
        tr:hover{
            background-color: #333;
        }
        h1{
            margin-bottom: 20px;
        }
        .btn-clear-all{
            margin-left: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-left">
            <h1 class="app-title">Task Manager Dashboard</h1>
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
        <section class="task-tables">
                <h1>Completed Task History</h1>
                <form action="" method="post">
                    <button type="submit" class="action-btn btn-clear-all">
                        Clear All
                    </button>

                </form>
                <table >
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th>Completed date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reading</td>
                            <td>17/01/2025</td>
                            <td>30/01/2025</td>
                            <td>20/02/2025</td>
                            <td>
                                <button class="action-btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </section>
    </main>
    
</body>
</html>
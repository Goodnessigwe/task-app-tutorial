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
            <h1 class="app-title">Task Manager Dashboard</h1>
            <p class="greeting">welcom, Joy!</p>
        </div>
        <div class="header-right">
            <div class="main-profile img">
                <img src="" alt="main profile image">
            </div>
            <div class="upload-controls">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="" class="custom-file-label">
                        Select image
                    </label>
                    <input type="file" name="profile-image" id="profile-image" onchange="" accept="image/*">

                    <div class="preview-box" id="previewBox">
                        <img id="imagePreviewBox" alt="preview image">
                        <button type="submit" class="upload-btn">upload</button>
                    </div>

                </form>
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
        <section class="statistics-section">
            <div class="chart-container">
                Canvas here
            </div>
        </section>
        <section class="task-tables">
            <div class="task-table">
                <h2>Read Task Table</h2>
                <table id="viewTaskTable">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Section Name</th>
                            <th>Task Name</th>
                            <th>Task description</th>
                            <th>Due date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Education</td>
                            <td>reading</td>
                            <td>Read 5 chapter of the book</td>
                            <td>30/02/2025</td>
                            <td>
                                <button class="action-btn btn-edit">Edit</button>
                                <button class="action-btn btn-process">process</button>
                                <button class="action-btn btn-done">Done</button>
                                <button class="action-btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="task-table">
                <h2>Processing Task Table</h2>
                <table id="processingTaskTable">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Section Name</th>
                            <th>Task Name</th>
                            <th>Task description</th>
                            <th>Due date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Education</td>
                            <td>reading</td>
                            <td>Read 5 chapter of the book</td>
                            <td>30/02/2025</td>
                            <td>
                                <button class="action-btn btn-edit">Edit</button>
                                <button class="action-btn btn-process">process</button>
                                <button class="action-btn btn-done">Done</button>
                                <button class="action-btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="task-table">
                <h2>Done Task Table</h2>
                <table class="doneTaskTable">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Section Name</th>
                            <th>Task Name</th>
                            <th>Task description</th>
                            <th>Due date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Education</td>
                            <td>reading</td>
                            <td>Read 5 chapter of the book</td>
                            <td>30/02/2025</td>
                            <td>
                                <button class="action-btn btn-edit">Edit</button>
                                <button class="action-btn btn-process">process</button>
                                <button class="action-btn btn-done">Done</button>
                                <button class="action-btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>


</body>

</html>
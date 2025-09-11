<?php

session_start();
require 'db_connect.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch the logged-in user's profile image
$user_query = $conn->query("SELECT profile_image FROM users WHERE id = $user_id");
$user = $user_query->fetch_assoc();

// Default image if no profile image is uploaded
$profile_image = $user['profile_image'] ? $user['profile_image'] : 'uploads/profile_images/default-profile.png';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <header class="header">

        <?php
        // Fetch the user's profile image from the database
        $user_query = $conn->query("SELECT profile_image FROM users WHERE id = $user_id");
        $user = $user_query->fetch_assoc();

        $profile_image = $user['profile_image'] ?? 'uploads/profile_images/default-profile.png'; // Use default if none exists
        ?>
        <div class="header-left">
            <h1 class="app-title">Task Manager Dashboard</h1>
            <p class="greeting">Welcome, <?= htmlspecialchars($_SESSION['username'] ?? 'Guest') ?>!</p>
        </div>
        <div class="header-right">
            <!-- Main Profile Image -->
            <div class="main-profile">
                <img id="imagePreviewMain" src="<?= htmlspecialchars($profile_image) ?>" alt="Main Profile Image">
            </div>

            <!-- Always-visible File Input -->
            <div class="upload-controls">
                <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                    <!-- Always-visible File Label -->
                    <label for="profile_image" class="custom-file-label">Select Image</label>
                    <input type="file" name="profile_image" id="profile_image" accept="image/*"
                        onchange="previewImage(event)">

                    <!-- Conditionally Visible Upload Button -->
                    <div class="preview-box" id="previewBox" style="display: none;">
                        <img id="imagePreviewBox" alt="Preview Image">
                        <button type="submit" class="upload-btn">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <?php
    // Get the current page name
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <nav class="navbar">
        <button onclick="location.href='dashboard.php'"
            class="dashboard-btn <?= $current_page == 'dashboard.php' ? 'active' : '' ?>">
            Dashboard
        </button>

        <button onclick="location.href='create_task.php'"
            class="add-task-btn <?= $current_page == 'create_task.php' ? 'active' : '' ?>">
            Add New Task
        </button>
        <button onclick="location.href='history.php'"
            class="history-btn <?= $current_page == 'history.php' ? 'active' : '' ?>">
            View history
        </button>
        <button onclick="location.href='logout.php'"
            class="logout-btn <?= $current_page == 'logout.php' ? 'active' : '' ?>">
            logout
        </button>
    </nav>
    <main class=" dashboard">
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

    <script>
    function previewImage(event) {
        const reader = new FileReader();
        const previewBox = document.getElementById('previewBox');
        const imagePreviewBox = document.getElementById('imagePreviewBox');

        reader.onload = function() {
            imagePreviewBox.src = reader.result; // Display the selected image
            previewBox.style.display = 'flex'; // Show the preview box with the Upload button
        };

        if (event.target.files && event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]); // Read the selected file
        } else {
            previewBox.style.display = 'none'; // Hide the preview box if no file is selected
        }
    }
    </script>
</body>

</html>
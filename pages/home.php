<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="assets/css/box.css">
</head>

<body>
    <div class="container">
        <h1 class="main-heading">Explore Our Features</h1>
        <div class="grid-container">
            <!-- Sidebar links in grid format -->
            <div class="grid-box">
                <a href="?page=dashboard&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">QUESTION SET</a>
            </div>
            <div class="grid-box">
                <a href="?page=add-courses&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">COURSES</a>
            </div>
            <div class="grid-box">
                <a href="?page=add-outcomes&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">OUTCOMES</a>
            </div>

            <div class="grid-box">
                <a href="?page=add-questions&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">CREATE QUESTION</a>
            </div>

        </div>
    </div>
</body>

</html>
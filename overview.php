<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do|Overview</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            include 'authHeader.php';
        ?>
    <div class="overViewContainer">
        <?php
            include'sideProfile.php '
        ?>
        <div class="overView">
            <div class="overViewTitle">
                <h1>Overview</h1>
            </div>
            <div class="overViewTaskTitle">
                <div class="toDoTitle">
                    To Do
                </div>
                <div class="inProgressTitle">
                    In Progress
                </div>
                <div class="completeTitle">
                    Completed
                </div>
            </div>
            <div class="overViewTaskContainer">
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task1"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
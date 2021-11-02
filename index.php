<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php
            include 'signIn.php'
        ?>
    </section>
    <section>
        <?php
            include 'register.php'
        ?>    
    </section>
    <div class="container">
       <section> 
            <?php
                include 'header.php';
            ?>
       </section>    
        <section>
            <div class="hero">
                <div class="heroText">
                    <div class="greeting">
                        <h1>Manage Your Tasks With Us</h1>
                        <span>
                            Mooji-We are looking at the phenomenon, that is in movement,
                            as thought that is what is important.It is never going to be important.
                            Even if it is an angel, you cannot keep unbroken contact with it. it is 
                            is merely a thought or some phenimenon apperaing in you.
                             You are greater than this thing; because if it comes and goes, the witness of it remains.
                        </span>
                        <div class="addNew">
                            <h3>Add Your First Task Here!</h3>
                            <button>Add</button>
                        </div>
                    </div>
                </div>
                <div class="heroImage">
                    <img src="/doingTask.png" alt="">
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
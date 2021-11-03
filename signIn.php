<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoo|Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signInFormContainer">
    <div class="signInForm">
        <div class="signInHeader">
            <h2>Sign In</h2>
        </div>
    <div class="signInImage">
        <h1>Make Your Day With Us</h1>
        <span>ToDoo.com</span>
        <img src="/Theseaship/ship/nigthShip.png" alt="">
    </div>
    <form action="/_actions/login.php" method="post">
            <div class="signInWelcome">
                <h1>Welcome</h1>  
            </div>
            <?php  session_start();
                  if (isset($_SESSION['signUp'])):?>
                    <div class="accountCreated">
                        <h2>Account Created. Please Login.</h2>
                    </div>
            <?php endif?>  
            <a href="index.php"><i class="fas fa-times"></i></a>
            <label for="email">Email</label>
            <input type="email" name="email" id="SignInemail">
            <label for="password">Password</label>
            <input type="password" name="password" id="SignInpassword">
            <input type="submit" value="Submit" id="signInsubmit">
            <a href="register.php">signUp</a>
        </form>
    </div>
</div>    
</body>
</html>
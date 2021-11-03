<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Doo|sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="registerFormContainer">
    <div class="registerForm">
        <div class="registerHeader">
            <h2>Sign Up</h2>
        </div>
    <div class="registerImage">
        <h1>Make Your Day With Us</h1>
        <span>ToDoo.com</span>
        <img src="/Theseaship/ship/nigthShip.png" alt="">
    </div>
    <form action="/_actions/create.php" method="post">
            <div class="registerWelcome">
                <h1>Welcome</h1>
            </div>
            <a href="index.php"><i class="fas fa-times"></i></a>
            <label for="name">Name</label>
            <input type="text" name="name" id="registerName">
            <label for="email">Email</label>
            <input type="email" name="email" id="registerEmail">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
            <label for="password">Password</label>
            <input type="password" name="password" id="registerPassword" minlength="8" required>
            <input type="submit" value="Submit" id="registerSubmit">
            <a href="signIn.php">Already have an account?Sign In</a>
        </form>
    </div>
</div>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/login_css.css">
    <title>Carme</title>
    <link rel="icon" href="img/logo.png">
</head>
<body>

<div class="form-wrapper">
    <form action="/includes/login.inc.php" method="POST">
        <div class="imgcontainer">
            <img src="/img/logo.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn"><a href="index.php"> Cancel </a></button>
            <span class="psw">Forgot password?</span>
        </div>
    </form>
</div>

</body>
</html>
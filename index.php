<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carme</title>
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/index_css.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/footer_css.css">
</head>
<body>
<?php
include('header.php');
?>
<?php
session_start();
if (isset($_SESSION['id']) == false) {
    header('Location: /login.php');
}
?>
<div>
    <div class="first-half">
        <h1>Carpooling, je stigao na nase trziste!</h1>
        <div class="flex">
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like
                    Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div>
                <img src="https://pics.clipartpng.com/White_Mercedes_Benz_GLK_Car_PNG_Clipart-131.png"
                     style="width: 500px;height: 300px">
            </div>
        </div>
    </div>
    <div class="second-half">
        <div class="contact">
            <h1>Kontakt</h1>
            <form method="post" action="includes/message.inc.php">
                <label for="fname">Ime:</label><br>
                <input type="text" name="fname"><br>
                <label for="lname">Prezime:</label><br>
                <input type="text" name="lname"><br>
                <label for="fname">Email:</label><br>
                <input type="text" name="email"><br>
                <label for="lname">Poruka:</label><br>
                <textarea type="text" name="message"> </textarea><br><br>
                <button type="submit">Posalji email</button>
            </form>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>
</html>
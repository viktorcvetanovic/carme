<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carme</title>
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/create_post_css.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
<div>
    <form action="/includes/create_post.inc.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="header">Naslov</label><br>
            <input type="text" name="header"><br>
        </div>
        <br/>
        <div>
            <label for="content">Kontent</label><br>
            <textarea name="content" cols="40" rows="10"> </textarea><br>
        </div>
        <br/>
        <div>
            <label for="">Slika</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <br/>
        <div>
            <label for="username">Cena</label><br>
            <input type="text" id="username" name="price"><br>
        </div>
        <br/>
        <button type="submit" name="submit">Napravi post</button>
    </form>
</div>
</body>
</html>
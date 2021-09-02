<html>
<head>
    <link rel="stylesheet" href="css/admin_css.css">
    <link rel="stylesheet" href="css/global_css.css">
</head>
<body>
<h1> Svi postovi</h1>
<?php
include_once('includes/crud/DataBase.php');
include_once('includes/crud/User.php');
include_once('includes/crud/Post.php');

$array = DataBase::readAllPosts();
session_start();
$user_id = $_SESSION["id"];
foreach ($array as $el) {
    if ($el instanceof Post)
        $id = $el->getId();

    echo $id;
    echo $el->getHeader();
    echo "<form  action='/includes/remove_post.inc.php' method='post'>
           <input value='$id' hidden name='post_id'>
        <input value='$user_id' hidden name='user_id'>
    <button type='submit' class='button_for_buy'>Obrisi post</button>
    </form>";
}

?>
</body>
</html>

<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druzi se</title>
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/blog_css.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
<header>

    <div class="wrapper_for_navbar">
        <div>
            <a href="index.php"> <img src="img/logo.png"></a>
        </div>
        <div class="wrapper_for_profile">
            <div class="profile_name">
                <?php
                session_start();
                if (isset($_SESSION['id']) == false) {
                    header('Location: /index.php');
                }
                include('includes/crud/DataBase.php');
                $user = DataBase::readUserById($_SESSION["id"]);
                echo "<a href='profile.php' class='goto_profile'>";
                echo $user->getUsername();
                echo "</a>";
                ?>
            </div>
            <div class="profile_photo">
                <a href="profile.php"> <img src="img/avatar.png"></a>
            </div>
        </div>
    </div>
</header>
<div class="wrapper_for_blog">
    <div class="add_post">
        <h3><a href="create_post.php">+ Dodaj post</a></h3>
    </div>
    <div class="post">
        <?php
        include('includes/crud/Post.php');
        include('post.php');

        $array = DataBase::readAllPosts();
        foreach ($array as $el) {
            if ($el instanceof Post)
                createPost($el->getId(),
                    DataBase::readUserById($el->getUserFk())->getUsername(),
                    $el->getHeader(), $el->getBody(),
                    $el->getPostPhoto(), $el->getPrice(),
                    $el->getCreatedDate(), $el->getUserFk());
        }
        ?>
    </div>
</div>
</body>
</html>
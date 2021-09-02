<link rel="stylesheet" href="css/header_css.css">
<div class="topnav">
    <div>
        <a href="index.php">Pocetna</a>
        <a href="blog.php">Oglasi</a>
        <a href="#contact">Kontakt</a>
        <a href="about.php">O nama</a>
        <?php
        session_start();
        if (isset($_SESSION['id']) == false) {
            header('Location: /login.php');
        }
        include_once('includes/crud/DataBase.php');
        include_once('includes/crud/User.php');
        $user = DataBase::readUserById($_SESSION["id"]);
        if ($user->getRole() == 1) {
            echo '<a href="admin.php"> Admin</a>';
        }
        ?>
    </div>
    <div class="logo">
        <div class="flex">
            <div>
                <div class="flex">
                    <h2><a href="create_post.php">Objavi oglas</a></h2>
                    <h2 style="margin-right: 2rem"><a href="profile.php">Moj profil </a></h2>
                </div>
            </div>
            <diov>
                <img src="img/logo.png">
        </div>
    </div>
</div>
</div>
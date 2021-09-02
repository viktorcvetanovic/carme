<html>
<head>
    <link href='https://css.gg/play-list-remove.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/post_css.css">
</head>
<body>
<?php

function createPost($id, $user, $header, $body, $picture, $price, $date, $user_created)
{

    $user_id = $_SESSION["id"];
    echo "
        <div style='background-color: rgb(35, 37, 38); ' class='main_div_post'>
        <div class='wrapper_for_user' style='display: flex;margin-bottom: 1rem;justify-content: space-between'>
        ";
    if ($user_id == $user_created) {
        echo "<form  action='/includes/remove_post.inc.php' method='post'>
           <input value='$id' hidden name='post_id'>
    <button type='submit' class='button_for_buy'>Obrisi post</button>
    </form>";
    }
    echo "
        <div>
        <h3 class='user_h3'><span style='color: #4c566a'>Korisnik:</span>  $user</ho3>
        </div>
        <div>
        <h3 class='date_h3'><span style='color:#4c566a'>Datum:</span>  $date</h3>
       </div> 
        </div >
        <div class='header_with_icon'>
        <h1>$header</h1> 
        <br>
        </div>
        <div class='for_photo'>
        <img src='includes/$picture'>
        </div>
        <div class='for_text'>
        <p>$body</p>
        <p style='text-align: right;margin: 1rem'>
        <span style='color: #4c566a'>Cena:</span>  
        $price
        </p> 
        <form  action='includes/reservation_inc.php' method='post'>
           <input value='$id' hidden name='post_id'>
        <input value='$user_id' hidden name='user_id'>
    <button type='submit' class='button_for_buy'>Rezervisi voznju</button>
    </form>
        </div>";
}

?>

</body>
</html>

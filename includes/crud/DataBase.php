<?php

class DataBase
{

    static function addUser(User $user)
    {
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $query = "INSERT INTO user(username,password,email) VALUES('$username','$password','$email')";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        return $conn->query($query);
    }

    static function readAllUser()
    {
        $query = "SELECT * FROM user";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        $array = [];
        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $array[] = User::withRow($row);
            }

        }
        return $array;
    }

    static function readUserById($id)
    {
        $query = "SELECT * FROM user WHERE id=$id";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        $user = new User();
        $result = $conn->query($query);
        $result = $result->fetch_row();
        $user->setId($result[0]);
        $user->setUsername($result[1]);
        $user->setPassword($result[2]);
        $user->setEmail($result[3]);
        return $user;
    }

    static function addPost(Post $post)
    {
        $header = $post->getHeader();
        $body = $post->getBody();
        $user_fk = $post->getUserFk();
        $price = $post->getPrice();
        $post_photo = $post->getPostPhoto();
        $query = "INSERT INTO post(header,body,user_fk,price,post_photo) VALUES('$header','$body','$user_fk','$price','$post_photo')";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        return $conn->query($query);
    }

    static function readAllPosts()
    {
        $query = "SELECT * FROM post ORDER BY id DESC";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        $array = [];
        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $array[] = Post::withRow($row);
            }

        }
        return $array;
    }


    static function readAllCommentsByPostId($post_id)
    {
        $query = "select * from comments
    join post on comments.post_fk = post.id 
    join user on comments.user_fk = user.id where comments.post_fk=$post_id ";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        $array = [];
        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $array[] =new CommentUserDTO($row[12],$row[1]);
            }
        }
        return $array;
    }

    static function readAllCommentsByUserId($user_id){

        $query = "select * from comments
    join post on comments.post_fk = post.id 
    join user on comments.user_fk = user.id where comments.user_fk=$user_id ";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        $array = [];
        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $array[] =new CommentUserDTO($row[12],$row[1]);
            }
        }
        return $array;
    }


    static  function addComment($commentar_body,$user_fk,$post_fk){
        $query = "INSERT INTO comments(commentar_body,user_fk,post_fk) VALUES('$commentar_body','$user_fk','$post_fk')";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        return $conn->query($query);
    }

    static function addMessage(Message $message){
        $first_name=$message->getFirstName();
        $last_name=$message->getLastName();
        $email=$message->getEmail();
        $message_value=$message->getMessage();
        $query="INSERT INTO message(first_name,last_name,email,message) VALUES 
                                    ('$first_name','$last_name','$email','$message_value')";
        $conn = mysqli_connect("localhost", "root", "root", "druzi_se");
        return $conn->query($query);
    }
}
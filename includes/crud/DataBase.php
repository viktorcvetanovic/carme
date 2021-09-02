<?php
include('User.php');

class DataBase
{

    static function addUser(User $user)
    {
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $role = $user->getRole();
        $query = "INSERT INTO user(username,password,email,role) VALUES('$username','$password','$email','$role')";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        return $conn->query($query);
    }

    static function readAllUser()
    {
        $query = "SELECT * FROM user";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
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
        $query = "SELECT * FROM user WHERE id='$id'";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        $user = new User();
        $result = $conn->query($query);
        $result = $result->fetch_row();
        $user->setId($result[0]);
        $user->setUsername($result[1]);
        $user->setPassword($result[2]);
        $user->setEmail($result[3]);
        $user->setRole($result[5]);
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
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        return $conn->query($query);
    }

    static function removePost($post)
    {
        $query = "DELETE FROM post WHERE post.id='$post'";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        return $conn->query($query);
    }

    static function readAllPosts()
    {
        $query = "SELECT * FROM post ORDER BY id DESC";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        $array = [];
        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $array[] = Post::withRow($row);
            }

        }
        return $array;
    }


    static function addReservation($user_fk, $post_fk)
    {
        $query = "INSERT INTO reservation(user_fk,post_fk) VALUES('$user_fk','$post_fk')";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        return $conn->query($query);
    }

    static function addMessage(Message $message)
    {
        $first_name = $message->getFirstName();
        $last_name = $message->getLastName();
        $email = $message->getEmail();
        $message_value = $message->getMessage();
        $query = "INSERT INTO message(first_name,last_name,email,message) VALUES 
                                    ('$first_name','$last_name','$email','$message_value')";
        $conn = mysqli_connect("localhost", "root", "root", "carme");
        return $conn->query($query);
    }
}
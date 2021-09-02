<?php

class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $photo;
    private $role;
    private $arrayOfPosts;

    /**
     * @return mixed
     */
    public function getArrayOfPosts()
    {
        return $this->arrayOfPosts;
    }

    /**
     * @param mixed $arrayOfPosts
     */
    public function setArrayOfPosts($arrayOfPosts)
    {
        $this->arrayOfPosts = $arrayOfPosts;
    }


    public function __construct()
    {
    }

    public static function withRow(array $row)
    {
        $instance = new self();
        $instance->fill($row);
        return $instance;
    }


    protected function fill(array $row)
    {
        $this->id = $row[0];
        $this->username = $row[1];
        $this->password = $row[2];
        $this->email = $row[3];
        $this->role = $row[4];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }




    function __toString()
    {
        return "$this->id $this->username $this->email";
    }
}
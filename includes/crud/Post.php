<?php

class Post
{
    private $id;
    private $header;
    private $body;
    private $created_date;
    private $user_fk;
    private $price;
    private $post_photo;

    /**
     * Post constructor.
     */
    public function __construct()
    {
    }

    public static function withRow(array $row)
    {
        $instance = new self();
        if (count($row) == 5) {
            $instance->fill($row);
        } else {
            $instance->fullFill($row);
        }

        return $instance;
    }


    protected function fill(array $row)
    {
        $this->header = $row[0];
        $this->body = $row[1];
        $this->user_fk = $row[2];
        $this->price = $row[3];
        $this->post_photo = $row[4];
    }

    protected function fullFill(array $row)
    {
        $this->id = $row[0];
        $this->header = $row[1];
        $this->body = $row[2];
        $this->created_date = $row[3];
        $this->user_fk = $row[4];
        $this->price = $row[5];
        $this->post_photo = $row[6];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param mixed $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     * @return mixed
     */
    public function getUserFk()
    {
        return $this->user_fk;
    }

    /**
     * @param mixed $user_fk
     */
    public function setUserFk($user_fk)
    {
        $this->user_fk = $user_fk;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPostPhoto()
    {
        return $this->post_photo;
    }

    /**
     * @param mixed $post_photo
     */
    public function setPostPhoto($post_photo)
    {
        $this->post_photo = $post_photo;
    }
}
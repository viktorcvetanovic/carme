<?php
class Message
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $message;

    /**
     * Message constructor.
     */
    public function __construct()
    {
    }


    public static function withRow( array $row ) {
        $instance = new self();
        $instance->fill( $row );
        return $instance;
    }

    protected function fill( array $row ) {
        $this->first_name=$row[0];
        $this->last_name=$row[1];
        $this->email=$row[2];
        $this->message=$row[3];
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}
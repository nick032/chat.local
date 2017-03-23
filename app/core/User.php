<?php

class User
{
    private $name;
    private $email;
    private $pass;
    private static $instance;

    private function __construct($name, $email, $pass)
    {
        $this->name = $this->validateName($name);
        $this->email = $this->validateEmail($email);
        $this->pass = $this->hash($pass);

        return $this;
    }

    public static function instance($name, $email, $pass)
    {
        if (!is_object(self::$instance))
            self::$instance = new User($name, $email, $pass);
        return self::$instance;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function validateName($name)
    {
        return $name;
    }

    protected function validateEmal($email)
    {
        return $email;
    }

    protected function hash($pass)
    {
        return $pass;
    }

    public function saveUser()
    {
        return true;
    }

    public function auth()
    {
        return true;
    }
}
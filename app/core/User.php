<?php

class User
{
    private $name;
    private $email;
    private $pass;
    private static $instance;

    private function __construct()
    {
        return $this;
    }

    public static function create()
    {
        if (!is_object(self::$instance))
            self::$instance = new User();
        return self::$instance;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function validateName($name)
    {
        return $name;
    }

    protected function validateEmail($email)
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

    public static function auth()
    {
        $sql = "SELECT * FROM users WHERE sid = ?";
        $result = DB::prepare($sql)->execute([Session::getSID()])->fetch();
        if(!empty($result)) return true;
        return false;
    }
}
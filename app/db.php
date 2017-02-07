<?php
class DB
{
    protected static $instance = null;
    final private function __construct(){}
    final private function __clone(){}

    public static function instance(){
        if(self::$instance === null) {
            $opt = [
                PDO::ATTR_ERRMODE                => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES      => true,
                PDO::ATTR_STATEMENT_CLASS       => array('myPDOStatement')
            ];
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $opt);
        }
        return self::$instance;
    }
    public static function __callStatic($name, $args)
    {
        return call_user_func_array(array(self::instance(), $name), $args);
    }
}
class myPDOStatement extends PDOStatement
{
    function execute($data = array())
    {
        parent::execute($data);
        return $this;
    }
}
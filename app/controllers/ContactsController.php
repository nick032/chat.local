<?php
class ContactsController
{
    public static function index(){
        echo "Контроллер контактов ";
    }
    public static function edit($x = 0){
        self::index();
        echo "<br>" . $x;
    }
}
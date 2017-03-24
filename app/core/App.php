<?php

class App
{
    public static function start()
    {
        Session::start();
        if(Session::isCreated())
            echo "Сессия запущены";
        Route::dispatch();
    }
}
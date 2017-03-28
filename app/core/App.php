<?php
class App
{
    public static function start()
    {
        Session::start();
        User::create();
        Route::dispatch();
    }
}
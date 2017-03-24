<?php

class Controller
{
    protected static function render($view = 'index', $params = [])
    {
        include("./app/views/$view.view.php");
    }
}
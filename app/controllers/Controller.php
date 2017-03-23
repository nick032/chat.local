<?php
class Controller
{
    protected static function render($view, array $params)
    {
        include("./app/views/".$view.".view.php");
    }
}
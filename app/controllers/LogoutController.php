<?php
class LogoutController extends Controller
{
    public static function index()
    {
        Session::destroy();
        parent::render();
    }
}
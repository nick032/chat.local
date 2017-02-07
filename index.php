<?php
//Let's begin
require_once('app/db.php');
require_once("config.php");


//$sql = "SELECT name, email FROM users WHERE name = :name";
//$data = DB::prepare($sql)->execute(['name'=>'nick'])->fetchAll();
//print_r($data);
session_start();
if(isset($_SESSION['key'])){
    include("public/index.php");
}else {
    if(!isset($_POST['userName']) || empty($_POST['userName']))
        include('public/login.php');
}




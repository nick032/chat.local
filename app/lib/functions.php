<?php
// Проверка на не Isset или Empty
function checkIssetEmpty($var) {
    if(!isset($var) || empty($var))
        return false;
    else
        return true;
}
// Автозагрузка классов из app/controller
spl_autoload_register(function($className){
    $filePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR . $className . ".php";
    if(file_exists($filePath))
        require_once($filePath);
        return true;
    //echo "Ошибка загрузка класса " . $className;
    return false;
});
// Автозагрузка классов из app/core
spl_autoload_register(function($className){
    $filePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . $className . ".php";
    if(file_exists($filePath)) {
        require_once($filePath);
    }
    else{
        echo "Ошибка загрузка класса " . $className;
    }
});

function validate_form_field($str){
    $result = htmlspecialchars($str);
    $result = urldecode($result);
    return trim($result);
}
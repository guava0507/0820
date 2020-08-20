<?php
// 一個簡單但可以運作的 REST API，

$method = $_SERVER['REQUEST_METHOD'];
$url = explode("/", rtrim($_GET["url"], "/") );

switch ($method . " " . $url[0]) 
{
    case "GET products":
        if (isset($url[1]))
            echo "GET product by id: " . $url[1];
        else
            echo "GET products";
        break;
    default:
        echo "Thank you";
}

?>
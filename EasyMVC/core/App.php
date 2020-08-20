<?php

class App
{
    public function __construct()
    {
        //var_dump($this->parseUrl());
        //$this->parseUrl();
        //echo "ありがとう　神様";
        $url = $this->parseUrl();
        $controllerName = "{$url[0]}Controller";
        require_once "controllers/$controllerName.php";
        $controller = new $controllerName;
        $methodName = $url[1];
        // $controller ->$methodName($url[2]);
        //echo $methodName;
        unset($url[0]); unset($url[1]);

         $params = $url ? array_values($url) : Array();
         call_user_func_array(Array($controller,$methodName),$params);
         
         //控制器名 方法名 參數可選 看是否方法需要參數
         echo "<hr>";
         //var_dump($params);

    }
    public function parseUrl()
    {
        if(isset($_GET["url"]))
        {
            $url = rtrim($_GET["url"], "/"); //去掉字串指定符號 rtrim()
            $url = explode("/",$url);   //拆解陣列依照("/")
            return $url;
            //echo $_GET["url"];
        }
    }

}
?>
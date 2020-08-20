<?php

// class HomeController extends Controller
// {
//     function index()
//     {
//         echo "home page of HomeController";
//     }
//     function hello($name)
//     {
//         echo "Hello! $name";
//     }
// }
class HomeController extends Controller 
{
    
    function index() 
    {
        echo "home page of HomeController";
    }
    
    function hello($name) 
    {
        $user = $this->model("User"); //參數傳給model
        $user->name = $name;
        $this->view("Home/hello",$user);
        //echo "Hello! $user->name"; 
    }
    
}







?>
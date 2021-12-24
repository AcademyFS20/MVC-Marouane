<?php 

namespace Providers;

class Request
{
    // Function to get route
    public static function route($route)
    {
        return BASE_URI . $route;
    }

    //Function to verify input
    public static function post($key) 
    {
        return isset($_POST[$key]) && !empty($_POST[$key]) ? true : false;
    }

    //Function to get data
    public static function setPost($key)
    {
        return $_POST[$key];
    }


}   
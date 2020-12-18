<?php 

namespace App\Core;

use Exception;

class Route{

    private static $validRoutes = array();

    public static function resource_template_for_all_request_type($route,$callback, $method){
        self::$validRoutes[] = $route;
        $request_Route_Name = "$_SERVER[QUERY_STRING]";
        $request_method = "$_SERVER[REQUEST_METHOD]";

        if(!isset($request_Route_Name)){
            $request_Route_Name = "";
        }

        if($request_Route_Name == $route && $request_method == $method){
            echo self::handle_Callback_Function($callback);
        }
    }

    public static function get($route, $callback){
        self::resource_template_for_all_request_type($route,$callback, 'GET');
    }

    public static function post($route, $callback){
        self::resource_template_for_all_request_type($route, $callback, 'POST');
    }

    public static function validate_request_method($method){
        $request_method = "$_SERVER[REQUEST_METHOD]";

        if(strtolower($request_method) != strtolower($method)){
            header("Location: /500");
        }
    }

    public static function validate_routes($route){
        if(!in_array($route, self::$validRoutes)){
            header("Location: /404");
        }
    }

    public static function handle_Callback_Function($callback){

        if(is_array($callback)){

            $function_Name_From_Callback_Array = $callback[1];
            $class = new $callback[0];
            return $class->$function_Name_From_Callback_Array();

        }elseif(is_callable($callback)){

            $callback->__invoke();       
        }
    }
}
<?php

namespace App\Core\HelperTraits;

trait RouteTrait{
    private static $validRoutes = array();

    public static function resource_template_for_all_request_type($route, $callback, $method){
        self::$validRoutes[] = $route;
        $request_Route_Name = "$_SERVER[QUERY_STRING]";

        if(!isset($request_Route_Name)){
            $request_Route_Name = "";
        }

        if($request_Route_Name == $route){
            self::validate_request_method($method);
            echo self::handle_Callback_Function($callback);
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

    public static function validate_request_method($method){
        $request_method = "$_SERVER[REQUEST_METHOD]";

        if(strtolower($request_method) != strtolower($method)){
            header("Location: /500");
        }
    }
}
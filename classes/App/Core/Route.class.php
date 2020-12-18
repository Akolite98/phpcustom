<?php 

namespace App\Core;

class Route{

    private static $validRoutes = array();

    public static function get($route, $callback){
        self::$validRoutes[] = $route;
        $request_Route_Name = "$_SERVER[QUERY_STRING]";

        if(!isset($request_Route_Name)){
            $request_Route_Name = "";
        }

        if($request_Route_Name == $route){
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
}
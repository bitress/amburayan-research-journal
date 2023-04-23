<?php

class Session
{

    public static function start()
    {
        session_name("arj");
        session_start();
    }

    public static function set($index, $value)
    {
        $_SESSION[$index] = $value;
    }

    public static function check($index)
    {
        if (isset($_SESSION[$index])){
            return true;
        } else {
            return false;
        }
    }

    public static function get($index)
    {
       if ( self::check($index)){
           return $_SESSION[$index];
       }
    }

    public static function unset($index){
        unset($_SESSION[$index]);
    }

    public static function destroy(){
        session_destroy();
    }

}
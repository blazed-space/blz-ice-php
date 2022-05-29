<?php
    class Util_Auth{
        /*
            Util_Auth::new_auth()
                @Returns New auth element.
        */
        public static function new_auth(){
            \Config::get('db', true);
            return new \Delight\Auth\Auth(new PDO(\Config::get('db')["default"]["connection"]["dsn"], 
            \Config::get('db')["default"]["connection"]["username"], 
            \Config::get('db')["default"]["connection"]["password"]));
        }
    }
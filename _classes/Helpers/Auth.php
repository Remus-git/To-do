<?php
    namespace Helpers;

    class Auth
    {
        static $loginUrl = '/index.php';

        static function check()
        {   
            if (!isset($_SESSION)) {
                session_start();
                if(isset($_SESSION['user'])) {
                    return $_SESSION['user'];
                    
                }else{
                    HTTP::redirect(static::$loginUrl);
                }
            }
            else{
                if(isset($_SESSION['user'])) {
                    return $_SESSION['user'];
                    
                }else{
                    HTTP::redirect(static::$loginUrl);
                }
            }
        }
    }
<?php
    class fncs{
        public function setMsg($name, $value, $class){
            if(is_array($value)){
                $_SESSION[$name] = $value;
            }else{
                $_SESSION[$name] = "<span class='".$class."'>". $value . "</span>";
            }
        }
        public function getMsg($name){
            if(isset($_SESSION[$name])){
                $session = $_SESSION[$name];
                unset($_SESSION[$name]);
                return $session;
            }
        }
    }
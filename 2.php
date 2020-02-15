<?php
     function is_username_valid($username) {
        return preg_match("/^[a-z]{5,9}$/",$username) ;
        }
        if (is_username_valid("rezky")) {
            echo "True" ;
        } else {
            echo "False" ;
        }
        
        function is_password_valid($password) {
            return preg_match("/^(?=.*[A-Z])(?=.3[0-9])(?=.*[!@#$%^&*-]).{8,}$/",$password) ;
        }
        if (is_password_valid("T3pungB#3r4s!")) {
            echo "True";
        } else{
            echo "False";
        }
?>

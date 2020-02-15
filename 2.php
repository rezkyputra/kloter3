<?php
     function is_username_valid($username) {
          return preg_match("/^[a-z]{5,9}$/",$username) ;
     }
     if (is_username_valid("ddddd")) {
         echo "True" ;
     } else {
         echo "False" ;
     }
     
     function is_password_valid($password) {
         return preg_match("/[a-z]+[A-Z]{1,}+[0-9]{1,}+[!@#$%^&*(),.?-_]{1,}/",$password) ;
     }
     if (is_password_valid("kickXXX2!")) {
         echo "True";
     } else{
         echo "False";
     }
?>

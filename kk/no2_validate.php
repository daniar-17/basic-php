<?php
    function checkValidate($email, $password)
    {
        if($email == ""){
            return array(false, "Email Kosong!");
        }else if($password == ""){
            return array(false, "Password Kosong!");
        }else{
            return array(true, "Berhasil");
        }   
    }

    $email = "daniar@gmail.com";
    $password = "rahasia";
    list($val, $msg) = checkValidate($email, $password);
    if($val){
        echo "Success : ".$msg;
    }else{
        echo "Failed : ".$msg;
    }
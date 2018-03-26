<?php

function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{
    $email = htmlspecialchars($email);
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $adress = htmlspecialchars($adress);
    
    $sql = "INSERT INTO
            users (`email`, `pwd`, `name`, `phone`, `adress`)
            VALUES ('$email', '$pwdMD5', '$name', '$phone', '$adress')";
    $rs = mysql_query($sql);
    
    if($rs){
        $sql = "SELECT * FROM users
                WHERE (`email` = '$email' and `pwd` = '$pwdMD5')";
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
    
    if(isset($rs[0])){
        $rs['success'] = 1;
    }else{
        $rs['successs'] = 0;
    }
    }else{
        $rs['success'] = 0;
    }
    
    return $rs;
}


function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;
    
    if(! $email){
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
     if(! $pwd1){
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
     if(! $pwd2){
        $res['success'] = false;
        $res['message'] = 'Введите подтверждение пароля';
    }
     if($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    
    return $res;
    
}

function checkUserEmail($email)
{
    $email = mysql_real_escape_string($email);
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
    
    return $rs;
    
    if(! $resData){
        $pwdMD5 = md5($pwd1);
        
        $userData = registerNewUser($email, $pwdMD5, $name, $phone, $adress);
    }
}


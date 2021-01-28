<?php
    require_once 'register.html';
    require_once 'db.php';
    $flag = $msg = $user = $pwd = "";
    if(isset($_POST['user'])){
        $user = sanitizeString($_POST['user']);
        $pwd = sanitizeString($_POST['pwd']);
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $result = query_mysql("select * from register_data where username='$user'");

        if($result->num_rows){
            $msg = "Please change your username";
            echo $msg;
            $flag = false;
            return $flag;
        }else{
            add_user($user, $pwd);
            // query_Mysql("insert into register_data values('$user', '$pwd')");
            $msg = "Create Account Success";
            echo $msg;
            $flag = true;
            return $flag;
        }
    }
?>
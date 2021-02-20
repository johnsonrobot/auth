<?php
    require_once 'login.html';
    require_once 'db.php';
    $flag = $msg = $user = $pwd = $pwd_hash = "";
    if(isset($_POST['user'])){
        $user = sanitizeString($_POST['user']);
        $pwd = sanitizeString($_POST['pwd']);
        $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
        $result = query_mysql("select * from register_data where username='$user'");

        if($result->num_rows){
            echo "Login success";
        }else{
            echo "Login failed";
        }
    }
?>
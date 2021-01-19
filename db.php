<?php
    $host = 'localhost';
    $base = 'registerdata';
    $user = 'johnson';
    $pass = 'johnsonpwd';

    $connect = new mysqli($host, $user, $pass, $base);
    if($connect->connect_error) die("Internal error");

    function query_mysql($query){
        global $connect;
        $result = $connect->query($query);
        if(!$result) die("execute command error");
        return $result;
    }
    function createTable($name, $query){
        query_mysql("create table if not exists $name($query)");
        echo "Table $name already existed.<br>";
    }

    function sanitizeString($var){
        global $connect;
        $var = strip_tags($var);
        $var = htmlentities($var);
        $var = stripslashes($var);
        return $connect->real_escape_string($var);
    }
?>
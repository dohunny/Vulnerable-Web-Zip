<?php
    ini_set('display_errors', 0);
    function dbconnect(){
        try {
            $db = mysqli_connect('db','N0Named','N0Named123#@!','shop');
            mysqli_query($db, "set names utf8;");
            mysqli_query($db, "alter database shop default character set utf8 collate utf8_general_ci;");
            mysqli_query($db,'create table contacts(username varchar(100) not null,email varchar(100) not null,tel varchar(20) not null,message varchar(100) not null) default character set utf8 collate utf8_general_ci;');
            mysqli_query($db, 'create table users(uid varchar(10) not null,upw varchar(30) not null,email varchar(30) not null) default character set utf8 collate utf8_general_ci;');

            return $db;
        }
        
        catch(Exception $e) {
            return 0;
        }
    }
?>

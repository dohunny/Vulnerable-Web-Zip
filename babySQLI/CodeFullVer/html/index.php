<?php

    include "./config.php"; 
    $db = dbconnect(); 
    if(!$db){
        echo "DB Connection Error";
    }

    $pw = $_GET['pw'];

    if(preg_match('/ |\(\)|or|and|0x09|0x0a|0x0d|substr|sleep|mid|left|right|union|where|delete|update|insert/is',$pw))exit("Don't do that!");
    $query="select id from users where id='admin' and pw='{$pw}'";
    echo"<hr><h3>query : <strong>{$query}</strong></h3><hr><br>";
    $result = @mysqli_fetch_array(mysqli_query($db,$query));
    if (!$result['id']){
        echo mysqli_error($db); // I will debugging my web site!!!
    }
    
    if ($result['id']){
        $id = $result['id'];
        $pw_u = addslashes($pw);

        $query="select pw from users where id='admin' and pw='{$pw_u}'";
        $result = @mysqli_fetch_array(mysqli_query($db,$query));

        if (($result['pw']) && ($result['pw'] == $pw_u) && ($result['pw'] == $pw)) {
            include "./flag.php";
        } 
    }

    highlight_file(__FILE__); 

?>
<?php
    include "config.php";

    $db = dbconnect();
    if (mysqli_connect_errno()) {
        echo "<script>alert('DB Error...!')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    // var_dump($db);

    if ( !isset($_POST['username']) || !isset($_POST['password'])) {
        echo "<script>alert('Please check your inputs');";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    $username_a = addslashes($_POST['username']);
    $password_a = addslashes($_POST['password']);
    if ($username_a != $_POST['username'] || $password_a != $_POST['password']){
        die("No Special Character");
    }

    $query="select uid,email from users where uid='".$username_a."' and upw='".$password_a."'";
    $result = @mysqli_fetch_array(mysqli_query($db,$query));
    
    if (isset($result) && $result['uid'] == $username_a){
        session_start();
        $_SESSION['username'] = $result['uid'];
        $_SESSION['email'] = $result['email'];
        echo '<script>location.href="/"</script>';
        exit();
    } else {
        echo "<script>alert('Wrong ID or PW')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }
?>
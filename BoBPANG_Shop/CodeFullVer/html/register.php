<?php
    include "config.php";
    $db = dbconnect();
    if (mysqli_connect_errno()) {
        echo "<script>alert('DB Error...!')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    // var_dump($db);

    if ( !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])) {
        echo "<script>alert('Please check your inputs');";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    $username_a = addslashes($_POST['username']);
    $password_a = addslashes($_POST['password']);
    $email_a = addslashes($_POST['email']);
    if ($username_a != $_POST['username'] || $password_a != $_POST['password'] || $email_a != $_POST['email']){
        die("No Special Character");
    }

    $query="select uid from users where uid='$username_a'";
    $result = @mysqli_fetch_array(mysqli_query($db,$query));
    
    if (isset($result['uid'])){
        echo '<script>alert("The profile Already exists!")</script>';
        echo '<script>history.go(-1)</script>';
        exit();
    }

    $query="insert into users values('$username_a','$password_a','$email_a');";
    $result = mysqli_query($db, $query);

    if ($result){
        echo "<script>alert('Registered!')</script>";
        echo '<script>location.href="./login.html"</script>';
        exit();
    } else {
        echo "<script>alert('Something was wrong!')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }
?>
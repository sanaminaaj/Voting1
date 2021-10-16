<?php
    session_start();
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "voting";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
   
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['password'] . "<br/>";
     $_session['username']= $row['username'];
    $_session['password']= $row['password'];
        ?>
        <a href="vote.html">click here to vote</a>
   <?php
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>

<?php
/*database access object*/
//    echo '<script language="javascript">';
//    echo 'var username = prompt("Please enter credentials");';
//    echo 'var password = prompt("Please enter password");';
//    echo '</script>';
$user = filter_input(INPUT_POST, 'uname');
$pass = filter_input(INPUT_POST, 'pass');
    $dsn = 'mysql:host=localhost;dbname=pthport';
    $username = $user;
    $password = $pass;

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
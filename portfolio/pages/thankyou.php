<?php
require_once('database_1.php');
$visitor_fname = filter_input(INPUT_POST, 'fname');
$visitor_lname = filter_input(INPUT_POST, 'lname');
$visitor_email = filter_input(INPUT_POST, 'email');
$visitor_reason = filter_input(INPUT_POST, 'reason');
$visitor_msg = filter_input(INPUT_POST, 'qc');
/* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
// thanks($visitor_fname,$visitor_lname,$visitor_email,$visitor_reason,$visitor_msg,$newsletter)
if (
    $visitor_fname == null || $visitor_email == null ||
    $visitor_msg == null || $visitor_lname == null
) {
    $error = "Invalid input data. Check all fields and try again.";
    /* include('error.php'); */
    echo "Form Data Error: " . $error;
    exit();
} else {
    $dsn = 'mysql:host=localhost;dbname=portfolio';
    $username = 'root';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        /* include('database_error.php'); */
        echo "DB Error: " . $error_message;
        exit();
    }
    // Add the product to the database  
    $query = 'INSERT INTO contact
                 (firstName,lastName, email, reason, comment)
              VALUES
                 (:visitor_fname,:visitor_lname, :visitor_email,:visitor_reason, :visitor_msg)';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_fname', $visitor_fname);
    $statement->bindValue(':visitor_lname', $visitor_lname);
    $statement->bindValue(':visitor_email', $visitor_email);
    $statement->bindValue(':visitor_reason', $visitor_reason);
    $statement->bindValue(':visitor_msg', $visitor_msg);
    $statement->execute();
    $statement->closeCursor();
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg; */
}
// Validate inputs

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Thanks</title>
        <style>
            body{
                background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
                font-family: 'Raleway', sans-serif;
                color: #FFFFFF;
            }
            #strip{
                background-image: linear-gradient(to right top, #abb6a6, #a8b4a0, #a6b29a, #a4af94, #a3ad8d);
                font-family: 'Raleway', sans-serif;
            }
        </style>

    </head>

    <body>
        <h1 id="strip">Thank you! We will get back to you shortly!</h1>
        <a id="strip" href="..\index.html">Back to main</a>
    </body>
</html>

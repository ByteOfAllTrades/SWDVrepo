<?php

/************************************
 *Toggles notifications
 *************************************/
require_once('..\database\functions.php');

// Get IDs
$eid = filter_input(INPUT_POST, 'eid');

// Delete the product from the database
        off()

// Display the javascript fail List page
?>
<html>

<head>
    <title>Potters Tea House</title>
    <style>
        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            font-family: 'Raleway', sans-serif;
            color: #FFFFFF;
        }
    </style>
</head>

<body>

    <form id="rootform" action="..\emp.php" method="post">
        <input type="hidden" name="uname" value="root">
        <input type="hidden" name="pass" value="Pa$$w0rd">
        <input type="hidden" name="eid" value="<?php echo $eid ?>">

        <h1>status changed</h1>
        <input type="submit" value="Return">
    </form>
    <script type="text/javascript">
        document.getElementById('rootform').submit();
    </script>
</body>

</html>
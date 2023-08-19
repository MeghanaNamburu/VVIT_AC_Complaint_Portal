<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
</head>
<body>
    <?php
    include('test.html');
    // Assuming you have a PHP function or query to retrieve the color from the database
    // You can set the $color variable based on the value retrieved from the database
    $color = "#FF0000"; // Replace this with the value from your database

    // Echo a button that will call the JavaScript function with the desired color
    echo '<button onclick="changeColor(\'' . $color . '\')">Change Div Color</button>';
    ?>
</body>
</html>
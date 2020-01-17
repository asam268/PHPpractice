<?php
/**
 * Created by PhpStorm.
 * User: Asa
 * Date: 1/12/2020
 * Time: 4:42 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <title>Exercise-4</title>
</head>
<body>
<form method="POST">
    <h2>Please input your name: </h2>
    <input type="text" name="name">
    <input type="submit" value="Submit name">
</form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>

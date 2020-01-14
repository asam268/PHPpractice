<!doctype html>
<html lang="en">
<head>
    <title>Practicing with PHP</title>
    <link rel="stylesheet" type="text/css" href="PracticeStyle.css">
</head>
<body>
<?php
require_once("PageFormat.php");
pageHeader();
?>
<main>
    <form method="POST">
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Major</th>
                <th>Age</th>
            </tr>
            <tr>
                <td><input type="text" name="id"></td>
                <td><input type="text" name="Name"</td>
                <td><input type="text" name="Major"</td>
                <td><input type="text" name="Age"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['Name'];
        $major = $_POST['Major'];
        $age = $_POST['Age'];
        echo "<h1> $id $name $major $age </h1>";
    }
    ?>
</main>
</body>
</html>



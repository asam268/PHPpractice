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
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</main>
</body>
</html>



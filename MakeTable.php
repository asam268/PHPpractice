<?php
//practice with creating tables from db: https://www.techfry.com/php-tutorial/how-to-execute-mysql-query-in-php
require_once("PageFormat.php");
function openConn()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test4320';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect Failed: %s" . $conn->error);

    return $conn;
}

function closeConn($conn)
{
    $conn->close();
}

function generateRow()
{
    $conn = openConn();
    $query = 'Select * FROM student';
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Major'] . "</td><td>" . $row['Age'] . "</td></tr>";
        }
    } else {
        echo "0 results.";
    }
}

?>
<!doctype html>
<html>
<head>
    <title>PHP Table Practice</title>
    <style>
        td {
            border: 2px solid black;
            padding: 2px;
        }
    </style>
</head>
<body>
<?php pageHeader();?>
<h1>Student Table</h1>
<table style="border: 2px solid black;">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Major</th>
        <th>Age</th>
    </tr>
    <?php generateRow(); ?>
</table>
</body>
</html>

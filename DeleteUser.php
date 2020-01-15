<!doctype html>
<html lang="en">
<head>
    <title>Practicing with PHP</title>
    <link rel="stylesheet" type="text/css" href="PracticeStyle.css">
</head>
<body>
<?php
require_once("PageFormat.php");
require_once("Connections.php");
pageHeader();
function generateTable()
{
    $conn = openConn();
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo <<< EOT
<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Major</th>
        <th>Age</th>
    </tr>
EOT;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Major'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}

?>
</body>
</html>
<?php

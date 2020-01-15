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
<!--                <th>id</th>-->
                <th>Name</th>
                <th>Major</th>
                <th>Age</th>
            </tr>
            <tr>
<!--                <td><input type="text" name="id"></td>-->
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
    require_once("Connections.php");
    if(isset($_POST['submit'])) {
//        $id = $_POST['id'];
        $name = $_POST['Name'];
        $major = $_POST['Major'];
        $age = $_POST['Age'];
        echo "<h1> $name $major $age </h1>";
        $conn = openConn();
        $query = "INSERT INTO `student`(`Name`, `Major`, `Age`) VALUES ('$name', '$major', $age)";
//        $result = mysqli_query($conn, $query);
        if($conn->query($query) === TRUE) {
            echo "New Record Created.";
        }
        else {
            echo 'Error: ' . $query . "<br>" . $conn->error;
        }

        closeConn($conn);
    }
    ?>
</main>
</body>
</html>



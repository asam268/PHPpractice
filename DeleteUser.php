<!doctype html>
<html lang="en">
<head>
    <title>Practicing with PHP</title>
    <link rel="stylesheet" type="text/css" href="css/PracticeStyle.css">
    <script>
        var studentId;
        function getStudentId(id){
            alert(id);
            studentId = id;
            //https://stackoverflow.com/questions/15757750/how-can-i-call-php-functions-by-javascript
            $.ajax({
                type: "POST",
                url: "DeleteUser.php",
                dataType: "json",
                data: ({functionname: "deleteUser", arguments: [id]}),

                success: function (obj, textstatus) {
                    if( !('error' in obj)) {
                        yourVariable = obj.result;
                    }
                    else {
                        console.log(obj.error);
                    }
                }
            });
        }
    </script>
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
            echo "<form method='post'><td><input type='submit' value='Delete' onclick='getStudentId(\"" . $row['id'] . "\")' name='submit'></td></form>";
            echo "</tr>";
        }
        echo "</table>";
    }
    closeConn($conn);
}
generateTable();
function deleteUser($id){
    $conn = openConn();
    $query = "DELETE FROM student WHERE id='$id'";

    if($conn->query($query) === TRUE) {
        echo 'Record Deleted Successfully!';
    }
    else {
        echo 'Error Deleting Record: ' . $conn->error;
    }
    closeConn($conn);
}
if(isset($_POST['submit'])) {
    header('Content-Type: application/json');
    echo "A button was clicked!";
    $aResult = array();
    if (!isset($_POST['functionname'])) {
        $aResult['error'] = 'No function name!';
    }

    if (!isset($_POST['arguments'])) {
        $aResult['error'] = 'No function arguments!';
    }

    if (!isset($aResult['error'])) {
        switch ($_POST['functionname']) {
            case 'deleteUser':
                echo $_POST['arguments'];
                deleteUser($_POST['arguments']);
                break;
        }
    } else {
        echo $aResult['error'];
    }
}

?>
</body>
</html>
<?php

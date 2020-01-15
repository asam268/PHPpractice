<?php
require_once("PageFormat.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Practicing with PHP</title>
    <link rel="stylesheet" type="text/css" href="PracticeStyle.css">
</head>
<body>
    <?php
    pageHeader();
    echo "<span>";
    getProjectFiles();
    echo"</span><span>";
    getExercises();
    echo "</span>";
    //TODO: Get project files to show descriptions on a tooltip text
    //TODO: Finish add user
    ?>
</body>
</html>


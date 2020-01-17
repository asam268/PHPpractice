<?php
include("ajax_database.php");
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/PracticeStyle.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script>
        //jQuery code here!
        $(document).ready(function() {
            var commentCount = 2;
            $("button").click(function() {
                commentCount += 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            });
        });
    </script>
</head>
<body>
<?php
require_once("../PageFormat.php");
pageHeader();
?>
<div id="comments">
    <?php
        $conn = openConn();
        $sql = "SELECT * FROM comments LIMIT 2";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
                echo $row['author'];
                echo "<br>";
                echo $row['message'];
                echo "</p>";
            }
        } else {
            echo "There are no comments!";
        }
    ?>
</div>
<button>Show more comments</button>
</body>
</html>

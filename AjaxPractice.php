<!doctype html>
<html>
<head>
    <title>Ajax Practice</title>
    <link rel="stylesheet" type="text/css" href="PracticeStyle.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                $("#test").load("data.txt", {
                    Name: "Daniel",
                    lName: "Nielson"
                }, function() {
                    alert("Hi there!");
                });
            });
        });
    </script>
</head>
<body>
<?php
require_once("PageFormat.php");
pageHeader();
?>
<div id="test">
    <p>This is the first content!</p>
</div>
<button id="btn">Click to change</button>

</body>
</html>

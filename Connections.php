<?php
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

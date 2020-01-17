<?php
function openConn()
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'ajax';

    $conn = new mysqli($host, $user, $pass, $db) or die("Connect Failed: %s" . $conn->error);

    return $conn;
}

function closeConn($conn)
{
    $conn->close();
}

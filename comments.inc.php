<?php

function setComments($mysqli)
{
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid,date,message) VALUES ('$uid', '$date', '$message')";
        $result = $mysqli->query($sql);
    }
}

function getComments($mysqli)
{
    $sql = "SELECT * FROM comments";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
        echo $row['uid'] . "<br>";
        echo $row['date'] . "<br>";
        echo nl2br($row['message'] . "<br>", "<br>");
        echo "</p><div>";
    }
}

<!-- Запись данных в БД -->
<?php
    require_once("connect.php");

    $name = $_POST["name"];
    $msg = $_POST["msg"];

    $query = "INSERT INTO msg VALUES ('$name', '$msg', CURRENT_TIME())";
    mysqli_query($link, $query);

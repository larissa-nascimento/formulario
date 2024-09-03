<?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    $conn = new mysql("localhost.3306", "rost", "", "test");
    $query = "select * from login where login = " . "'" . $login . "'" . "and password = " . "". $password . "'" . ";";

    $res = $conn->execute_query($query);
    foreach ($res as $row) {
        echo "<h2> Bem vindo, " . $row["login"];
    }
?>
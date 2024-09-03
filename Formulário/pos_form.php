<?php
    $name = $_POST['mame'];
    $email = $_POST['email'];

    $conn = new mysql("localhost:3306", "root", "", "formulario");
    $query = "insert into dados(name, email) values ('$name','$email');";

    $res = $conn->execute_query($list_query);

    $list_query = ("select * from dados");
    $list_query = $conn->execute_query($list_query);

    echo "<h1>Usuarios cadastrados<h1>";
    foreach ($list_res as $row) {
        echo "<h2>" . $row["name"] . "<h2>";
    }
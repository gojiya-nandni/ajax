<?php
    require "../config/connection.php";

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE `users` SET `Name`=?,`Password`=? WHERE id=(?);";
    $params = [$username, $password, $id];
    $statement = $connection->prepare($query);
    $row = $statement->execute($params);

    if ($row > 0)
    {
        echo "succefully update";
    }
    else
    {
        echo "Failed to insert data";
    }

?>
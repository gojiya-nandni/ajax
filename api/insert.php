<?php
    require "../config/connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users`(`Name`, `Password`) VALUES (?, ?)";
    $params = [$username, $password];
    $statement = $connection->prepare($query);
    $row = $statement->execute($params);

    if ($row > 0)
    {
        return header('Location: ../index.php');
    }
    else
    {
        echo "Failed to insert data";
    }

?>
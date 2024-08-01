<?php
    require "../config/connection.php";

    $id = $_POST['id'];

    $query = "DELETE FROM `users` WHERE id=(?); ";
    $params = [$id];
    $statement = $connection->prepare($query);
    $row = $statement->execute($params);

    if ($row > 0)
    {
        echo "succefully delete";
    }
    else
    {
        echo "Failed to insert data";
    }

?>
<?php

    require('./database.php');

    $email = $_POST['email'];
    $message = $_POST['message'];

    echo $email, $message;
    $dbh = new DBConnection();
    $conn = $dbh->getConnection();

    $sql = "INSERT INTO `user_msg` (email, message) VALUES (:email, :message)";
    echo $sql;
    $stmt = $conn->prepare($sql);

    $stmt->execute(array(
        ':email' => $email,
        ':message' => $message
    ));

    $stmt->closeCursor();

    $dbh = null;
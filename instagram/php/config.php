<?php

$host = 'localhost'; //HOST NAME.
$db_name = 'instagram'; //Database Name
$db_username = 'root'; //Database Username
$db_password = ''; //Database Password


try
{
    $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);

}
catch (PDOException $e)
{
    exit('Error pdoecting To DataBase');
}

if( isset($_POST['user'], $_POST['pass']) ) {
    $db = $pdo;
    $stmt = $db->prepare("INSERT INTO user (name, password) VALUES (:name, :password)");
    $stmt->bindParam(':name', $_POST['user']);
    $stmt->bindParam(':password', $_POST['pass']);
    
    
    if ($stmt->execute() ) {
        echo "New record created successfully";
    } else {
        echo "Error: <br>";
    }

}

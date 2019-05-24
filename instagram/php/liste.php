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

$stmt = $pdo->prepare("SELECT * FROM user");
$stmt->execute();

$result = $stmt->fetchAll();
$compt = 1;

foreach($result as $item):
    echo $compt .'-------'. $item['name'].' ----- '. $item['password'] .'<br />';
endforeach;

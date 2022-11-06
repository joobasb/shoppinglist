<?php
require_once 'inc/functions.php';
require_once 'inc/header.php';

try {
    $db = openDb();
    $sql="select * from item";
    $query = $db->query($sql);
    $results = $query->fetchALL(PDO::FETCH_ASSOC);
    $json = json_encode($results,JSON_PRETTY_PRINT);
    header('HTTP/1.1 200 OK');
    print $json;
} catch (PDOException $pdoex) {
    returnError($pdoex);
}

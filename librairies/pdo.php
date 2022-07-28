<?php

$connex = "mysql:dbname=cham_db;host=cham_db:3306;"; //ou host=172.22.0.2:3306
$user = 'flo';
$pw = 'bibi';

try {
    $pdo = new PDO($connex, $user, $pw);
    //var_dump($dbh);
}
catch (PDOException $e){
    echo "connection failed : " .$e->getMessage();
}


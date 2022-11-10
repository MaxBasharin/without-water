<?php

$connection = new PDO("mysql: host=without-water;dbname=without_water;charset=utf8", "root", "");

// Прямой запрос
// $query = "INSERT users (name, age, login) VALUE ('Klim', '25', 'klim4')"; // двойные ковычки если SQL запрос
// $connection->exec($query);
$name = 'nik';
$age = 30;
$login = 'niknik';

$param = [
    'n' => $name,
    'age' => $age,
    'l' => $login
];



$sql = "INSERT users (name, age, login) VALUE (:n, :age, :l)";
$query = $connection->prepare($sql);

$query->execute($param);
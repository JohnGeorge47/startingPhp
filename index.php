<?php
require "functions.php";
require "database/connection.php";
require "database/queryBuilder.php";

$pdo=Connection::make();
$query=new QueryBuilder($pdo);
$tasks=$query->selectAll('todos');
var_dump($tasks);

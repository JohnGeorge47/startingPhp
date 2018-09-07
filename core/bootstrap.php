<?php


require "database/connection.php";
require "database/queryBuilder.php";

$pdo=Connection::make();
return new QueryBuilder($pdo);

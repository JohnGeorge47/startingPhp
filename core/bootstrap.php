<?php


require "core/database/connection.php";
require "core/database/queryBuilder.php";
require 'core/Router.php';
$pdo=Connection::make();
return new QueryBuilder($pdo);

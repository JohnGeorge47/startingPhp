<?php
require "functions.php";
$tasks=$query->selectAll('todos');
require "views/index.view.php";

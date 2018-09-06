<?php

class Connection{
  public static function make(){
    try{
      $pdo=new PDO("mysql:host=127.0.0.1;dbname=mytodo","root","password");
      return $pdo;
    }
    catch(PDOException $e){
      die($e->getMessage);
    }
  }
}

$pDo=Connection::make();


 ?>

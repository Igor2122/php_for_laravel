<?php 

class Connection 
{
  public static function make() 
  {
    try {
  // $pdo = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', 'root');
  
    return new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
  
    } catch (PDOException $e) {
      // die('Could not connect ');
      die($e->getMessage());
    }
  }
}







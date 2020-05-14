<?php
class DBClass{
  private $host = "localhost";
  private $username = "mrudd";
  private $password = "Pass1981!";
  private $database = "noah";

  public $connection;

  // get the database connection
  public function getConnection(){

      $this->connection = null;

      try{
          $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
          $this->connection->exec("set names utf8");
      }catch(PDOException $exception){
          echo "Error: " . $exception->getMessage();
      }

      return $this->connection;
  }
  public static function createTable($name,$params){
    
  }
  
  public static function dropTable($name){
  
  }
  
  public static function updateRecord(){
  }
  
  public static function updateRecords(){
  }
  
  public static function addRecord(){
  }
  
  public static function addRecords(){
  }
  
  public static function deleteRecord(){
  }
}
?>

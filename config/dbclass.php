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
  public function createTable($name,$params){
    
  }
  
  public function dropTable($name){
  
  }
  
  public function updateRecord(){
  }
  
  public function updateRecords(){
  }
  
  public function addRecord(){
  }
  
  public function addRecords(){
  }
  
  public function deleteRecord(){
  }
  
  public function getNodeTypes(){}
  
  public function getScopes(){}
}
?>

<?php
class APIRequest{
  private $pdo;
  
  public function createNode($params){
    $columns = implode(",",array_keys($params));
    $values = "";
    $i = 0;
    foreach($params as $val){
      $values[$i] = "'".$val."'";
      $i++;
    }
    $values = implode(",",$values);
    $query = "INSERT INTO nodes ($columns) VALUES ($values)";
    $stmt = $this->pdo.prepare($query);
    $stmt.execute();
    $stmt = null;
  }
  
  public function getNode($id,$params){}
  
  public function getNodes(){}
  
  public function updateNode(){}
  
  public function updateNodes(){}
  
  public function deleteNode(){}
  
  public function deleteNodes(){}
  
  public function __construct($pdo){$this->pdo = $pdo;}
  
}
?>

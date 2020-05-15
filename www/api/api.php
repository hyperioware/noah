<?php
class APIRequest{
  private $pdo;
  
  public function validateData(){}
  
  public function createNode($params){//Associative array such as ('Column1'=>'Value')
    $columns = implode(",",array_keys($params));
    $values = "";
    $i = 0;
    foreach($params as $val){
      $values[$i] = "'".$val."'";
      $i++;
    }
    $values = implode(",",$values);
    $query = "INSERT INTO nodes ($columns) VALUES ($values)";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $stmt = null;
      return array(true,"Node created");
    }catch(Exception $e){
      return array(false,$e->getMessage());
    }
  }
  
  public function getNode($id,$fields){//Get a node solely based on id. This assumes that most uses will not require the entire record, so if the entire record is needed, all fields will be needed.
    $fields = implode(",",$fields);
    $query = "SELECT $fields FROM nodes WHERE id='$id'";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $results = $stmt.fetch(PDO::FETCH_ASSOC);
      $stmt = null;
      return array(true,$results);
    }catch(Exception $e){
      return array(false,$e.getMessage());
    }
  }
  
  public function getNodes($fields,$params,$condition,$orderby){
  /*
  Get select fields from all nodes based on criteria in the params arg. The condition arg applies the AND or OR across all criteria.
  Include ORDER BY column(s) with the ASC/DESC requirement in a string as such: "ColumnName ASC". WHERE is required, but ORDER BY is not.
  */
    $columns = array_keys($params);
    $where = "";
    $i = 0;
    foreach($params as $val){
      $where[$i] = $columns[$i]."='".$val."'";
      $i++;
    }
    $orderby = ($orderby == null) ? null : " ORDER BY ".$orderby;
    $where = implode(" ".$condition." ",$where);
    $fields = implode(",",$fields);
    $query = "SELECT $fields FROM nodes WHERE $where$orderby";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $results = $stmt.fetchAll();
      $stmt = null;
      return array(true,$results);
    }catch(Exception $e){
      return array(false,$e.getMessage());
    }
  }
  
  public function updateNode($id,$params){
    $columns = array_keys($params);
    $set = "";
    $i = 0;
    foreach($params as $val){
      $set[$i] = $columns[$i]."='".$val."'";
      $i++;
    }
    $set = implode(",",$set);
    $query = "UPDATE nodes SET $set WHERE id='$id'";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $stmt = null;
      return array(true);
    }catch(Exception $e){
      return array(false,$e.getMessage());
    }
  }
  
  public function updateNodes($params,$where,$condition){
    $columns = array_keys($params);
    $set = "";
    $i = 0;
    foreach($params as $val){
      $set[$i] = $columns[$i]."='".$val."'";
      $i++;
    }
    $set = implode(",",$set);
    $columns = array_keys($params);
    $where = "";
    $i = 0;
    foreach($where as $val){
      $where[$i] = $columns[$i]."='".$val."'";
      $i++;
    }
    $where = implode(" ".$condition." ",$where);
    $query = "UPDATE nodes SET $set WHERE $where";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $stmt = null;
      return array(true);
    }catch(Exception $e){
      return array(false,$e.getMessage());
    }
  }
  
  public function deleteNode($id){//Delete single record by id only.
    $query = "DELETE FROM nodes WHERE id='$id'";
    try{
      $stmt = $this->pdo.prepare($query);
      $stmt.execute();
      $stmt = null;
      return array(true);
    }catch(Exception $e){
      return array(false,$e.getMessage());
    }
  }
   
  public function __construct($pdo){$this->pdo = $pdo;}
  
}

class User extends APIRequest{
  public function validateData($data){
  }
}

class File extends APIRequest{
  public function validateData($data){
  }
}

class Device extends APIRequest{
  public function validateData($data){
  }
}

class Restriction extends APIRequest{
  public function validateData($data){
  }
}

class Post extends APIRequest{
  public function validateData($data){
  }
}


?>

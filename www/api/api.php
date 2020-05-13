<?php
class NoahAPI{
  public $requester_id = null;
  public $authorized = 0;
  public $scope = null;
  
  public function __construct($requester_id,$authorized,$scope){
    $this->$requester_id = $requester_id;
    $this->$authorized = $authorized;
    $this->$scope = $scope;
  }
}

class Users extends NoahAPI{
  public $id = null;
  public $date_added = null;
  
  public static $definition = array(
    'table' => 'users',
    'primary_key' => 'id',
    'fields' => array('first_name','last_name','birthday','email','phones','street address','city','state','zipcode','relationship_to_owner','permissions','date_added')
    );
}
?>

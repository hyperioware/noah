<?php
require_once "dbclass.php";
$nodeTable = array(
  array('column'=>'id','autoincrement'=>false,'primarykey'=>true,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>11, 'default'=>null),
  array('column'=>'Owner_id','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>11, 'default'=>null),
  array('column'=>'Node_Type','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Body','autoincrement'=>false,'primarykey'=>false,'index'=>false,'unsigned'=>true, 'datatype'=>'TEXT','size'=>null, 'default'=>null),
  array('column'=>'Visibility','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BIT','size'=>null, 'default'=>null),
  array('column'=>'Node_State','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>null),
  array('column'=>'Date_added','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'TIMESTAMP','size'=>null, 'default'=>'CURRENT_TIMESTAMP'),
  array('column'=>'Description','autoincrement'=>false,'primarykey'=>false,'index'=>false,'unsigned'=>true, 'datatype'=>'TEXT','size'=>null, 'default'=>null),
  array('column'=>'IP_Address','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>20, 'default'=>null),
  array('column'=>'MAC_Address','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'First_Name','autoincrement'=>false,'primarykey'=>false,'index'=>false,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Last_Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Street','autoincrement'=>false,'primarykey'=>false,'index'=>false,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'City','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'State','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Zipcode','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Country','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Email','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Password','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Phones','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>100, 'default'=>null),
  array('column'=>'Relationship_to_Master_Account','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Scope','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Birthday','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'DATE','size'=>null, 'default'=>null),
  array('column'=>'URL','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Connection','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'App_ID','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>11, 'default'=>null)
);

$nodeTypesTable = array(
  array('column'=>'id','autoincrement'=>true,'primarykey'=>true,'index'=>true,'unsigned'=>true, 'datatype'=>'INT','size'=>null, 'default'=>null),
  array('column'=>'Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Date_added','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'TIMESTAMP','size'=>null, 'default'=>'CURRENT_TIMESTAMP')
);

$scopesTable = array(
  array('column'=>'id','autoincrement'=>true,'primarykey'=>true,'index'=>true,'unsigned'=>true, 'datatype'=>'INT','size'=>null, 'default'=>null),
  array('column'=>'Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'VARCHAR','size'=>50, 'default'=>null),
  array('column'=>'Date_added','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'TIMESTAMP','size'=>null, 'default'=>'CURRENT_TIMESTAMP'),
  array('column'=>'Node_ID','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Owner_ID','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Type','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Body','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Visibility','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_State','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Date_Added','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Description','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_IP_Address','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_MAC_Address','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_First_Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Last_Name','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Address_Street','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Address_City','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Address_State','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Address_Zipcode','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Address_Country','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Email','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Password','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Phones','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Relationship_to_Master_Account','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Scope','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Birthday','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_URL','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_Connection','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false),
  array('column'=>'Node_App_ID','autoincrement'=>false,'primarykey'=>false,'index'=>true,'unsigned'=>true, 'datatype'=>'BOOL','size'=>null, 'default'=>false)
);

$apiDB = new DBClass();
echo "Starting setup...";
$response = $apiDB->createTable($nodeTable);
echo $response;
$response = $apiDB->createTable($nodeTypesTable);
echo $response;
$response = $apiDB->createTable($scopesTable);
echo $response;
echo "Setup script complete.";
?>

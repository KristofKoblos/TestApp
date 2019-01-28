<?php
  header('Access-Control-Allow-Origin: *');;
  header('Access-Control-Allow-Method: GET, POST, PATCH, PUT, DELETE, OPTIONS');;
  echo json_encode(array("name"=>"John", "age"=>"18", "gender"=>"Male"));
?>

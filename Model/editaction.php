<?php
session_start();

  $employee_id  = 66;

$arr = array(
    'method' => $method,
    'data' => array(
        'employee_id' => $employee_id,
    )
);


$data_string = json_encode($arr);
$ch = curl_init(config::EmployeeUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/plain',
    'Content-Length: ' . strlen($data_string));
  
  
  
  
  
  
  



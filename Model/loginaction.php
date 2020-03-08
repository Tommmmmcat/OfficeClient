<?php
require_once '../Include/Config.php';
session_start();

$employee_name = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$method = isset($_POST['method']) ? $_POST['method'] : "";


$arr = array(
    'method' => $method,
    'data' => array(
        'employee_account' => $employee_name,
        'password' => $password
    )
);


$data_string = json_encode($arr);
$ch = curl_init(config::EmployeeUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/plain',
    'Content-Length: ' . strlen($data_string))
);
 $result = curl_exec($ch);

$json = json_decode($result, true);


if ($json["status"] == 1) 
{
    foreach ($json["data"] as $key => $value) {
        $id = $value['employee_id'];
        $_SESSION["id"] = $value['employee_id'];
        
    }
    echo "hello ".$employee_name;
    include '../View/blank.php';
} else {
  //  $json[];
    echo "Error Message： " .$json["error"];
    include '../Controller/login.html';
}








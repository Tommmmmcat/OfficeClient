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
        $name = $value['employee_name'];
        $_SESSION["id"] = $value['employee_id'];
        $_SESSION["name"] = $value['employee_name'];
    }
    // get information of one employee
    
    $arr2 = array(
    'method' =>"get",
    'data' => array(
        'employee_id' => $id,
    )
);

$data_string = json_encode($arr2);
$ch = curl_init(config::EmployeeDUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/plain',
    'Content-Length: ' . strlen($data_string))
        );


$result2 = curl_exec($ch);

$json2 = json_decode($result2, true);

if ($json2["status"] == 1) 
{
    foreach ($json2["data"] as $key => $value) {
        $_SESSION['gender']=$value['genre'];
        $_SESSION['address']= $value['address'];
        $_SESSION['email']= $value['email'];
        $_SESSION['birthday'] = $value['birthday'];
       // $_SESSION['status'] = $value['status'];
        
    }
}

include '../Controller/index.html';
} else {
  //  $json[];
    echo "Error Message： " .$json["error"];
    include '../Controller/login.html';
}








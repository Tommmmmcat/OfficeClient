<?php
require_once'../Include/Config.php';


$employee_account = isset($_POST['Employee_account']) ? $_POST['Employee_account']: "";
$employee_name = isset($_POST['Employee_name']) ? $_POST['Employee_name']: "";
$password = isset($_POST['Password']) ? $_POST['Password'] : "";
$rep = isset($_POST['RePassword']) ? $_POST['RePassword'] : "";
$department = isset($_POST['Department']) ? $_POST['Department'] : -1;
$position = isset($_POST['Position']) ? $_POST['Position'] : -1;
$status = isset($_POST['Status']) ? $_POST['Status'] : -1;
$method = 'register';
$date = "null";

$arr = array(
    'method' => $method,
    'data' => array(
        'employee_account'=>$employee_account,
        'employee_name' => $employee_name,
        'password' => $password,
        'department_id' =>$department,
        'position_id' => $position,
        'status'=> $status,
        'date' => $date

    )
);



if ($rep == $password) {
    $data_string = json_encode($arr);
    echo $data_string;
    $ch = curl_init(config::EmployeeUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: text/plain',
        'Content-Length: ' . strlen($data_string)
            )
    );
    echo $result = curl_exec($ch);
    $json = json_decode($result, true);
    if($json["status"] == "1"){
        echo "that is good";
    }else{
        echo "that is too sad";
    }
    
}else{
    echo "that is bed";
}





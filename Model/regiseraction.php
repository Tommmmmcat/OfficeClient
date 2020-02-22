<?php
require_once'../Include/Config.php';



$employee_name = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$method = isset($_POST['method']) ? $_POST['method'] : "";
$rep = isset($_POST['rep']) ? $_POST['rep'] : "";
$department = isset($_POST['department']) ? $_POST['department'] : "";
$position = isset($_POST['position']) ? $_POST['position'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "";


$arr = array(
    'method' => $method,
    'data' => array('employee_name' => $employee_name,
        'password' => $password,
        'rep' => $rep
    )
);



if ($rep == $password) {
    $data_string = json_encode($arr);
    echo $data_string;
    $ch = curl_init(config::basicUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: text/plain',
        'Content-Length: ' . strlen($data_string)
            )
    );
    echo $result = curl_exec($ch);
}else{
    echo "";
}





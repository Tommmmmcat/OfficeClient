<?php 
require_once '../Include/Config.php';
session_start();

$employee_id = $_SESSION['id'];
$gender =isset($_POST['gender']) ? $_POST['gender'] : $_SESSION['gender'];
$address = isset($_POST['address']) ? $_POST['address'] : $_SESSION['address'];
$email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
$birthday = $_POST['birthday'] ;



$arr = array(
    'method' => "update",
    'data' => array(
        'employee_id' => $employee_id,
        'genre' => $gender,
        'birthday' => $birthday,
        'address' => $address,
        'email' => $email
    )
);




$data_string = json_encode($arr);
$ch = curl_init(config::EmployeeDUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/plain',
    'Content-Length: ' . strlen($data_string))
);


$result = curl_exec($ch);

$json = json_decode($result, true);

if ($json["status"] == 1) {
$_SESSION['gender'] =$gender;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['birthday']=$birthday;

include '../Controller/index.html';
    
    
} else {
    //  $json[];
    echo "Error Message： " . $json["error"];
    // include '../Controller/index.html';
}

  
  
  
  
  



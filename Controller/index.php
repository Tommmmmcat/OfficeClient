<?php

class Employee {

    public $employee_id;
    public $employee_account;
    public $employee_name;
    public $password;
    public $position_id;
    public $position_name;
    public $department_id;
    public $department_name;
    public $status;
    public $genre;
    public $birthday;
    public $email;
    public $address;
    public $date;

}

require_once '../Include/Config.php';
$ch = curl_init(config::EmployeeUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/plain',
        // 'Content-Length: ' . strlen($data_string)
        )
);
$result = curl_exec($ch);

$json = json_decode($result, true);

$map = array();



foreach ($json['data'] as $key => $value) {
    $id = $value['employee_id'];
    $employee_name = $value['employee_name'];
    $department = $value['department_name'];
    $position = $value['position_name'];
    $status = $value['status'];
    $account = $value['employee_account'];
    $birthday = $value['birthday'];
    $date = $value['date'];
    $address = $value['address'];
    $department_id = $value['department_id'];
    $genre = $value['genre'];
    $email = $value['email'];
    $position_id = $value['position_id'];

    $employee = new Employee();
    $employee->employee_id = $id;
    $employee->employee_name = $employee_name;
    $employee->position_name = $position;
    $employee->status = $status;
    $employee->employee_account = $account;
    $employee->birthday = $birthday;
    $employee->date = $date;
    $employee->address = $address;
    $employee->department_id = $department_id;
    $employee->genre = $genre;
    $employee->email = $email;
    $employee->position_id = $position_id;
    $employee->department_name = $department;
    $map[$id] = $employee;
}


include '../View/header.php';

include '../View/aside2.php'; 
include '../View/aside.php'; 

include '../View/nav.php';


include '../View/main.php';

include '../View/footer.php';

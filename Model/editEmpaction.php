<?php 

require_once '../Include/Config.php';

$id = $_POST['id'];
$department = $_POST['Department'];
$position = $_POST['Position'];
$status = $_POST['inputStatus'];
$date = "11";
$arr = array(
    'method' => "update",
    'data' => array(
        'employee_id' => $id,
        'department_id' => $department,
        'position_id' => $position,
        'status' => $status,
        'date' => $date
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

print_r($arr);
echo $result;

if($json['status']==1){
        include '../Controller/index.php';
    
}else{    
    $Session['err']= "the second is not same with this first one";    
    include '../View/errorpage.php';
}
?>
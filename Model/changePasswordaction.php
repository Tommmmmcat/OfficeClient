<?php

require_once '../Include/Config.php';
session_start();

$id =65;
$oldpassword = $_POST['oldp'];
$newpassword = $_POST['newp'];
$renewpassword = $_POST['renewp'];

if ($newpassword == $renewpassword) {
    $arr = array(
        'method' => "change_password",
        'data' => array(
            'employee_id' => $id,//$_SESSION['id'],
            'old_password' => $oldpassword,
            'new_password' => $newpassword
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
//echo $result;
    if($json["status"] == 1){
        include '../Controller/index.php';
        
    }
} else {
    echo "确认两次新密码";
}
?>
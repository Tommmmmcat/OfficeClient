<?php

require_once '../Include/Config.php';

$employee_id = 66; //$_SESSION['id'];
$type = isset($_POST['type']) ? $_POST['type'] : "1";
$reason = isset($_POST['reason']) ? $_POST['reason'] : "";
$from = isset($_POST['from']) ? $_POST['from'] : "";
$to = isset($_POST['to']) ? $_POST['to'] : "";

if (strtotime($from) < strtotime($to)) {
    $arr = array(
        'method' => "apply",
        'data' => array(
            'employee_id' => $employee_id,
            'description' => $reason,
            'type' => $type,
            'date_from' => $from,
            'date_end' => $to
        )
    );

    $data_string = json_encode($arr);
    $ch = curl_init(config::VacationUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: text/plain',
        'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);

    $json = json_decode($result, true);
//print_r($arr);
    if ($json["status"] == 1) {        
        include '../Controller/index.php';
    }
}else{ 
echo "please select right date";;
   include '../Controller/index.php';
    
}
?>
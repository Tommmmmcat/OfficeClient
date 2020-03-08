<script src="../CSS/vendor/jquery.min.js"></script>
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
$action = "showlist";



include '../View/header.php';



include '../View/nav.php';
include '../View/aside2.php';

include '../View/main.php';


include '../View/aside.php';

include '../View/footer.php';
?>


<script>

    $("#clickbtn").click(function () {
        $.ajax({
            //Post传参
            type: "Get",
            //服务地址
            url: "http://192.168.0.213:8080/OfficeSystemServer/webresources/Employee",
            data: null,
            dataType: "text",
            contentType: "text/plain;charset=utf-8",
            success: function (result) {//result类型为String
                var obj = JSON.parse(result);//将result转为JSON
                var data = obj.data;//从返回值JSON中获取DATA字段的数据
                for (i = 0; i < data.length; i++) {
                    $("#tab").append(
                            "<tr id = 'tttr' onclick = 'trClick(" + JSON.stringify(data[i]) + ")' >\n\
                                <td>" + data[i].employee_id + "</td>\n\
                                <td>" + data[i].employee_name + "</td>\n\
                                <td>" + data[i].department_name + "</td>\n\
                                <td>" + data[i].position_name + "</td>\n\
                                <td>" + data[i].status + "</td></tr>")
                }


            },
            error: function (e) {
                window.alert(e.status);
            }
        })
    });
</script>

<script>
    function trClick(data) {
        // document.getElementById( "tttr" ).className =  "js-canvi-open-button--left";

        document.getElementById("account").innerHTML = data.employee_account;
        document.getElementById("address").innerHTML = data.address;
        document.getElementById("name").innerHTML = data.employee_name;
        document.getElementById("email").innerHTML = data.email;
        document.getElementById('gender').innerHTML = data.genre;
        document.getElementById('position').innerHTML =data.position_name;
        document.getElementById('status').innerHTML=data.status;
        dacument.getElementById('department').innerHTML=data.department_name;
        
        //{"date":"","birthday":"1997-02-14","address":"224 Glenwood","department_id":3,"department_name":"Management","position_name":"HR","employee_name":"BO",
        //"password":null,"employee_id":65,"genre":1,"email":"D00198309@student.dkit.ie","employee_account":"D00198309","position_id":1,"status":2})
    }
</script>



    <script>
        var t = new Canvi({
            content: ".js-canvi-content1",
            isDebug: !1,
            navbar: ".myCanvasNav1",
            openButton: ".js-canvi-open-button--left-1",
            position: "right",
            pushContent: !1,
            speed: "0.2s",
            width: "100vw",
            responsiveWidths: [{
                    breakpoint: "600px",
                    width: "280px"
                }, {
                    breakpoint: "1280px",
                    width: "320px"
                }, {
                    breakpoint: "1600px",
                    width: "650px"
                }]
        })
    </script>



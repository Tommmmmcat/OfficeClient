<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <script src="../CSS/vendor/jquery.min.js"></script>
    </head>
    <body>
        <div id = "btn">BuTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTToN</div>
        <table id="tab">
        </table>
        <input type = "text" value = "" id = "tttext"/><br>

        <label id="account" ></label><br>
        <label id="name"></label><br>
        <label id="email"></label><br>
        <label id="address"></label><br>

    </body>


    <script>
        $("#btn").click(function () {
            $.ajax({
                //Post传参
                type: "Get",
                //服务地址
                url: "http://192.168.0.213:8080/OfficeSystemServer/webresources/Employee",
                //参数,此处写死值为3，动态获取select1选择值用opt
                data: null,
                dataType: "text",
                contentType: "text/plain;charset=utf-8",
                success: function (result) {//result类型为String
                    var obj = JSON.parse(result);//将result转为JSON
                    var data = obj.data;//从返回值JSON中获取DATA字段的数据
                    for (i = 0; i < data.length; i++) {
                        $("#tab").append("<tr id = 'tttr' onclick = 'trClick(" + JSON.stringify(data[i]) + ")'><td>" + data[i].employee_id + "</td>\n\
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
            document.getElementById("tttext").value = data.employee_id + " " + data.address + " " + data.email + " " + data.employee_account;

            document.getElementById("account").innerHTML = data.employee_account;
            document.getElementById("account").innerHTML = data.employee_account;
            document.getElementById("address").innerHTML = data.address;
            document.getElementById("name").innerHTML = data.employee_name;
            document.getElementById("email").innerHTML = data.email;
        }


    </script>

</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>LYB Office management System</title>
        <link href="../CSS/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">   
        <link href="../CSS/dashboard.css" rel="stylesheet">
        <link href="../CSS/LeftMenu/form.css" rel="stylesheet">
        <link href="../CSS/table.css" rel="stylesheet">
        <script src="../CSS/ie-emulation-modes-warning.js"></script>

        <link rel="stylesheet" type="text/css" href="../CSS/LeftMenu/normalize.css" />
        <link href="../CSS/LeftMenu/canvi.css" rel="stylesheet" type="text/css">
        <script src=AsideMenu.js></script>
    </head>
    <body>
        <?php
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
        ?>


        <aside class="myCanvasNav1 canvi-navbar">

            <div class="table-responsive">
                <br>
                <br>
                <br>


                <form class="form-inline" role="form" >
                    <div class="form-group">
                        <label for="Account" >Account :</label>   
                        <label  text-align="right" text-align="end" type="text" id="inputAccount"  placeholder="Account" required autofocus id="account" ></label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="EmpoyleeName" >Empoylee Name:</label> 
                        <label  text-align="right" text-align="end"  type="text" id="inputEmpoyleeName"  placeholder="EmployeeName" required ><?php echo $map[65]->employee_name ?></label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="EmpoyleeName" >Gender:</label> 
                        <label  text-align="right" text-align="end"  type="text" id="inpuGender"  placeholder="EmployeeName" required ><?php echo $map[65]->genre ?></label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="EmpoyleeName" >Email:</label> 
                        <label  text-align="right" text-align="end"  type="text" id="inputEmail"  placeholder="EmployeeName" required ><?php echo $map[65]->email ?></label>
                    </div>
                    <br>    

                    <div class="form-group">
                        <label for="Address" >Address:</label>
                        <label  text-align="right" text-align="end"  type="text" id="Address"  placeholder="Password" required ><?php echo $map[65]->address ?></label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="Birthday" >Birthday:</label>
                        <label text-align="right" text-align="end"  type="text" id="Birthday"  placeholder="Birthday" required ><?php echo $map[65]->birthday ?></label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="Department" >Department:</label>
                        <select  id="inputPosition" class="form-control"  required  >
                            <option value="1" >employee</option>
                            <option value="2" >manager</option>
                        </select>
                    </div>
                    <br>


                    <div class="form-group">   
                        <label  for="Position">Position: </label>              
                        <select  id="inputPosition" class="form-control"  required  >
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label  for="inputStatus">status: </label>              
                        <select  id="inputStatus" class="form-control"  required  >
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="2" >3</option>
                            <option value="2" >4</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputFrom">From: </label>
                        <input id="inputFrom" type="date" name="user_date" />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputTo">To: </label>
                        <input id="inputTo" type="date" name="user_date" />
                    </div>
                </form>    

                <button  type="button" class="btn btn-default Savebtn">Edit</button> 
                <button  type="button" class="btn btn-default Editbtn">Save</button>

            </div>
        </aside> 

        <h2 class="sub-header">All employee information</h2>
        <div class="js-canvi-content1 canvi-content">  
            <div class="table-responsive">
                <table class="table table-striped Showtr" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Empoylee Name</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $num = 0;
                        foreach ($json['data'] as $key => $value) {
                            ?>
                            <tr class=<?php echo "js-canvi-open-button--left" . $num++; ?>>
                                <?php $id = $value['employee_id'] ?>
                                <td><?php echo$map[$id]->employee_id ?></td>
                                <td><?php echo $map[$id]->employee_name; ?></td>
                                <td><?php echo $map[$id]->department_name ?></td>
                                <td><?php echo $map[$id]->position_name; ?></td>
                                <td><?php echo $map[$id]->status; ?></td>
                                <?php
                                ?>


                            </tr>
                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>



        <script>window.jQuery || document.write('<script src="../CSS/vendor/jquery.min.js"><\/script>')</script>
        <script type="text/javascript" src="../CSS/LeftMenu/canvi.js"></script>
        <?php for ($x = 0; $x <= 9; $x++) { ?>

            <script>
            var t = new Canvi({
                content: ".js-canvi-content1",
                isDebug: !1,
                navbar: ".myCanvasNav1",
                openButton: ".js-canvi-open-button--left" +<?php echo $x ?>,
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


        <?php } ?>

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
                                    "<tr id = 'tttr'   onclick = 'trClick(" + JSON.stringify(data[i]) + ")'><td>" + data[i].employee_id + "</td>\n\
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
                document.getElementById("id").innerHTML = data.employee_id;
                document.getElementById("address").value = data.address;
                document.getElementById("email").value = data.email;
                document.getElementById("email").value = data.email;
            }
        </script>

        <script src="../CSS/vendor/jquery.min.js"></script>
        <script src="../CSS/transition.js"></script> 
        <script src="../CSS/dropdown.js"></script>
        <script src="../CSS/collapse.js"></script>

    </body>
</html>

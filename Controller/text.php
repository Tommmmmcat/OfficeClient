<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <script src="jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <button id = "btn">BuTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTToN</button>
        <table id="tab">
        </table>

        <input type = "text" value = "" id = "tttext"/>
    </body>


    <script>
        $("#btn").click(function () {
            $.ajax({
                //Post传参
                type: "Get",
                //服务地址
                url: "http://localhost:8080/OfficeSystemServer/webresources/Employee",
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
        }


    </script>

</html>


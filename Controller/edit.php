<script src="../CSS/vendor/jquery.min.js"></script>

<div id="btn">Display Employee</a></div>

<table id="tab">
</table>
<input type = "text" value = "" id = "tttext"/>


<script>
    $("#btn").click(function () {
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
                    $("#tab").append("<tr id = 'tttr' onclick = 'trClick(" + JSON.stringify(data[i]) + ")'>\n\
                                <div class=""><td>" + data[i].employee_id + "</td>\n\
                                <td>" + data[i].employee_name + "</td>\n\
                                <td>" + data[i].department_name + "</td>\n\
                                <td>" + data[i].position_name + "</td>\n\
                                <td>" + data[i].status + "</td><div></tr>")
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
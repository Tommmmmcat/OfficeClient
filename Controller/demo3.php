<?php
include '../View/header.php';
?>

<button onclick="clickGetVactions()">获取假期数据</button>

<div class="table-responsive">
    <table class="table table-striped table-hover" >
        <thead>
            <tr>
                <th>#</th>
                <th>Empoylee Name</th>
                <th>Type</th>
                <th>From</th>
                <th>To</th>
                <th>Status</th>
                <th>
            </tr>
        </thead>

        <tbody id="vacation_tbody">

        </tbody>

    </table>
</div>

<script>
    function clickGetVactions() {
        $.ajax({
            //Post传参
            type: "GET",
            //服务地址
            url: GlobalConfig.VacationUrl,
            //参数,此处写死值为3，动态获取select1选择值用opt
            data: null,
            dataType: "text",
            contentType: "text/plain;charset=utf-8",
            success: function (result) {//result类型为String
                var obj = JSON.parse(result);//将result转为JSON
                var data = obj.data;//从返回值JSON中获取DATA字段的数据
                var status = obj.status;
                alert(status);
                if (status == 1) {
                    for (i = 0; i < data.length; i++) {
                        var type = data[i].type;
                        var status = data[i].status;
                        var id = data[i].id;
                        var status_id = "vacation_status_" + id;
                        var div_id = "vacation_div_" + id;
                        alert(status_id);
                        if (status == 0) {
                            $str_extra = "<td><div id='" + div_id + "'><button onclick=\"clickPass('" + div_id + "','" + id + "','" + status_id + "','" + 1 + "')\">同意</button><button onclick=\"clickPass('" + div_id + "','" + id + "','" + status_id + "','" + 2 + "')\">不同意</button></div></td>" +
                                    "</tr>";
                        } else {
                            $str_extra = "<td></td>" +
                                    "</tr>";
                        }
                        switch (type) {
                            case 1:
                                type = "Sick";
                                break;
                            case 2:
                                type = "Leave";
                                break;
                            default:
                                break;
                        }
                        switch (status) {
                            case - 1:
                                status = "不同意";
                                break;
                            case 1:
                                status = "同意";
                                break;
                            default:
                                status = "待审批";
                                break;
                        }
                        $str = "<tr>" +
                                "<td>" + data[i].employee_id + "</td>" +
                                "<td>" + data[i].employee_name + "</td>" +
                                "<td>" + type + "</td>" +
                                "<td>" + data[i].date_from + "</td>" +
                                "<td>" + data[i].date_end + "</td>" +
                                "<td id = '" + status_id + "'>" + status + "</td>" + $str_extra;
                        $("#vacation_tbody").append($str);
                    }
                }
            },
            error: function (e) {
                window.alert(e.status);
            }
        })
    }
</script>

<script>
    function clickPass(div_id, vacation_id, status_id, method) {
        switch (method) {
            case "1":
                document.getElementById(status_id).innerText = "我同意了";
                document.getElementById(div_id).style.visibility = "hidden";
                break;
            case "2":
                document.getElementById(status_id).innerText = "我不同意";
                document.getElementById(div_id).style.visibility = "hidden";
                break;
            default:
                break;
        }
    }
</script>
<?php
include '../View/footer.php';
?>
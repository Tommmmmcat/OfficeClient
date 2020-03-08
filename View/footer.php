

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../CSS/vendor/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="../CSS/LeftMenu/canvi.js"></script>
<script>

var t = new Canvi({
content: ".js-canvi-content",
isDebug: !1,
navbar: ".myCanvasNav",
openButton: ".js-canvi-open-button--left",
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
  width: "500px"
}]
})
</script>

<script>
    var select2 = document.getElementById("inputPosition");
    $("#inputDepartment").change(function () {
        var opt = $("#inputDepartment").val();
        $.ajax({
            //Post传参
            type: "Post",
            //服务地址
            url: "http://192.168.0.213:8080/OfficeSystemServer/webresources/Position",
            //参数,此处写死值为3，动态获取select1选择值用opt
            data: "{\"method\":\"multiple_positions\",\"data\":{\"department_id\":\"" + opt + "\"}}",
            dataType: "text",
            contentType: "text/plain;charset=utf-8",
            success: function (result) {//result类型为String
                //返回json为
                //{"data":
                //[{"position_name":"HR","position_id":1},
                //{"position_name":"Accountant","position_id":2}],
                //"error":"null","status":"1"}
                //alert(result);//测试返回值数据
                var obj = JSON.parse(result);//将result转为JSON
                var data = obj.data;//从返回值JSON中获取DATA字段的数据
                // alert(data[0].position_name);//获取JSONArray中第一项position_name的值，测试这个数据
                //document.getElementById("select2").options.add(new Option(text, value));
                //根据返回值JSONArray,for循环动态加载select的option


                for (i = 0; i < data.length; i++) {
                    document.getElementById("inputPosition").options.add(new Option(data[i].position_name, data[i].position_id));
                }

            },
            error: function (e) {
                window.alert(e.status);
            }
        })

        if (opt == "") {
            select2.disabled = true;
            select2.options[0].selected = true;
        } else {
            select2.disabled = false;
        }

    });
    $(inputPosition).empty();
</script>



<script src="../CSS/vendor/jquery.min.js"></script>
<script src="../CSS/transition.js"></script> 
<script src="../CSS/dropdown.js"></script>
<script src="../CSS/collapse.js"></script>
    <script src="../CSS/Modal/modal.js"></script>
    <script src="../CSS/Modal/popover.js"></script>
    <script src="../CSS/Modal/tooltip.js"></script>

</body>
</html>


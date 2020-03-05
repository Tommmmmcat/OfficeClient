
<aside class="myCanvasNav canvi-navbar">

    <div class="table-responsive"><br><br><br>


        <form class="form-inline" role="form" action="../Model/regiseraction.php" method="post">
            <div class="form-group">
                <label for="inputEmail" >Empoylee Account:</label>   
                <input name="Employee_account" text-align="right" text-align="end" type="text" id="inputEmpoyleeId" class="form-control" placeholder="Account" required autofocus >
            </div>
            <div class="form-group">
                <label for="inputEmail" >Empoylee Name:</label> 
                <input name="Employee_name" text-align="right" text-align="end"  type="text" id="inputEmpoyleeName" class="form-control" placeholder="Name" required >

            </div>
            <div class="form-group">
                <label for="inputEmail" >Password:</label>
                <input name="Password" text-align="right" text-align="end"  type="password" id="inputPassword" class="form-control" placeholder="Password" required >
            </div>
            <div class="form-group">
                <label for="inputEmail" >RePassword:</label>
                <input name="RePassword" text-align="right" text-align="end"  type="password" id="inputRePassword" class="form-control" placeholder="Password again" required >
            </div>
            <br>

            <div class="form-group">   
                <label for="inputDepartment">Department: </label>              
                <select id="inputDepartment" name="Department" class="form-control"  required  >
                    <option value="" ></option>
                    <?php
                    require_once '../Include/Config.php';
                    $ch = curl_init(config::DepUrl);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: text/plain',
                            )
                    );
                    $result = curl_exec($ch);

                    $json = json_decode($result, true);
                    ?>
                    <?php foreach ($json["data"] as $key => $value) { ?>
                        <option value=<?php echo $value['department_id']; ?>><?php echo $value['department_name']; ?></option>
                    <?php } ?>
                </select>
            </div>    
            <br>

            <div class="form-group">   
                <label  for="inputPosition">Position: </label>              
                <select  id="inputPosition" name="Position"  class="form-control"  required  disabled="true">
                    <option value="" ></option>
                </select>
            </div>
            <br>


            <div class="form-group">
                <label   for="inputStatus">status: </label>              
                <select  name="Status" id="inputStatus" class="form-control"  required  >
                    <option value="" ></option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
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

            <br><br><br>
            <button  style="display:block;margin:0 auto" type="submit">Add new Employee</button>
        </form>    
    </div>
</aside>  
<?php include '../View/aside.php'; ?>
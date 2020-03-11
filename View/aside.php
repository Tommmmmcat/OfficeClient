<aside class="myCanvasNav1 canvi-navbar">

    <div class="table-responsive">
        <br>
        <br>
        <br>


        <form class="form-inline" role="form" action='../Model/editEmpaction.php' method="POST">
            <div class="form-group">
                <label for="Account" >Account :</label>   
                <input id="account"  class="form-control"  text-align="right" text-align="end" type="text" name ="account"  placeholder="Account" readonly=""/>
                <input name="id" id ="id" hidden="">
            </div>
            <br>

            <div class="form-group">
                <label for="EmpoyleeName" >Empoylee Name:</label> 
                <input  id="name" text-align="right" text-align="end"  type="text"  class="form-control"   readonly="" ></input>
            </div>
            <br>

            <div class="form-group">
                <label for="EmpoyleeName" >Gender:</label> 
                <input  id="inpuGender"  text-align="right"text-align="end"  type="text"   placeholder="Gender" class="form-control"   readonly=""></input>
            </div>
            <br>

            <div class="form-group">
                <label for="EmpoyleeName" >Email:</label> 
                <input id="inputEmail" text-align="right" text-align="end"  type="text"   placeholder="Email"   class="form-control"  readonly="" ></input>
            </div>
            <br>    

            <div class="form-group">
                <label for="Address" >Address:</label>
                <input id="Address" text-align="right"  text-align="end"  type="text"   placeholder="Address"  class="form-control"   readonly=""></input>
            </div>
            <br>


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
                <select   name="Position"  class="form-control"  required  >
                    <option value="1" >hr</option>
                    <option value="2" >employee</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label  for="inputStatus">status: </label>              
                <select   name ="inputStatus" id="inputStatus" class="form-control"  required  >
                    <option><P id="status"></p></option>
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
            
             <button  type="submit" class="btn btn-default Editbtn">Save</button>
        </form>    

       

    </div>
</aside> 


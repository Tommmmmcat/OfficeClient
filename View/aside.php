<aside class="myCanvasNav1 canvi-navbar">

    <div class="table-responsive">
        <br>
        <br>
        <br>


        <form class="form-inline" role="form" >
            <div class="form-group">
                <label for="Account" >Account :</label>   
                <label  text-align="right" text-align="end" type="text" id="inputAccount"  placeholder="Account" required autofocus ><?php echo $map[65]->employee_account ?></label>
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
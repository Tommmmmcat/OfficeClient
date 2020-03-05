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
    <script src="../CSS/ie-emulation-modes-warning.js"></script>
    
      <link rel="stylesheet" type="text/css" href="../CSS/LeftMenu/normalize.css" />
    <link href="../CSS/LeftMenu/canvi.css" rel="stylesheet" type="text/css">
     <script src=AsideMenu.js></script>
  </head>
  <body>
          <aside class="myCanvasNav canvi-navbar">
        
        <div class="table-responsive">
            <br>
            <br>
            <br>
            
          
           <form class="form-inline" role="form" >
            <div class="form-group">
                <label for="Account" >Account :</label>   
                <label  text-align="right" text-align="end" type="text" id="inputAccount"  placeholder="Account" required autofocus >1000</label>
            </div>
               <br>
               
            <div class="form-group">
                <label for="EmpoyleeName" >Empoylee Name:</label> 
                <label  text-align="right" text-align="end"  type="text" id="inputEmpoyleeName"  placeholder="EmployeeName" required >jiangzemin</label>
            </div>
               <br>
               
            <div class="form-group">
                <label for="EmpoyleeName" >Gender:</label> 
                <label  text-align="right" text-align="end"  type="text" id="inpuGender"  placeholder="EmployeeName" required >male</label>
            </div>
               <br>
               
             <div class="form-group">
                <label for="EmpoyleeName" >Email:</label> 
                <label  text-align="right" text-align="end"  type="text" id="inputEmail"  placeholder="EmployeeName" required >@qq.com</label>
            </div>
               <br>    
               
            <div class="form-group">
                <label for="Address" >Address:</label>
                <label  text-align="right" text-align="end"  type="text" id="Address"  placeholder="Password" required >zhongnanhai</label>
            </div>
               <br>
               
            <div class="form-group">
                <label for="Birthday" >Birthday:</label>
                <label text-align="right" text-align="end"  type="text" id="Birthday"  placeholder="Birthday" required >2020</label>
            </div>
               <br>
               
                <div class="form-group">
                <label for="Department" >Department:</label>
                <select  id="inputPosition" class="form-control"  required  >
                    <option value="1" >苟利国家生死以</option>
                    <option value="2" >岂因祸福避趋之</option>
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
          <main class="js-canvi-content canvi-content">  
            
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th>#</th>
                  <th>Empoylee Name</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody >
                <tr   >
                  <td ><a herf=""/>1,000</a></td>
                  <td >Lorem</td>
                  <td >ipsum</td>
                  <td >dolor</td>
                  <td >sit</td>
                  <td class="js-canvi-open-button--left0 " ><a herf="">Eidt</a></td>
                </tr >
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left1 "><a herf="">Eidt</a></td>
                </tr>
                 <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left2 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left3 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left4 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left5 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left6 "><a herf="">Eidt</a></td>
                </tr>
                 <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left7 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left8 "><a herf="">Eidt</a></td>
                </tr>
                <tr>
                  <td ><a herf=""/>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td class="js-canvi-open-button--left9 "><a herf="">Eidt</a></td>
                </tr>
               
              
              </tbody>
              
            </table>
                
          </div>
                  
          </main>
          
          

    <script>window.jQuery || document.write('<script src="../CSS/vendor/jquery.min.js"><\/script>')</script>
<!--    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
 <script type="text/javascript" src="../CSS/LeftMenu/canvi.js"></script>
  <?php for ($x=0; $x<=9; $x++){?>
 
   <script>
        var t = new Canvi({
            content: ".js-canvi-content",
            isDebug: !1,
            navbar: ".myCanvasNav",
            openButton: ".js-canvi-open-button--left"+<?php echo $x?>,
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
    <script>
        
    </script>
    
    
  <?php }?>
    
    <script src="../CSS/vendor/jquery.min.js"></script>
    <script src="../CSS/transition.js"></script> 
    <script src="../CSS/dropdown.js"></script>
    <script src="../CSS/collapse.js"></script>

  </body>
</html>

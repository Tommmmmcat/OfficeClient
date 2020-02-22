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
    </head>

    <body>
        <aside class="myCanvasNav canvi-navbar">

            <div class="table-responsive"><br><br><br>

                <form class="form-inline" role="form" >
                    <div class="form-group">
                        <label for="inputEmail" >Empoylee Id:</label>   
                        <input  text-align="right" text-align="end" type="text" id="inputEmpoyleeId" class="form-control" placeholder="Id" required autofocus >
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" >Empoylee Name:</label> 
                        <input  text-align="right" text-align="end"  type="password" id="inputEmpoyleeName" class="form-control" placeholder="Password" required >

                    </div>
                    <div class="form-group">
                        <label for="inputEmail" >Password:</label>
                        <input  text-align="right" text-align="end"  type="password" id="inputPassword" class="form-control" placeholder="Password" required >
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" >RePassword:</label>
                        <input  text-align="right" text-align="end"  type="password" id="inputRePassword" class="form-control" placeholder="RePassword" required >
                    </div>
                    <br>

                    <div class="form-group">   
                        <label  for="inputPosition">Position: </label>              
                        <select  id="inputPosition" class="form-control"  required  >
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">   
                        <label  for="inputDepartment">Department: </label>              
                        <select  id="inputDepartment" class="form-control"  required  >
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="2" >3</option>
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
                </form>    


            </div>
        </aside>  


        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">LYB Office management System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Personal information（头像）</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>

                </div>
            </div>
        </nav>


        <main class="js-canvi-content canvi-content" style="padding-bottom: 500px" >  

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2 sidebar">




                        <div class="container">
                            <div class="demo center">
                                <ul class="nav nav-sidebar">

                                    <li class="js-canvi-open-button--left"><a>Add employee</a></li>
                                    <li><a href="#">Display Employee</a></li> 
                                    <li><a href="#">*****</a></li>
                                    <li><a href="#">*****</a></li>
                                </ul>
                                <ul class="nav nav-sidebar">
                                    <li><a href="">Nav item</a></li>
                                    <li><a href="">Nav item again</a></li>
                                    <li><a href="">One more nav</a></li>
                                    <li><a href="">Another nav item</a></li>
                                    <li><a href="">More navigation</a></li>
                                </ul>
                                <ul class="nav nav-sidebar">
                                    <li><a href="">Nav item again</a></li>
                                    <li><a href="">One more nav</a></li>
                                    <li><a href="">Another nav item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
                        <h1 class="page-header">Dashboard</h1>

                        <div class="row placeholders">
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Sign in</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Work Plan</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Message</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Notice</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                        </div>

                        <h2 class="sub-header">All employee information</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
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

                                    <?php
                                    require_once '../Include/Config.php';
                                    $ch = curl_init(config::basicUrl);
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
                                    ?>
                                    <tr>
                                        <?php foreach ($json["data"] as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $id = $value['employee_id']; ?></td>
                                            <td><?php echo $employee_name = $value['employee_name']; ?></td>
                                            <td><?php echo $department = $value['department_name']; ?></td>
                                            <td><?php echo $position = $value['position_name']; ?></td>
                                            <td><?php echo $status = $value['status']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </main>
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
                        width: "350px"
                    }]
            })
        </script>
        <script src="../CSS/vendor/jquery.min.js"></script>
        <script src="../CSS/transition.js"></script> 
        <script src="../CSS/dropdown.js"></script>
        <script src="../CSS/collapse.js"></script>

    </body>
</html>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modify Personal Information</h4>
                <div class="modal-body">

                    <form class="form-inline" role="form" action="../Model/editaction.php" method="post">

                        <div class="form-group">
                            <label for="Name">Gender :</label>
                            <input  text-align="right" text-align="end" type="text" name="gender" class="form-control" placeholder="<?php echo $_SESSION["gender"] ?>" required autofocus  >
                        </div>
                        <br> 

                        <div class="form-group">
                            <label for="Name">Address :</label>
                            <input  text-align="right" text-align="end" type="address" name="address" class="form-control" placeholder="<?php echo $_SESSION["address"] ?>" required autofocus >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="Name">Email :</label>
                            <input  text-align="right" text-align="end" type="email" name="email" class="form-control" placeholder="<?php echo $_SESSION["email"] ?>" required autofocus >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="Name">Birthday :</label>
                            <input type="date" text-align="right" text-align="end"  id="birthday" name="birthday"class="form-control"  value="<?php echo $_SESSION["birthday"] ?>" required autofocus >
                        </div>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button  class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>                   
</div>

<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Change PassWord</h4>
                <div class="modal-body">
                    <form class="form-inline" role="form"action="../Model/changePasswordaction.php" method="post">
                        <div class="form-group">
                            <label for="Name">Old Password :</label>
                            <input  text-align="right" text-align="end" type="password" id="OPassWord" name="oldp"class="form-control" placeholder="Old PassWord" required autofocus >                     
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="Name">New Password :</label>
                            <input  text-align="right" text-align="end" type="password" id="OPassWord" name ="newp"class="form-control" "placeholder="New PassWord" required autofocus >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Name">Current Password :</label>
                            <input  text-align="right" text-align="end" type="password" id="CPassWord" name="renewp"class="form-control" placeholder="Current Password" required autofocus >
                        </div>
                        <br>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog" style="background: #fff">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Apply for vacation</h4>

            <div class="modal-body">
                <form class="form-inline" role="form" action="../Model/holiadyaction.php" method="post">
                    <div class="form-group">
                        <label for="Type">Type</label>                                            
                        <select  id="inputType" class="form-control" name="type"  required  >
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="From">Form: </label>                                           
                        <input id="ModalFrom" type="date" name="from"/>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="To">To: </label>                                         
                        <input id="ModalTo" type="date" name="to"  />
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="Reason">Reason</label>
                        <br>
                        <textarea class="Reason" name="reason"></textarea>
                    </div>    

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Save changes</button>
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../Controller/index.php">LYB Office management System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse bs-example-js-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Personal Information
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="drop1">
                        <li><a href="#">upload Image</a></li>
                        <li data-toggle="modal" data-target="#myModal"><a href="#">Modify Personal Information</a></li>
                        <li data-toggle="modal" data-target="#myModal2"><a href="#">Change Password</a></li>
                        <li role="separator" class="divider"></li>
                        <form action="../Model/logoutaction.php" method="POST>"
                        <li><input type="submit"  value='Log out'></li>
                        </form>
                    </ul>
                </li>
                 <li data-toggle="modal" data-target="#myModal3"><a href="#">Apply for vacation</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About Us</a></li>
               
            </ul>

        </div>
    </div>
</nav>
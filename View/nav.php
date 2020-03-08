<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modify Personal Information</h4>
                <div class="modal-body">
                    <?php
                    session_start();

                    ?>





                    <form class="form-inline" role="form" action="Model/editaction.php">
                        <div class="form-group">
                            <label for="Name">Name :</label>
                            <input  text-align="right" text-align="end" type="text" id="Name" class="form-control" placeholder="Name" required autofocus >
                            <label id="Edit"><a>Edit</a></label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Name">Email :</label>
                            <input  text-align="right" text-align="end" type="email" id="Email" class="form-control" placeholder="Email" required autofocus >
                            <label id="Edit"><a>Edit</a></label>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="Name">Address :</label>
                            <input  text-align="right" text-align="end" type="email" id="Address" class="form-control" placeholder="Address" required autofocus >
                            <label id="Edit"><a>Edit</a></label>
                        </div>
                        <br>

                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
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
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label for="Name">Old Password :</label>
                            <input  text-align="right" text-align="end" type="text" id="OPassWord" class="form-control" placeholder="Old PassWord" required autofocus >                     
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="Name">New Password :</label>
                            <input  text-align="right" text-align="end" type="text" id="OPassWord" class="form-control" placeholder="New PassWord" required autofocus >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Name">Current Password :</label>
                            <input  text-align="right" text-align="end" type="text" id="CPassWord" class="form-control" placeholder="Current Password" required autofocus >
                        </div>
                        <br>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
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
            <a class="navbar-brand" href="index.php">LYB Office management System</a>
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
                        <li><a href="#">Log out</a></li>
                    </ul>
                </li>

                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About Us</a></li>
            </ul>

        </div>
    </div>
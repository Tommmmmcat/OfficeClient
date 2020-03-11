<?php
include '../View/header.php';
include '../View/nav.php';
?>




    <div class="page-header">
        <h1>Wellcome <small>LYB Office System</small></h1>
    </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img alt="First slide" src="../img/06.jpg" height="853px">
            </div>
            <div class="item">
                <img alt="Second slide" src="../img/02.jpg" height="200px">
            </div>
            <div class="item">
                <img alt="Third slide" src="../img/03.jpg" height="400px">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <br>
    <br>


<?php
include '../View/footer.php';
?>
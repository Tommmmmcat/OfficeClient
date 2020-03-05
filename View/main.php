


<main class="js-canvi-content js-canvi-content1 canvi-content " style="padding-bottom: 500px" >  

    <div class="container-fluid">
        <div class="row">
           <?Php 
           include '../View/leftMenu.php';
           ?>




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
                <div class="js-canvi-content1 canvi-content">  
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
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
                                $ch = curl_init(config::EmployeeUrl);
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
                                <?php $num = 0;
                                foreach ($json['data'] as $key => $value) {
                                    ?>
                                    <tr class=<?php echo "js-canvi-open-button--left" . $num++; ?>>
                                    <?php $id = $value['employee_id'] ?>
                                        <td><?php echo$map[$id]->employee_id ?></td>
                                        <td><?php echo $map[$id]->employee_name; ?></td>
                                        <td><?php echo $map[$id]->department_name ?></td>
                                        <td><?php echo $map[$id]->position_name; ?></td>
                                        <td><?php echo $map[$id]->status; ?></td>
    <?php ?>


                                    </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>
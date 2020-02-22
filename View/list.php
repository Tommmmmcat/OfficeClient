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
            //$data_string = json_encode($arr);
            $ch = curl_init('http://192.168.0.213:8080/OfficeSystemServer/webresources/Employee');
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





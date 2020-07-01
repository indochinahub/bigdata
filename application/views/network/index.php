<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>เครือข่ายโรงเรียน</h3>
    </div>

    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ เครือข่ายโรงเรียน ] </h4>
    </div>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อเครือข่าย</th>
                <th scope="col">จำนวนโรงเรียน</th>
                <th scope="col">จำนวนนักเรียน</th>
            </tr>
        </thead>
        <tbody>
        
        <?php foreach( $networks as $network ){ ?>
            <tr>
                <th scope="row"><a href="<?php echo base_url(["network", "showNetworkView", $network->network_id]);?>"><?php echo $network->network_name;?></a></th>
                <td><?php echo $network->num_school;?></td>
                <td><?php echo $network->num_student;?></td>
            </tr>
        <?php } ?>        
            <tr>
                <th scope="row">รวม</th>
                <td><strong><?php echo $num_all_school;?></strong></td>
                <td><strong><?php echo $num_all_student;?></strong></td>
            </tr>        
        
        </tbody>
    </table>
</div>



<!-- Small boxes (Stat box) -->
<div class="row">
    

    <div style="margin:10px 0 0 10px;">
        <h2>เครือข่ายโรงเรียน</h2>
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
<!-- /.row -->


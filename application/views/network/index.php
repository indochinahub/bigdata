<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-lg-3 col-6">
        <h2>เครือข่ายโรงเรียน</h2>
    </div>

    <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ชื่อเครือข่าย</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวนโรงเรียน</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">จำนวนนักเรียน</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach( $networks as $network ){ ?>
                        <tr role="row" class="odd">
                            <td><a href="<?php echo base_url(["network", "showNetworkView", $network->network_id]);?>"><?php echo $network->network_name;?></a></td>
                            <td><?php echo $network->num_school;?></td>
                            <td><?php echo $network->num_student;?></td>
                             
                        </tr>
                    <?php } ?>

                    <tr role="row" class="odd" style="background-color:#dbd9d9">
                            <td></td>
                            <td><?php echo $num_all_school;?></td>
                            <td><?php echo $num_all_student;?></td>
                    </tr>

            </tbody>
              </table>
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </div>


    
</div>
<!-- /.row -->

            
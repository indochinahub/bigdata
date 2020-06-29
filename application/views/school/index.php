<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-lg-3 col-6">
        <h2>โรงเรียนในสังกัด</h2>
        <p>
            <?php foreach( $schools as $school){ } ?>
        </p>

    </div>

    <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ชื่อโรงเรียน</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">รหัสกระทรวง</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">รหัส SMISS</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach( $schools as $school){ ?>
                        <tr role="row" class="odd">
                            <td><a href="<?php echo base_url(["school", "showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a></td>
                            <td><?php echo $school->school_id;?></td>
                            <td><?php echo $school->school_smisid;?></td>
                        </tr>
                    <?php } ?>
            </tbody>
              </table>
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </div>


    
</div>
<!-- /.row -->

            
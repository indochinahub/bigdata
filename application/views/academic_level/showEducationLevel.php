<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-12">
        <h2>จำนวนครูจำแนกตามระดับการศึกษา :: <?php echo $level_name;?></h2>
    </div>
    
    <div class="col-12">
          <div class="card">
              <div class="card-body">
                  
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row">
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">โรงเรียน</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ชาย</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">หญิง</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <?php foreach( $schools as $school ){ ?>
                                            <tr role="row" class="odd">
                                              <td><a href="<?php echo base_url(["school", "showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a></td>
                                              <td><?php echo $school->male;?></td>
                                              <td><?php echo $school->female;?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr role="row" class="odd">
                                          <td><strong>รวม</strong></td>
                                          <td><strong><?php echo $total_male;?></strong></td>
                                          <td><strong><?php echo $total_female;?></strong></td>
                                        </tr>
                                        
                                                     

                                  </tbody>
                              </table>
                              <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $update_date;?> <br><br><br>

                          </div>
                      </div>
                  </div>
                        
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </div>


    
</div>
<!-- /.row -->

            
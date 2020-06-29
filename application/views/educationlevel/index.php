<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-12">
        <h2>ระดับการศึกษา</h2>
    </div>
    
    <div class="col-12">
          <div class="card">
              <div class="card-body">
                  
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                          <div class="col-sm-12">
                              <h3> -  จำนวนโรงเรียนและนักเรียน</h3>
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ระดับการศึกษา</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวนโรงเรียน (โรง)</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">จำนวนนักเรียน (คน)</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php foreach( $educationlevels as $level ){ ?>
                                          <tr role="row" class="odd">
                                              <td><?php echo $level->educationlevel_name;?></td>
                                              <td><?php echo $level->num_school;?></td>
                                              <td><?php echo $level->num_student;?></td>
                                          </tr>
                                      <?php } ?>

                                  </tbody>
                              </table>
                              <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $student_update_time;?> <br><br><br>

                              <h3> -  จำนวนครูและห้องเรียน</h3>
                              <table id="example3" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ระดับการศึกษา</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวนครู (คน)</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">จำนวนห้องเรียน (ห้อง)</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php foreach( $educationlevels as $level ){ ?>
                                          <tr role="row" class="odd">
                                              <td><?php echo $level->educationlevel_name;?></td>
                                              <td><?php echo $level->num_classroom;?></td>
                                              <td><?php echo $level->num_teacher;?></td>
                                          </tr>
                                      <?php } ?>

                                  </tbody>
                              </table>
                              <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $room_update_time;?> <br><br><br>

                              <h3> -  รายชื่อโรงเรียน</h3>
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ระดับการศึกษา</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">รายชื่อโรงเรียน</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php foreach( $educationlevels as $level ){ ?>
                                          <tr role="row" class="odd">
                                              <td><?php echo $level->educationlevel_name;?></td>
                                              <td>
                                                    <?php  foreach($level->schools as $school) { ?>
                                                        <a href="<?php echo base_url(["school","showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a><br>

                                                        
                                                    <?php  }  ?>
                                              </td>
                                          </tr>
                                      <?php } ?>

                                  </tbody>
                              </table>


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

            
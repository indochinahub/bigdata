<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-12">
        <h2>จำนวนครูและบุคลากร</h2>
    </div>
    
    <div class="col-12">
          <div class="card">
              <div class="card-body">
                  
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                          <div class="col-sm-12">
                              <h3> -  จำนวนครู/บุคลากรทางการศึกษาและนักเรียน</h3>
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ชื่อโรงเรียน</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวนนักเรียน (คน)</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวนครูและบุคลากร (คน)</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php foreach( $schools as $school ){ ?>
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo base_url(["school", "showSchoolDetailView", "1032650001"]);?>"><?php echo $school->school_thainame;?></a></td>
                                              <td><?php echo $school->school_numofstudent;?></td>
                                              <td><?php echo $school->num_personel;?></td>
                                          </tr>
                                      <?php } ?>

                                  </tbody>
                              </table>
                              <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $update_time;?> <br><br><br>

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

            
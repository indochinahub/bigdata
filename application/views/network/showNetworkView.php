<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-12">
        <h2>เครือข่าย <?php echo $network->network_name;?></h2>
    </div>

    <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">หัวข้อ</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">รายละเอียด</th>
                </tr>
                </thead>
                <tbody>
                    <tr role="row" class="odd">
                        <td>จำนวนโรงเรียน</td>
                        <td><?php echo $num_school;?> โรง</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td>จำนวนนักเรียน <br>
                            (<?php echo $student_update_time;?>)
                        
                        </td>
                        <td><?php echo $num_student;?> คน</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td>จำนวนจำนวนครู</td>
                        <td><?php echo $num_teacher;?> คน</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td>รายชื่อโรงเรียน</td>
                        <td>    <?php foreach($schools as $school){ ?>
                                    <a href="<?php echo base_url([ "school", "showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a><br>
                                <?php } ?>
                        </td>
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

            
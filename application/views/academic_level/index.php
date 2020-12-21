<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-12">
        <h2>จำนวนครูจำแนกตามวิทยฐานะและระดับการศึกษา</h2>
    </div>
    
    <div class="col-12">
          <div class="card">
              <div class="card-body">
                  
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                          <div class="col-sm-12">
                          
                              <h3> -  จำแนกตามวิทยฐานะ</h3>
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row">
                                      
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">วิทยฐานะ</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ชาย</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">หญิง</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                          <tr role="row" class="odd">
                                              <td> <a href="<?php echo site_url(["academic_level", "showAcademic", "teacher"]);?>">  ไม่มีวิทยฐานะ  </a></td>
                                              <td><?php echo $teacher_male;?></td>
                                              <td><?php echo $teacher_female;?></td>
                                          </tr>
                                          <tr role="row" class="odd">
                                              <td> <a href="<?php echo site_url(["academic_level", "showAcademic", "professionalteacher"]);?>">  ชำนาญการ </a></td>
                                              <td><?php echo $professionalteacher_male;?></td>
                                              <td><?php echo $professionalteacher_female;?></td>
                                          </tr>
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showAcademic", "seniorprefessionalteacher"]);?>"> ชำนาญการพิเศษ</a></td>
                                              <td><?php echo $seniorprefessionalteacher_male;?></td>
                                              <td><?php echo $seniorprefessionalteacher_female;?></td>
                                          </tr>                                          
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showAcademic", "expertteacher"]);?>">เชี่ยวชาญ</a></td>
                                              <td><?php echo $expertteacher_male;?></td>
                                              <td><?php echo $expertteacher_female;?></td>
                                          </tr>  
                                          
                                          
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showAcademic", "advisoryteacher"]);?>">เชี่ยวชาญพิเศษ</a></td>
                                              <td><?php echo $advisoryteacher_underbachelor_male;?></td>
                                              <td><?php echo $advisoryteacher_underbachelor_female;?></td>
                                          </tr>                                            
                                          <tr role="row" class="odd">
                                              <td><strong>รวม</strong></td>
                                              <td><strong><?php echo $male;?></strong></td>
                                              <td><strong><?php echo $female;?></strong></td>
                                          </tr>                                            
                                  </tbody>
                              </table>
                              <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $update_date;?> <br><br><br>
                              <h3> -  จำแนกตามระดับการศึกษา</h3>
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                  <thead>
                                      <tr role="row">
                                      
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">วิทยฐานะ</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ชาย</th>
                                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">หญิง</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showEducationLevel", "underbachelor"]);?>"> ต่ำกว่าปริญญาตรี </a></td>
                                              <td><?php echo $underbachelor_male;?></td>
                                              <td><?php echo $underbachelor_female;?></td>
                                          </tr>
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showEducationLevel", "bachelor"]);?>">ปริญญาตรี</a></td>
                                              <td><?php echo $bachelor_male;?></td>
                                              <td><?php echo $bachelor_female;?></td>
                                          </tr>
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showEducationLevel", "diploma"]);?>">ประกาศนียบัตร</a></td>
                                              <td><?php echo $diploma_male;?></td>
                                              <td><?php echo $diploma_female;?></td>
                                          </tr>    
                                          <tr role="row" class="odd">
                                              <td><a href="<?php echo site_url(["academic_level", "showEducationLevel", "master"]);?>">ปริญญาโท</a></td>
                                              <td><?php echo $master_male;?></td>
                                              <td><?php echo $master_female;?></td>
                                          </tr>    
                                          <tr role="row" class="odd">
                                              <td> <a href="<?php echo site_url(["academic_level", "showEducationLevel", "doctor"]);?>"> ปริญญาเอก </a></td>
                                              <td><?php echo $doctor_male;?></td>
                                              <td><?php echo $doctor_female;?></td>
                                          </tr> 
                                          <tr role="row" class="odd">
                                              <td><strong>รวม</strong></td>
                                              <td><strong><?php echo $male;?></strong></td>
                                              <td><strong><?php echo $female;?></strong></td>
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

            
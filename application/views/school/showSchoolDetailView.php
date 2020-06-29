<!-- Small boxes (Stat box) -->
<div class="row">

    <div class="col-lg-8">
        <h2>โรงเรียน<?php echo $school->school_thainame;?></h2>

    </div>

    <div class="col-12 col-lg-10">
          <div class="card">
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">หัวข้อ</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">รายละเอียด</th>
                </tr>
                </thead>
                <tbody>
                        <tr role="row" class="odd">
                            <td>รหัสกระทรวง</td>
                            <td><?php echo $school->school_id;?></td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>รหัส SMISS</td>
                            <td><?php echo $school->school_smisid;?></td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>รหัส Percode</td>
                            <td><?php echo $school->school_percode;?></td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>ชื่อโรงเรียนภาษาไทย</td>
                            <td><?php echo $school->school_thainame;?></td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>ชื่อโรงเรียนอังกฤษ</td>
                            <td><?php echo $school->school_engname;?></td>
                        </tr>                                                
                        <tr role="row" class="odd">
                            <td>ชื่อผู้บริหาร</td>
                            <td><?php echo $school->school_directorname;?></td>
                        </tr>                                                
                        <tr role="row" class="odd">
                            <td>ประเภทการศึกษา</td>
                            <td><?php echo $school->educationlevel;?></td>
                        </tr>                                                
                        <tr role="row" class="odd">
                            <td>ที่อยู่ติดต่อ</td>
                            <td><?php echo  $school->school_village.
                                            " ต.".$school->school_subdistrict.
                                            " อ.".$school->school_district.
                                            " จ.".$school->school_province.
                                            " จ.".$school->school_postcode
                                ;?>
                            </td>
                        </tr>                                                
                        <tr role="row" class="odd">
                            <td>อีเมล์</td>
                            <td><?php echo  $school->school_email;?>
                            </td>
                        </tr>                                                                        
                        <tr role="row" class="odd">
                            <td>เว็บไซต์</td>
                            <td><?php echo  $school->school_website;?>
                            </td>
                        </tr>                                                                  
                        <tr role="row" class="odd">
                            <td>องค์กรปกครองส่วนท้องถิ่น</td>
                            <td><?php echo  $school->school_localadmin;?>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>หมายเลขโทรศัพท์</td>
                            <td><?php echo  $school->school_phonenumber;?>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>หมายเลขโทรสาร</td>
                            <td><?php echo  $school->school_faxnumber;?>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>วันที่ก่อตั้ง</td>
                            <td><?php echo  $school->school_establisheddate;?>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>ระยะทางถึงเขตพื้นที่</td>
                            <td><?php echo  $school->school_farfromoffice;?> ก.ม.
                            </td>
                        </tr>                          
                        <tr role="row" class="odd">
                            <td>ระยะทางถึงอำเภอ</td>
                            <td><?php echo  $school->school_farfromdistrict;?> ก.ม.
                            </td>
                        </tr>                          
                        <tr role="row" class="odd">
                            <td>ขนาดโรงเรียน</td>
                            <td><?php echo  $school->school_size;?>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>มีไฟฟ้า</td>
                            <td><?php echo  $school->school_haselectricity;?>
                            </td>
                        </tr>      
                        <tr role="row" class="odd">
                            <td>
                                จำนวนบุคลากร <br>
                                (<?php echo $school->school_studentupdatetime;?>)

                            </td>
                            <td>
                                <?php echo $school->school_numofpersonel;?> คน
                            </td>
                        </tr>      
                        <tr role="row" class="odd">
                            <td>จำนวนนักเรียน  <br>
                                (<?php echo $school->school_studentupdatetime;?>)
                            </td>
                            <td><?php echo  $school->school_numofstudent;?> คน
                            </td>
                        </tr>    
                        <tr role="row" class="odd">
                            <td>จำนวนห้องเรียน</td>
                            <td><?php echo  $school->school_numofclassroom;?> ห้อง
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td><a href="<?php echo base_url(["network", "index"]);?>">เครือข่าย</a></td>
                            <td><?php echo $school->network_name;?>
                            </td>

                            
                        </tr>                            

                    </tbody>
              </table>
               <strong>วันที่ปรับปรุงข้อมูล</strong> : <?php echo  $school->school_schoolupdatetime;?><br><br><br>

               <h2>จำนวนครูจำแนกตามระดับชั้น</h2>
               <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ระดับชั้น</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">จำนวน (คน)</th>
                </tr>
                </thead>
                <tbody>
                        <?php foreach($levels as $level){ ?>
                            <tr role="row" class="odd">
                                <td><?php echo $level->name;?></td>
                                <td><?php echo $level->number;?></td>
                            </tr>
                        <?php } ?>
                        
                        
                        <tr role="row" class="odd" style="background-color:#dbd9d9">
                            <td>รวมทั้งหมด</td>
                            <td><?php echo $sum_all_level;?></td>
                        </tr>                        

                </tbody>
              </table>
               <strong>วันที่ปรับปรุงข้อมูล</strong> : <?php echo  $school->school_schoolupdatetime;?>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </div>


    
</div>
<!-- /.row -->

            
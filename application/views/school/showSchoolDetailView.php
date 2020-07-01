<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>โรงเรียน<?php echo $school->school_thainame;?></h3>
    </div>

    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ รายละเอียดโรงเรียน ] </h4>
    </div>    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">หัวข้อ</th>
                <th scope="col">รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <th scope="row">รหัสกระทรวง</th>
                <td><?php echo $school->school_id;?></td>
            </tr>
            <tr>
                <th scope="row">รหัส SMISS</th>
                <td><?php echo $school->school_smisid;?></td>
            </tr>

            <tr>
                <th scope="row">รหัส Percode</th>
                <td><?php echo $school->school_percode;?></td>
            </tr>            
            <tr>
                <th scope="row">ชื่อโรงเรียนภาษาไทย</th>
                <td><?php echo $school->school_thainame;?></td>
            </tr>
            <tr>
                <th scope="row">ชื่อโรงเรียนอังกฤษ</th>
                <td><?php echo $school->school_engname;?></td>
            </tr>
            <tr>
                <th scope="row">ชื่อผู้บริหาร</th>
                <td><?php echo $school->school_directorname;?></td>
            </tr>
            
            <tr>
                <th scope="row">ประเภทการศึกษา</th>
                <td><?php echo $school->educationlevel;?></td>
            </tr>
            <tr>
                <th scope="row">ที่อยู่ติดต่อ</th>
                <td><?php echo  $school->school_village.
                                            " ต.".$school->school_subdistrict.
                                            " อ.".$school->school_district.
                                            " จ.".$school->school_province.
                                            " จ.".$school->school_postcode
                                ;?>
                </td>
            </tr>            
            <tr>
                <th scope="row">อีเมล์</th>
                <td><?php echo  $school->school_email;?></td>
            </tr>
            <tr>
                <th scope="row">เว็บไซต์</th>
                <td><?php echo  $school->school_website;?></td>
            </tr>

            <tr>
                <th scope="row">องค์กรปกครองส่วนท้องถิ่น</th>
                <td><?php echo  $school->school_localadmin;?></td>
            </tr>
            <tr>
                <th scope="row">หมายเลขโทรศัพท์</th>
                <td><?php echo  $school->school_phonenumber;?></td>
            </tr>            
            
            <tr>
                <th scope="row">หมายเลขโทรสาร</th>
                <td><?php echo  $school->school_faxnumber;?></td>
            </tr>
            
            <tr>
                <th scope="row">วันที่ก่อตั้ง </th>
                <td><?php echo  $school->school_establisheddate;?></td>
            </tr>
            
            <tr>
                <th scope="row">ระยะทางถึงเขตพื้นที่</th>
                <td><?php echo  $school->school_farfromoffice;?> ก.ม.</td>
            </tr>
            <tr>
                <th scope="row">ระยะทางถึงอำเภอ</th>
                <td><?php echo  $school->school_farfromdistrict;?> ก.ม.</td>
            </tr>            
            <tr>
                <th scope="row">ขนาดโรงเรียน</th>
                <td><?php echo  $school->school_size;?></td>
            </tr>
            
            <tr>
                <th scope="row">มีไฟฟ้า</th>
                <td><?php echo  $school->school_haselectricity;?></td>
            </tr>            
            <tr>
                <th scope="row">จำนวนบุคลากร <br>
                                (<?php echo $school->school_studentupdatetime;?>)
                </th>
                <td><?php echo $school->school_numofpersonel;?> คน</td>
            </tr>         

            <tr>
                <th scope="row">จำนวนนักเรียน  <br> (<?php echo $school->school_studentupdatetime;?>)</th>
                <td><?php echo  $school->school_numofstudent;?> คน</td>
            </tr>            
            <tr>
                <th scope="row">จำนวนห้องเรียน </th>
                <td><?php echo  $school->school_numofclassroom;?> ห้อง</td>
            </tr>
            
            <tr>
                <th scope="row"><a href="<?php echo base_url(["network", "index"]);?>">เครือข่าย</a></th>
                <td><?php echo $school->network_name;?></td>
            </tr>            
            
        </tbody>
    </table>
    <div><strong>วันที่ปรับปรุงข้อมูล</strong> : <?php echo  $school->school_schoolupdatetime;?></div>

   
    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ จำนวนบุคลากร ] </h4>
    </div>    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ระดับชั้น</th>
                <th scope="col">จำนวนคน</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($levels as $level){ ?>
                <tr>
                    <th scope="row"><?php echo $level->name;?></th>
                    <td><?php echo $level->number;?></td>
                </tr>
            <?php } ?>
            <tr>
                <th scope="row"><strong>[ รวมทั้งหมด ]</strong></th>
                <td><strong>[<?php echo $sum_all_level;?>]</strong></td>
            </tr>            
            
        </tbody>
    </table>
</div>
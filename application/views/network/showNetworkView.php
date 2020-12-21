<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>เครือข่าย <?php echo $network->network_name;?></h3>
    </div>

    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ รายละเอียด ] </h4>
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
                <th scope="row">จำนวนโรงเรียน</th>
                <td><?php echo $num_school;?> โรง</td>
            </tr>           
            <tr>
                <th scope="row">จำนวนนักเรียน (<?php echo $student_update_time;?>)</th>
                <td><?php echo $num_student;?> คน</td>
            </tr>   

            <tr>
                <th scope="row">จำนวนครู</th>
                <td><?php echo $num_teacher;?> คน</td>
            </tr>   
        </tbody>
    </table>    
    
    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ รายชื่อโรงเรียน]</h4>
    </div>   
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อโรงเรียน</th>
                <th scope="col">ที่ตั้ง<br>(ตำบล/อำเภอ)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($schools as $school){ ?>        
                <tr>
                    <th scope="row"><a href="<?php echo site_url([ "school", "showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a></th>
                    <td>ต. <?php echo $school->school_subdistrict;?><br> อ. <?php echo $school->school_district;?></td>
                </tr>           
            <?php } ?>
        </tbody>
    </table>        
</div>
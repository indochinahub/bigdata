<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>ระดับการศึกษา</h3>
    </div>

    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ จำนวนโรงเรียนและนักเรียน ] </h4>
    </div>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ระดับการศึกษา</th>
                <th scope="col">จำนวนโรงเรียน (โรง)</th>
                <th scope="col">จำนวนนักเรียน (คน)</th>
                		
            </tr>
        </thead>
        <tbody>
        
            <?php foreach( $educationlevels as $level ){ ?>
                <tr>
                    <th scope="row"><?php echo $level->educationlevel_name;?></th>
                    <td><?php echo $level->num_school;?></td>
                    <td><?php echo $level->num_student;?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div><strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $student_update_time;?></div>


    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ จำนวนครูและห้องเรียน] </h4>
    </div>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ระดับการศึกษา</th>
                <th scope="col">จำนวนครู (คน)</th>
                <th scope="col">จำนวนห้องเรียน (ห้อง)</th>
                		
            </tr>
        </thead>
        <tbody>
        
            <?php foreach( $educationlevels as $level ){ ?>
                <tr>
                    <th scope="row"><?php echo $level->educationlevel_name;?></th>
                    <td><?php echo $level->num_classroom;?></td>
                    <td><?php echo $level->num_teacher;?></td>
                </tr>
            <?php } ?>
            
            
        </tbody>
    </table>
    <div><strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $student_update_time;?></div>
    
    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>รายชื่อโรงเรียน</h4>
    </div>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ระดับการศึกษา</th>
                <th scope="col">รายชื่อโรงเรียน</th>
            </tr>
        </thead>
        <tbody>
        
            <?php foreach( $educationlevels as $level ){ ?>
                <tr>
                    <th scope="row"><?php echo $level->educationlevel_name;?></th>
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


<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>จำนวนครูและบุคลากร</h3>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อโรงเรียน</th>
                <th scope="col">จำนวนนักเรียน (คน)</th>
                <th scope="col">จำนวนครูและบุคลากร (คน)</th>
            </tr>
	
        </thead>
        <tbody>
            <?php foreach( $schools as $school ){ ?>        
                <tr>
                    <th scope="row"><a href="<?php echo site_url(["school", "showSchoolDetailView", "1032650001"]);?>"><?php echo $school->school_thainame;?></a></th>
                    <td><?php echo $school->school_numofstudent;?></td>
                    <td><?php echo $school->num_personel;?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
        <strong>วันที่ปรับปรุงข้อมูล</strong>  : <?php echo $update_time;?>
    </div>
    
</div>
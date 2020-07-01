<div>
    <div style="margin:10px 0 0 10px;text-align:center">
        <h3>สถานศึกษาในสังกัด</h3>
    </div>

    <div style="margin:20px 0 0 10px;color:#28a745">
        <h4>[ รายชื่อโรงเรียน ] </h4>
    </div>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อโรงเรียน</th>
                <th scope="col">รหัสกระทรวง</th>
                <th scope="col">รหัส SMISS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $schools as $school){ ?>
                <tr>
                    <th scope="row"><a href="<?php echo base_url(["school", "showSchoolDetailView", $school->school_id]);?>"><?php echo $school->school_thainame;?></a></th>
                    <td><?php echo $school->school_id;?></td>
                    <td><?php echo $school->school_smisid;?></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</div>
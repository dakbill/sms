<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url().$this->session->userdata('role')?>">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Add Test Result</a>
        </li>
    </ul>
</div>

<div>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <div class="controls">
                <select class="form-control" name="subject">
                    <option>Select Subject</option>
                    <?php foreach($subjects as $subject):?>
                        <option value="<?php echo $subject->subject_id ?>"><?php echo $subject->name ?></option>
                    <?php endforeach?>
                </select>
                <button type="submit" class="btn btn-default">Filter</button>
            </div>

        </div>


    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <td>Student ID</td>
        <td>Class Score</td>
        <td>Exam Score</td>
        <td>Grade</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody></tbody>




<?php foreach ($students as $row): ?>
    <tr>
        <td><?php echo $row->students_members_mem_id ?></td>
        <td><input class="span3" value="30" type="text"></td>
        <td><input class="span3" value="100" type="text"></td>
        <td><input class="span3"  readonly value="<?php echo $row->grade ?>" type="text"></td>
        <td><button class="btn btn-primary">Record</button></td>
    </tr>

<?php endforeach ?>

</table>
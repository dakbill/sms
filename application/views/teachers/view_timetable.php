<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url().$this->session->userdata('role')?>">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>View Timetable</a>
        </li>
    </ul>
</div>
<iframe src="<?php echo base_url().$this->session->userdata('role')?>/get-timetable"  width="900" height="600" ></iframe>
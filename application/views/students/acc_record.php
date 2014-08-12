
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url().$this->session->userdata('role')?>">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Academic Record</a>
        </li>
    </ul>
</div>

<iframe id="frame"  src="<?php echo base_url()?>students/get_academic_record_pdf" style="width:900px; height:500px;margin-left: 20px;" frameborder="0">
<div>
    <ul class="breadcrumb">
        <li>
            <a>Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Enroll Student</a>
        </li>
    </ul>
</div>

<div class="sortable row-fluid">
    <a data-rel="tooltip" title="Total students." class="well span3 top-block" href="<?php echo base_url().$this->session->userdata('role')?>/view-students">
        <span class="icon32 icon-red icon-users"></span>
        <div>Total Students</div>
        <div><?php echo $student_population->count ?></div>

    </a>

    <a data-rel="tooltip" title="number of boys." class="well span3 top-block" href="<?php echo base_url().$this->session->userdata('role')?>/view-boys">
        <span class="icon32 icon-color icon-users"></span>
        <div>Boys</div>
        <div><?php echo $male_population->count ?></div>

    </a>

    <a data-rel="tooltip" title="number of Girls." class="well span3 top-block" href="<?php echo base_url().$this->session->userdata('role')?>/view-girls">
        <span class="icon32 icon-color icon-users"></span>
        <div>Girls</div>
        <div><?php echo $female_population->count ?></div>

    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="<?php echo base_url().$this->session->userdata('role')?>/inbox">
        <span class="icon32 icon-color icon-comment-text"></span>
        <div>Messages</div>
        <div>25</div>
        <span class="notification red">12</span>
    </a>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i>  Student Enrollment Form</h2>
            <div class="box-icon">
                <a class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="bs-docs-example">
                    <form class=" form-horizontal" action="<?php echo(base_url().$this->session->userdata('role'))?>/enroll-student" method="post">
                        <div class="accordion" id="accordion">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Student's Bio Data
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">

                                        <div class="control-group">
                                            <label class="control-label" for="fname">First Name</label>
                                            <div class="controls">
                                                <input class="span4" type="text" id="fname" name="fname" placeholder="e.g. Kwabena">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="lname">Last Name</label>
                                            <div class="controls">
                                                <input class="span4" type="text" id="lname" name="lname" placeholder="eg. Duffour">

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="oname">Other Names</label>
                                            <div class="controls">
                                                <input class="span4" type="text" id="oname" name="oname" placeholder="eg. Komla">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="dob">Date Of Birth</label>
                                            <div class="controls">
                                                <input class="span4 datepicker" type="text" id="dob" name="dob" placeholder="eg. 07/16/2014">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="phone">Phone</label>
                                            <div class="controls">
                                                <input type="tel" id="phone" name="phone" placeholder="e.g. 0244192129" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <input type="email" id="email" name="email" placeholder="e.g. dakbill@yahoo.com" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="nationality">Nationality</label>
                                            <div class="controls">

                                                <select class="span10" id="nationality" name="nationality">
                                                    <option value="">Choose One</option>
                                                    <option>Ghanaian</option>
                                                    <option>Nigerian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="photo">Photo</label>
                                            <div class="controls">

                                                <div class="btn-group" >

                                                    <input type="file" onchange="preview_image(this)" name="photo" id="photo" accept="image/*">
                                                    <script>
                                                        function preview_image(file){
                                                            var reader = new FileReader();
                                                            reader.onload = function(e){
                                                                $('#preview').attr('src', e.target.result);
                                                            };
                                                            reader.readAsDataURL(file.files[0]);


                                                        }

                                                    </script>
                                                    <br>

                                                    <img id="preview" src="<?php echo base_url()?>assets/img/1401447728.png" width="140px" height="140px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="gender">Gender</label>
                                            <div class="controls">
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender"  value="m"> Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender"  value="f"> Female
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Student's Family Data
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <div class="control-group">
                                            <label class="control-label" for="guardian">Guardian</label>
                                            <div class="controls">
                                                <input type="text" id="guardian" name="guardian" placeholder="e.g. Kwabena Adu" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="relation">Relation</label>
                                            <div class="controls">
                                                <select id="relation" name="relation">
                                                    <option value="">Choose One</option>
                                                    <option>Daughter</option>
                                                    <option>Son</option>
                                                    <option>Niece</option>
                                                    <option>Nephew</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="gphone">Phone</label>
                                            <div class="controls">
                                                <input type="tel" id="gphone" name="gphone" placeholder="e.g. 0244192129" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="gemail">Email</label>
                                            <div class="controls">
                                                <input type="email" id="gemail" name="gemail" placeholder="e.g. dakbill@yahoo.com" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Student's Previous School Data
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <div class="control-group">
                                            <label class="control-label" for="sch_name">School Name</label>
                                            <div class="controls">
                                                <input type="text" id="sch_name" placeholder="e.g. Saint Anthony" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="sch_level">Level Reached</label>
                                            <div class="controls">
                                                <input type="text" id="sch_level" name="sch_level" placeholder="e.g. Form 2A" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            Student's Current School Data
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="control-group">
                                                <label class="control-label" for="class">Class</label>
                                                <div class="controls">
                                                    <select id="class"  name="class" size="10">
                                                        <option value="1A">1A</option>
                                                        <option value="2A">2A</option>
                                                        <option value="3A">3A</option>
                                                        <option value="4A">4A</option>
                                                        <option value="5A">5A</option>
                                                        <option value="6A">6A</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <button type="submit"  class="btn btn-large btn-primary">Enroll Student</button>
                                                <button type="reset"  class="btn btn-large btn-primary">Cancel</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>



                </div>

            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->
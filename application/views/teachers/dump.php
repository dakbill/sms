<form role="form" action="<?php echo(base_url().$this->session->userdata('role'))?>/enroll_stud" method="post">
    <table>
        <tr>
            <td>First name : </td>
            <td><input type="text" class="span10" name="fname" ></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Other name(s) : </td>
            <td><input type="text" name="onames" class="span10" ></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Last name :</td><td> <input type="text" class="span10 " name="lname" ></td>
        <tr>
            <td>D.O.B : </td>
            <td><input type="text" class="span10 datepicker" name="dob" ></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>


            <td>Height :</td><td> <input type="text" class="span10 " name="" id=""></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Nationality : </td>
            <td><select class="span10">
                    <option value="">Choose One</option>
                    <option>Ghanaian</option>
                    <option>Nigerian</option>
                </select></td>
        </tr>
        <div class="btn-group pull-right" >

            <input type="file" onchange="preview_image(this)" name="" id="" accept="image/*">
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

            <div class="center">
                <img id="preview" src="<?php echo base_url()?>assets/img/1401447728.png" width="140px" height="140px">
            </div>
        </div>
        </tr>
        <tr>
            <td>Blood Type : </td>
            <td><select class="span10">
                    <option value="">Choose One</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB</option>
                </select></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
            <td>
                Male<input type="radio" name="sex" id="m">
                &nbsp;&nbsp;&nbsp;&nbsp;
                Female<input type="radio" name="sex" id="f">
            </td>


        </tr>
    </table>

    <table>
        <tr>
            <td>Guardian name : </td>
            <td><input type="text" name="" id=""></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Relation: </td>
            <td><select>
                    <option value="">Choose One</option>
                    <option>Daughter</option>
                    <option>Son</option>
                    <option>Niece</option>
                    <option>Nephew</option>
                </select></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Phone Number : </td>
            <td><input type="text" name="" id=""></td>
        </tr>
        <tr>
            <td>E-mail : </td>
            <td><input type="text" name="" id=""></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>House Address: </td>
            <td><textarea ></textarea></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Postal Address : </td>
            <td>
                <textarea ></textarea>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>School Name : </td>
            <td><input type="text" id="" name="" ></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Level Reached: </td>
            <td><input type="text" id="" name="" ></td>
        </tr>
        <tr>


        </tr>
    </table>
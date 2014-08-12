<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="smsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="smsLabel">Send Message</h4>
            </div>
            <div class="modal-body" >
                <form role="form" class="form-horizontal" >
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="form-group" >
                                <div class="form-control">
                                    <textarea   rows="5" cols="10" placeholder="Member ID'S eg: 10346353, 10342265,..." ></textarea>
                                </div>

                            </div>
                            <div class="form-group" style="margin-top: 30px">
                                <div class="form-control">
                                    <textarea  placeholder="Message (90 chars)" rows="6" cols="20" ></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="span6">
                            <div class="form-group" style="overflow-y: scroll;height: 200px;">
                                <div class="form-control">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            group 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" >
                                            group 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" >
                                            group 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" >
                                            group 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" >
                                            group 2
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message Type</label>
                                <select class="form-control">
                                    <option value="email">Email</option>
                                    <option value="sms">SMS</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url().$this->session->userdata('role')?>">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Send Notice</a>
        </li>
    </ul>
</div>

<div class="row-fluid" >
    <a href="#" class="span3" data-toggle="modal" data-target="#sms" >
        <div class="thumbnail " >
            <img src="<?php echo base_url()?>assets/img/msg.png" >
            <div class="caption" >
                Compose  and send to member(s)
            </div>
        </div>
    </a>

</div>

<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="smsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="smsLabel">Send sms</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="span12">
                            <input type="text" placeholder="Member(s)" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="span12">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="span7">
                            <textarea class="form-control" rows="3" placeholder="Message"  ></textarea>
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
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="emailLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="emailLabel">Send email</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="span12">
                            <input type="text" placeholder="Member(s)" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="span12">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="span12">
                            <textarea class="form-control" rows="6" placeholder="Message"></textarea>
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
    <a href="#" class="span2" data-toggle="modal" data-target="#sms" >
        <div class="thumbnail " >
            <img src="<?php echo base_url()?>assets/img/sms.png" >
            <div class="caption" >
                Send SMS to member(s)
            </div>
        </div>
    </a>
    <a href="#"  class=span2 " data-toggle="modal" data-target="#email">
        <div class="thumbnail ">
            <img src="<?php echo base_url()?>assets/img/email.jpg" >
            <div class="caption">
                Send Email to member(s)
            </div>
        </div>
    </a>
</div>

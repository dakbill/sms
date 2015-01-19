@extends('teacher/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Notifications Manager</a>
        </li>
    </ul>
</div>
<div class="row-fluid">
    <form>
        <fieldset>
            <legend>Recipients</legend>

            <div class="form-group">
                <label>ID numbers</label>
                <textarea style="resize: none;width: 694px;height: 136px" placeholder="eg: 10228955, 10346653"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Message</legend>
            <div class="form-group">
                <textarea style="resize: none;width: 694px;height: 136px"></textarea>
            </div>
            <div class="control-group">
                <label class="control-label" for="gender">Send By</label>

                <div class="controls">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="send_by" value="sms" > SMS
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="send_by" value="email"> EMAIL
                    </label>
                </div>
            </div>
            <button class="btn-primary btn-large"> Send</button>
            <button class="btn-primary btn-large"> Cancel</button>

        </fieldset>

    </form>

</div>
@endsection
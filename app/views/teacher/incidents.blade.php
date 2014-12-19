@extends('teacher/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Incident Reporter</a>
        </li>
    </ul>
</div>
<div class="row-fluid">
    <form>
        <fieldset>
            <legend>People Involved</legend>

            <div class="form-group">
                <label>Names or ID numbers</label>
                <textarea style="resize: none" placeholder="eg: Kofi Manu, Kwame, 10346653"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Event Account</legend>
            <div class="form-group">
                <textarea style="resize: none" placeholder="It all started after the math class..." ></textarea>
            </div>
            <button class="btn-primary btn-large"> Report</button>
            <button class="btn-primary btn-large"> Cancel</button>

        </fieldset>
    </form>

</div>
@endsection
@extends('guardian/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Pay Ward Fees</a>
        </li>
    </ul>
</div>
<div class="row-fluid">
	<fieldset>
		<legend>Pending Payments </legend>
		<div class="control-group">
        <label class="control-label" >Ward</label>
	        <div class="controls">
	            <select class="form-control class_of_students" name="subject">
	                <option value="null">Select Ward</option>

	            </select>
	        </div>
        </div>
		<h6>Click to complete payment on Ahonya Sika</h6>
		<ul>
			<li><a>Hostel Fees</a></li>
			<li><a>School Fees</a></li>
			<li><a>Studies Fee</a></li>
		</ul>
	</fieldset>
	
</div>
<iframe src="http://localhost:8000/api/invoice_iframe/96282ca08152838f8869c14587ef2a364a7f2fae/" width="800" height="400"></iframe>

@endsection
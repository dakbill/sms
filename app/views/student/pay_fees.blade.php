@extends('student/dashboard')
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
		
		<h6>Click to complete payment on Ahonya Sika</h6>
		<ul>
			<li><a>Hostel Fees</a></li>
			<li><a>School Fees</a></li>
			<li><a>Studies Fee</a></li>
		</ul>
	</fieldset>
	
</div>

@endsection
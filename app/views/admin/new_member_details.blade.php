@extends('admin/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>New Member Details</a>
        </li>
    </ul>
</div>

<p>{{$mem_id}}</p>
<p>{{$password}}</p>
<p>{{$button}}</p>
@endsection
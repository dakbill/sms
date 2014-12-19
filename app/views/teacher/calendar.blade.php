@extends('teacher/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Calendar</a>
        </li>
    </ul>
</div>

<iframe src="https://www.google.com/calendar/embed?src=taichobill%40gmail.com&ctz=Africa/Accra" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
@endsection
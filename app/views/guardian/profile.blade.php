@extends('guardian/dashboard')
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
    <img alt="DP" class="img-responsive img-circle" src="{{ ($user->avatar == '')?asset('images/passport.png'):asset('avatars/'.$user->avatar) }}" width="140px" height="140px"/>
    <p>{{$user->mem_id}}</p>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->phone}}</p>
    <p>{{$user->nationality}}</p>
    <!--img id="preview" src="{{asset('images/passport.png')}}" width="140px" height="140px"
        <img alt="DP" class="img-responsive img-circle" src="{{ ($user->avatar == '')?asset('images/passport.png'):asset('avatars/'.$user->avatar) }}" width="140px" height="140px"/>
    -->
    


</div>
@endsection
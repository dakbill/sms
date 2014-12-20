@extends('layout/base')
@section('content')
     <div class="row-fluid">
                <div class="span12 center login-header">
                    <h2>Login To Smart School Manager</h2>
                </div><!--/span-->

            </div><!--/row-->
             
            <div class="row-fluid">
                <div class="well span5 center login-box">
                    <div class="alert alert-success">
                        Please login with your Username and Password.
                    </div>
                    @if (Session::get('message')!= null)
                        <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
                    @endif

                      <form role="form" action="{{URL::route('home#sign-in')}}" method="post">
                        <fieldset>
         
                            <div class="input-prepend"  title="Username" data-rel="tooltip">
                                <span class="add-on"><i class="icon-user"></i></span><input autofocus  name="mem_id" required type="text" placeholder="ID number eg: 1235" />
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password" data-rel="tooltip">
                                <span class="add-on"><i class="icon-lock"></i></span><input required name="pword" type="password" placeholder="Password eg: admin123456" />
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend">
                            </div>
                            <div class="clearfix"></div>

                            <p class="center span5">
                            <button type="submit" class="btn btn-success">Sign in</button>
                            </p>
                        </fieldset>
                    </form>
                </div><!--/span-->
            </div><!--/row-->

@endsection
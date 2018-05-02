@extends('layouts.dialog')

@section('content')
    <p class="login-box-msg">Sign in to start your session</p>
        <form class="form-signin" method="POST" action="{!! route('loginPost') !!}" >
            {!! csrf_field() !!}

            <div class="form-group has-feedback">
                <input type="text" id="username" name="username" class="form-control" placeholder="User name" value="{{ old('username') }}" required autofocus/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                @if ( Setting::get('auth.enable_remember_token') )
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" id="remember" name="remember"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                @endif
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

        {!! link_to_route('recover_password', 'I forgot my password', [], ['class' => "text-center"]) !!}<br>
        @if (Setting::get('app.allow_registration'))
            {!! link_to_route('register', 'Register a new membership', [], ['class' => "text-center"]) !!}
        @endif

@endsection
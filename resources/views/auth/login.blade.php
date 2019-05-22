@extends('store.layouts.main')

@section('content')
<div class="container text-center">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="title">Login</h3>

                <div class="panel-body">
                    <div class="col-md-12">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Senha">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                            
                            <a class="btn btn-link" href="{{ route('password.request') }}">Recuperar a Senha?</a>
                                | 
                            <a class="btn btn-link" href="{{ route('register') }}">Cadastre-se!</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

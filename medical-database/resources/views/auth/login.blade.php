@extends('layouts.app')

@section('content')

<div>
    <div class="box2">
        <br>
        <h1>Iniciar sesi&oacute;n</h1>
        <br>
    </div>

    <div class="box3">
        Entrar como:
    </div>

    <div class="box4">

        <div class="loginBox"><center>
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="login"> <INPUT TYPE="submit" class="button1" VALUE="Doctor"><img src="Doctor.png"></FORM>
        <!-- </div>

        <div class="patientBox"> -->
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="login"> <INPUT TYPE="submit" class="button1" VALUE="Paciente"><img src="Paciente.png"></FORM>
        </div></center>
    </div>
</div>

        <!-- <br>
        <br>
        <br>
        <img src="Pildora.png" class="pildora">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"><h3>Correo electr&oacute;nico</h3></label>

                     <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="example@example.com">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label"><h2>Contrase&ntilde;a</h2></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="******" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label><h4>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </h4></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><h4>
                            Ingresar
                        </h4></button>

                        <h4><a class="btn btn-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contrase&ntilde;a?
                        </h4></a>
        <br> -->
    </div>
</div>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><h6>
            <div class="panel panel-default">
                <div class="panel-heading"><h1><br>Iniciar sesi&oacute;n como paciente</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><h3>Correo electr&oacute;nico</h3></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="example@example.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><h3>Contrase&ntilde;a</h3></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label><h4>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </h4></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"><h4>
                                    Ingresar
                                </h4></button>

                                <h4><a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contrase&ntilde;a?
                                </h4></a>

                                <h4><a class="btn btn-link" href="{{ route('password.request') }}">
                                    Soy un doctor
                                </h4></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div></h6>
    </div>
</div> -->
@endsection

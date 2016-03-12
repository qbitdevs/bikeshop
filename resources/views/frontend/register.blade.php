@extends('app')

@section('content')
    <div class="container-fluid">
        @if( ! empty($error_message))
            <p class="alert alert-danger">{!!$error_message!!}</p>
        @endif

        {!! Form::open(array('url' => '/register', 'method' => 'post')) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', '')!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('name') !!}
                </spam>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address') !!}
                {!! Form::text('email', '')!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('email') !!}
                </spam>
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contrase&ntilde;a') !!}
                {!! Form::password('password', '')!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('password') !!}
                </spam>
            </div>
            <div class="form-group">
                {!! Form::label('password_confirm', 'Confirme su contrase&ntilde;a') !!}
                {!! Form::password('password_confirm', '')!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('password_confirm') !!}
                </spam>
            </div>
            <div class="form-group">
                {!! Form::label('age', 'Edad') !!}
                {!! Form::selectRange('age', 18, 90)!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('age') !!}
                </spam>
            </div>
            <div class="form-group">
                {!! Form::label('Genero', 'G&eacute;nero') !!}
                {!! Form::select('gender', array('Hombre' => 'Hombre', 'Mujer' => 'Mujer'))!!}
                <spam style="color:#a94442" class="help-block error-help-block">
                    {!! $errors->first('gender') !!}
                </spam>
            </div>
            {!! Form::submit('Registrar') !!}
        {!! Form::close() !!}
        {!! $validator !!}
    </div>
@endsection
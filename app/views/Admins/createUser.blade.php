@extends('layout')

@section('content')

    <h1 class="text-success text-center">Create New User</h1>

    <div class="panel-body">
    {{ Form::open(array('route' => 'create_user')) }}
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <!-- Username Form Input -->
                    <div class="form-group">
                        {{ Form::label('username', 'Username:') }}
                        {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'username']) }}
                    </div>

                    <!-- Email Form Input -->
                    <div class="form-group">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'ng-model' => 'email', 'required' => 'required']) }}
                    </div>

                    <!-- Password Form Input -->
                    <div class="form-group">
                        {{ Form::label('password', 'Password:') }}
                        {{ Form::password('password', ['class' => 'form-control', 'ng-model' => 'password', 'required' => 'required']) }}
                    </div>

                    <!-- Password_confirmation Form Input -->
                    <div class="form-group">
                        {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'ng-model' => 'password_confirmation', 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('status', 'Status:') }}
                        {{ Form::select('status',['1'=>'Active','0'=>'Inactive'],null,['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-block', 'ng-disabled' => 'registrationForm.$invalid']) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>

    @stop
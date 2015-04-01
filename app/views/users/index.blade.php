@extends('layout')

@section('content')
<h1 class="text-center text-success">Welcome</h1>

<div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="#register_tab" data-toggle="tab">
                    New User? Register Here
                </a>
            </li>
            <li>
                <a href="#login_tab" data-toggle="tab">
                    Already Registered? Login Here
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="register_tab">
            <div class="panel-body">
                {{ Form::open(array('route' => 'register_path')) }}
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
                                        {{ Form::submit('Sign Up', ['class' => 'btn btn-lg btn-success btn-block', 'ng-disabled' => 'registrationForm.$invalid']) }}
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="tab-pane fade" id="login_tab">
            <div class="panel-body">
                {{ Form::open(array('route' => 'login_path')) }}
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <!-- Email Form Input -->
                            <div class="form-group">
                                {{ Form::label('email', 'Email:') }}
                                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                            </div>

                            <!-- Password Form Input -->
                            <div class="form-group">
                                {{ Form::label('password', 'Password:') }}
                                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                            </div>

                            <!-- Sign In Input -->
                            <div class="form-group">
                                {{ Form::submit('Sign In', ['class' => 'btn btn-lg btn-success btn-block']) }}
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection

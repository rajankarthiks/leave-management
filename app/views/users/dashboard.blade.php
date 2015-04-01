@extends('layout')

@section('content')
<h1 class="text-center text-success">Dashboard <small class="text-info">({{ Auth::user()->username }})</small></h1>
@stop
@section('old')
<div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="#leaves_tab" data-toggle="tab">
                    Total Leaves
                </a>
            </li>
            <li>
                <a href="#apply_leave_tab" data-toggle="tab">
                    Apply for a Leave
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="leaves_tab">
            <div style="margin-top: 25px;" class="the-box">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="datatable-baseProducts">
                        <thead class="the-box dark full">
                        <tr>
                            <th>Id</th>
                            <th>Leave Date</th>
                            <th>Reason for Leave</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leaves as $leave)
                        <tr>
                            <td>{{ $leave->id }}</td>
                            <td>{{ $leave->leave_date }}</td>
                            <td>{{ $leave->reason }}</td>
                            <td>{{ $leave->status }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.the-box .default -->
        </div>
        <div class="tab-pane fade" id="apply_leave_tab">
            <div class="panel-body">
                {{ Form::open(array('route' => 'apply_leave')) }}
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="form-group">
                                <label>Please Select Date of Leave</label>
                                <input name="leave_date" id="datepicker1" readonly type="text" class="form-control" data-date-format="dd-mm-yy" placeholder="dd-mm-yy">
                            </div>
                            <!-- Password Form Input -->
                            <div class="form-group">
                                {{ Form::label('reason', 'Reason For Leave:') }}
                                {{ Form::textarea('reason',null, ['class' => 'form-control', 'required' => 'required']) }}
                            </div>

                            <!-- Sign In Input -->
                            <div class="form-group">
                                {{ Form::submit('Sign In', ['class' => 'btn btn-lg btn-primary btn-block']) }}
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

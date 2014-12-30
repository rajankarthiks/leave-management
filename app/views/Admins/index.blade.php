@extends('layout')

@section('content')

<h1 class="text-info text-center">Leave Applications</h1>

<!-- BEGIN DATA TABLE -->
<div style="margin-top: 25px;" class="the-box">

    <div class="table-responsive">
        <table class="table table-striped table-hover" id="datatable-baseProducts">
            <thead class="the-box dark full">
            <tr>
                <th>Id</th>
                <th>Employee Name</th>
                <th>Date of Leave</th>
                <th>Reason for Leave</th>
                <th>Status</th>
                <th>Total Leaves Taken</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($leaves as $leave)
            <tr>
                <td> {{ $leave->id }} </td>
                <td> {{ $leave->user->username }} </td>
                <td> {{ $leave->leave_date }} </td>
                <td> {{ $leave->reason }} </td>
                <td> {{ $leave->status }} </td>
                <td class="center"> {{ $leave->user->leaves }} </td>
                <td class="center">
                    {{ link_to_route('approve_leave','Approve',$leave->id,array('class'=>'btn btn-xs btn-success')) }} |
                    {{ link_to_route('reject_leave','Reject',$leave->id,array('class'=>'btn btn-xs btn-danger')) }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.table-responsive -->
</div><!-- /.the-box .default -->
<!-- END DATA TABLE -->

@endsection
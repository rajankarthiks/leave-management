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
                <th>Total Leaves Taken</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> ID </td>
                <td> ID </td>
                <td> ID </td>
                <td> ID </td>
                <td class="center"> ID </td>
                <td class="center">
                    {{ link_to_route('home','Approve',null,array('class'=>'btn btn-xs btn-success')) }} |
                    {{ link_to_route('home','Reject',null,array('class'=>'btn btn-xs btn-danger')) }}
                </td>
            </tr>
            </tbody>
        </table>
    </div><!-- /.table-responsive -->
</div><!-- /.the-box .default -->
<!-- END DATA TABLE -->

@endsection
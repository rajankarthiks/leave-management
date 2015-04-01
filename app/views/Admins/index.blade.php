@extends('layout')

@section('content')

<h1 class="text-success text-center">Test Application</h1>

<!-- BEGIN DATA TABLE -->
<div style="margin-top: 25px;" class="the-box">

    <div class="table-responsive">
        <table class="table table-striped table-hover" id="datatable-baseProducts">
            <thead class="the-box dark full">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->username }} </td>
                <td> {{ $user->email }} </td>
                <td  class="center"> {{ $user->status }} </td>
                <td> {{ $user->created_at }} </td>
                <td> {{ $user->updated_at }} </td>
                <td class="center">
                    {{ link_to_route('edit_user_page','Edit',$user->id,array('class'=>'btn btn-xs btn-success')) }} |
                    {{ link_to_route('delete_user','Delete',$user->id,array('class'=>'btn btn-xs btn-danger')) }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.table-responsive -->
</div><!-- /.the-box .default -->
<!-- END DATA TABLE -->

@endsection
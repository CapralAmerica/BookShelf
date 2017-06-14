@extends('layouts.master')
@section('title')
    {{ 'Admin' }}
@endsection
@section('content')
    <h4 class="text-center">Please authorize as admin</h4>
    <form action="{{route('admin_auth')}}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="admin_name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="admin_name"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="admin_password" class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control"  name="admin_password"  value="">
            </div>
        </div>
        <button class="btn btn-primary large center-block" type="submit">Confirm</button>
    </form>
@endsection
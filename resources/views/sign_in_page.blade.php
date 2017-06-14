@extends('layouts.master')
@section('title')
    {{ 'SignIn' }}
@endsection
@section('content')
    <h4 class="text-center">Sign In</h4>
    <form action="{{ route('sign_in') }}"  method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Email</label>
            <div class="col-md-6">
                <input type="text" class="form-control"  name="email" placeholder="Enter your email" value="{{ Request::old('email') }}">
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control"   name="password" placeholder="Enter your password" value="{{ Request::old('password') }}">
            </div>
        </div>
        <button class="btn btn-primary large center-block" type="submit">Submit</button>
    </form>
@endsection
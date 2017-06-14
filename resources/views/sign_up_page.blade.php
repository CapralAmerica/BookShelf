@extends('layouts.master')
@section('title')
    {{ 'SignUp' }}
@endsection
@section('content')
    <h4 class="text-center">Sign Up</h4>
    <hr>
    <div class="row">
        <div class="col-md-2">
            @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <form action=" {{ route('sign_up') }} " method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ Request::old('name') }}">
            </div>
        </div>
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
    <hr>
@endsection
@extends('layouts.master')
@section('title')
    {{ 'Admin Panel' }}
@endsection
@section('content')
    <form action="{{route('add_new_book')}}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-md-4 control-label">Author</label>
            <div class="col-md-6">
                <input type="text" class="form-control"  name="author"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="preview" class="col-md-4 control-label">Preview</label>
            <div class="col-md-6">
                <input type="text" class="form-control"   name="preview"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-4 control-label">Description</label>
            <div class="col-md-6">
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="preview" class="col-md-4 control-label">Image</label>
            <div class="col-md-6">
                <input type="text" class="form-control"   name="image"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="preview" class="col-md-4 control-label">Available</label>
            <div class="col-md-6">
                <input type="text" class="form-control"   name="is_available"  value="">
            </div>
        </div>
        <div class="form-group">
            <label for="preview" class="col-md-4 control-label">Price</label>
            <div class="col-md-6">
                <input type="text" class="form-control"   name="price"  value="">
            </div>
        </div>
        <button class="btn btn-primary large center-block" type="submit">Add book</button>
    </form>
    <hr>
@endsection
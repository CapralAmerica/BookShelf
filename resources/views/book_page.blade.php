@extends('layouts.master')
@section('title')
  {{ $book->name }}
@endsection
@section('content')
    <div class="row">
       <div class="col-lg-12">
        <img class="img-responsive center-block" src="{{ $book->image }}" alt="" width="300" height="500">
            <h2 class="text-center">{{$book->title}}</h2>
            <p><small>by {{ $book->author }}</small></p>
                 <hr>
                    <p>{{ $book->description }}</p>
                 <hr>
        <h5>{{ $book->price }} $</h5>
            @if ( !($book->is_available))
                <p><a href="#" class="btn btn-primary" role="button" disabled="disabled">Buy</a></p>
            @else   <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
            @endif
       </div>
    </div>
@endsection
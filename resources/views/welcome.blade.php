@extends('layouts.master')
@section('title')
    {{ 'BookShelf' }}
@endsection
@section('content')
    @foreach($books->chunk(3) as $bookChunk)
        <div class="row">
        @foreach($bookChunk as $book)
            <div class="col-sm-8 col-md-6 col-lg-4 clearfix">
                    <div class="thumbnail">
                        <img src="{{ $book->image }}" alt="..." width="150" height="250">
                        <div class="caption">
                            <h3>{{ $book->name }}</h3>
                                <h6>by {{ $book->author }}</h6>
                                     <p>{{ $book->preview }}</p>
                                        <p class="text-right book_price">Price: {{ $book->price }} $</p>
                                @if ( !($book->is_available))
                                        <p><a href="#" class="btn btn-primary" role="button" disabled="disabled">Buy</a> <a href="/book/{{$book->id}}" class="btn btn-success" role="button">Details</a></p>
                                @else   <p><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="/book/{{$book->id}}" class="btn btn-success" role="button">Details</a></p>
                                @endif
                        </div>
                    </div>
                </div>
         @endforeach
        </div>
    @endforeach
@endsection
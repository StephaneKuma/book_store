@extends("layouts.master", ["title" => "Home"])

@section('content')
    <div class="section">
        <div class="row container">
            @foreach($books as $book)
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="images/sample-1.jpg">
                            <span class="card-title">{{ $book->title }}</span>
                        </div>
                        <div class="card-content">
                            <p>{{ $book->description }}</p>
                        </div>
                        <div class="card-action center">
                            <a class="btn waves-effect red darken-4" href="#">{{ $book->price . __('F CFA') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

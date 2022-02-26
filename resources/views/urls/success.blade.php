@extends('default',['title'=>'CreatePage'])

@section('content')

    <div class="col-md-6">
        <h1>Bravo</h1>

        <p>
            <a class="btn btn-primary" href="{{ route('url.show',['id'=>$url->id]) }}">
                {{ action('UrlsController@show',['id'=>$url->id]) }}
            </a>
        </p>
    </div>
@stop
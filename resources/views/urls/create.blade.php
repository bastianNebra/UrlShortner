@extends('layouts.app')

@section('content')

    <div class="container col-md-6">
        <h1>You can short the url here,thank's</h1>

        <form action="{{ route('url.store') }}" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="url" >Url:</label>
                <input type="text" id="url" name="url" placeholder="https://url........." class="form-control" value="{{ old('url')?old('url'):'' }}">
                <P CLASS="alert-danger">{{ $errors->first('url',':message') }}</P>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Shortner">
            </div>

        </form>
    </div>
@stop

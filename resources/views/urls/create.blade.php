@extends('default',['title'=>'CreatePage'])

@section('content')

    <div class="col-md-6">
        <h1>You can short the url here,thank's</h1>

        <form action="{{ route('url.store') }}" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="url" >Url:</label>
                <input type="text" id="url" name="url" placeholder="https://url........." class="form-control" value="{{ old('url')?old('url'):'' }}">
                {{ $errors->first('url','<p>:message</p>') }}
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Shortner">
            </div>

        </form>
    </div>
@stop
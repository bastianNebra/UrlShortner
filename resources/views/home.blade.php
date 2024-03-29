@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <a href="{{route('url.list')}}" class="alert-secondary right flex-lg-wrap">Url List</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->name }}!
                    <a href="{{ route('url.create') }}" class="btn btn-primary">Click here and short your url</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

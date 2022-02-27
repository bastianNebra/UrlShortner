@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <p> List von Url</p>

                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Url</th>
                                    </tr>
                                    </thead>
                                    @foreach ($urls as $url)

                                        @if ($urls == null)
                                            <p>Kein Url</p>
                                        @endif
                                            <tbody>
                                                <tr>
                                                    <td>{{ $url->id }}</td>
                                                    <td>{{ $url->url }}</td>
                                                </tr>
                                            </tbody>
                                    @endforeach
                                </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{$user->avatar}}" alt="avatar profil" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
            <h2>{{ $user->name }} Profil</h2>

            <form enctype="multipart/form-data" action="{{ route('profil.update') }}" method="post">
                <label for="avatar">Changer votre photo de profil</label><hr>
                <input type="file" name="avatar" id="avatar" class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Enregistrer" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection

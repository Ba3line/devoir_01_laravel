@extends('layouts.app')
@section('content')
    @foreach ($arrayCombinBack as $valeur)
        @include('team.web.dev.backend')
    @endforeach
@endsection
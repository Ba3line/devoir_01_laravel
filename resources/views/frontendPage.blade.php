@extends('layouts.app')
@section('content')
    @foreach ($arrayCombin as $valeur)
        @include('team.web.dev.frontend')
    @endforeach
@endsection

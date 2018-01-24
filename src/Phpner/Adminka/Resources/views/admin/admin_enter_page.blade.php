@extends('phpner::views\layouts.admin_layouts')
@section('content')
    <h1 class="text-center">Привет {{auth()->user()->name}}</h1>
@endsection
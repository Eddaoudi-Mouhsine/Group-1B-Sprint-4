@extends('layouts/master')

@section('css')

@endsection

@section('name_page')
    Groupes
@endsection

@section('title-1')
    groupe
@endsection

@section('title-2')
    dashboard
@endsection

@section('content')

    @foreach ($select_groupe as $groupe)
        <h1>{{ $groupe->name }}</h1>
        <h1>{{ $groupe->anneeFormation->année_formation }}</h1>
    @endforeach

@endsection

@section('scripts')

@endsection

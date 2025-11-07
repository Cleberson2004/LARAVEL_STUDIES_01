@extends('layouts.main_layout')
@section('content')

@if(!empty($MyName))
    <p>Olá, {{ $MyName }}!</p>
@endif

@endsection
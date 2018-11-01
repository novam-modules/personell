@extends('layouts.master')
@section('head')
    <title>Personnel {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/personnel.css') }}">
@endsection
@section('layout')
<div id="personnel" class="personnel">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/personnel.js') }}"></script>
@endsection

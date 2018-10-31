@extends('layouts.master')
@section('head')
    <title>Personell {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/personell.css') }}">
@endsection
@section('layout')
<div id="personell" class="personell">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/personell.js') }}"></script>
@endsection

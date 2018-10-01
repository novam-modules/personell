@extends('personell::layouts.master')

@section('content')
    <h1 class="d-flex align-items-center justify-content-center">
        <a href="/admin/personell/employees">
            <i class="material-icons md-36" data-hide="#new-emp.collapse">undo</i>
        </a>
        <span class="w-100 text-center">{{ $employee->contact->name }}</span>
        <a href="#new-emp" data-toggle="modal">
            <i class="material-icons md-36">add_circle_outline</i>
        </a>
    </h1>

    <employee-viewer></employee-viewer>
@stop

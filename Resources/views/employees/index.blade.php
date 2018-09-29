@extends('personell::layouts.master')

@section('content')
    <h1 class="w-100">
        Employees
        <a href="#new-emp" data-toggle="collapse" class="float-right">
            <i class="material-icons md-36" data-hide="#new-emp.collapse">add_circle_outline</i>
        </a>
    </h1>

    <employees-list
        :model='@json($employees)'
        :action="'/admin/personell/employees'"
    >
    </employees-list>
@stop

@extends('personell::layouts.master')

@section('content')
    <h1 class="w-100 text-center">
        <a href="/admin/personell" class="float-left">
            <i class="material-icons md-36">undo</i>
        </a>
        Employees
        <a href="#new-emp" data-toggle="modal" class="float-right">
            <i class="material-icons md-36" data-swap="add_circle_outline remove">add_circle_outline</i>
        </a>
    </h1>

    <employees-list
        :model='@json($employees)'
        :action="'/admin/personell/employees'"
        :dept-url="'/admin/personell/departments'"
    >
    </employees-list>

    <modal-viewer
        :modal-id="'new-emp'"
        :modal-title="'New employee'">
        <employee-editor
            :action="'/admin/personell/employees'"
            :dept-url="'/admin/personell/departments'"
            :model='@json($employees)'>
        </employee-editor>
    </modal-viewer>
@stop

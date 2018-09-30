@extends('personell::layouts.master')

@section('content')
    <h1 class="d-flex align-items-center">
        <a href="/admin/personell/employees">
            <i class="material-icons md-36" data-hide="#new-emp.collapse">undo</i>
        </a>
        <span class="w-100">Employees</span>
        <a href="#new-emp" data-toggle="modal">
            <i class="material-icons md-36">add_circle_outline</i>
        </a>
    </h1>

    <employees-list
        :model='@json($employee)'
        :action="'/admin/personell/employees'"
        :dept-url="'/admin/personell/departments'">
    </employees-list>
    <modal-viewer
        :modal-id="'new-emp'"
        :modal-title="'New employee'">
        <employee-editor
            :action="'/admin/personell/employees'"
            :model='@json($employees ?? [])'>
        </employee-editor>
    </modal-viewer>
@stop

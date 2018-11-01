@extends('personnel::layouts.master')

@section('content')
    <h1 class="w-100 text-center">
        <a href="/admin/personnel" class="float-left">
            <i class="material-icons md-36">undo</i>
        </a>
        Employees
        <a href="#new-emp" data-toggle="modal" class="float-right">
            <i class="material-icons md-36" data-swap="add_circle_outline remove">add_circle_outline</i>
        </a>
    </h1>

    <employees-list
        :model='@json($employees)'
        :action="'/admin/personnel/employees'"
        :dept-url="'/admin/personnel/departments'">

        {{--  <modal-viewer
            :modal-id="'new-emp'"
            :modal-title="'New employee'">
            <employee-editor
                :action="'/admin/personnel/employees'"
                :dept-url="'/admin/personnel/departments'"
                :model='@json($employees)'>
            </employee-editor>
        </modal-viewer>  --}}

    </employees-list>


@stop

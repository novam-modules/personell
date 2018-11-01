@extends('personnel::layouts.master')

@section('content')
    <h1 class="w-100 text-center">
        <a href="/admin/personnel" class="float-left">
            <i class="material-icons md-36" data-hide="#new-dept.collapse">settings_backup_restore</i>
        </a>
        Departments
        <a href="#new-emp" data-toggle="collapse" class="float-right">
            <i class="material-icons md-36" data-hide="#new-dept.collapse">add_circle_outline</i>
        </a>
    </h1>

    {{--  <employees-list
        :model='@json($departments ?? [])'
        :action="'/admin/personnel/departments'"
        :dept-url="'/admin/personnel/departments'"
    >
    </employees-list>  --}}
    <departments :action="'/admin/personnel/departments'"></departments>
@stop

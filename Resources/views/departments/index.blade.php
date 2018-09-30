@extends('personell::layouts.master')

@section('content')
    <h1 class="w-100 text-center">
        <a href="/admin/personell" class="float-left">
            <i class="material-icons md-36" data-hide="#new-dept.collapse">settings_backup_restore</i>
        </a>
        Departments
        <a href="#new-emp" data-toggle="collapse" class="float-right">
            <i class="material-icons md-36" data-hide="#new-dept.collapse">add_circle_outline</i>
        </a>
    </h1>

    {{--  <employees-list
        :model='@json($departments ?? [])'
        :action="'/admin/personell/departments'"
        :dept-url="'/admin/personell/departments'"
    >
    </employees-list>  --}}
    <departments :action="'/admin/personell/departments'"></departments>
@stop

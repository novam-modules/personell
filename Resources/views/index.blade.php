@extends('personell::layouts.master')

@section('content')
    <h1>Personell</h1>

    <div class="card-deck mb-3">
        <div class="card">
            <div class="card-header card-primary">
                <h4 class="card-title m-0">
                    Employees
                    <a href="/admin/personell/employees" class="float-right btn btn-sm btn-outline-primary">
                        <i class="fa fa-fw fa-external-link-alt"></i>
                    </a>
                </h4>
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="card">
            <div class="card-header card-primary">
                <h4 class="card-title m-0">User Groups</h4>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="card-deck my-3">
            <div class="card">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">Work Teams</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">
                        Departments
                        <a href="/admin/personell/departments" class="float-right btn btn-sm">
                            <i class="fa fa-fw fa-external-link-alt fa-lg"></i>
                        </a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="card-deck my-3">
            <div class="card col-md-12 col-lg-6">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">Job Positions</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card col-md-12 col-lg-6">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">Permissions</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
@stop

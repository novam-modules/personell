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

<div class="row">

        @foreach ($employees as $emp)
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        {{--  <span style="background-image: url(https://d19m59y37dris4.cloudfront.net/admn-premium/1-4-4/img/avatar-{{$emp->id}}.jpg)"
                            class="avatar avatar-xl mr-3"></span>  --}}
                            <span style="background-image: url({{$emp->photo ?? '//placehold.it/100X100?text='.acronym($emp->email)}})"
                            class="avatar avatar-xl mr-3"></span>
                        <div class="media-body overflow-hidden">
                            <h5 class="card-text mb-0">{{ $emp->name }}</h5>
                            <p class="card-text text-uppercase text-muted">{{ $emp->job }}</p>
                            <p class="card-text">
                                {{$emp->email }}
                                <br>
                                <abbr title="Phone">P: </abbr>{{ $emp->phone }}
                            </p>
                        </div>
                    </div><a href="pages-profile.html" class="tile-link"></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="modal fade" id="new-emp" tabindex="-1" role="dialog" aria-labelledby="newEmployeeLabel" aria-hidden="true">
    <form class="modal-dialog" role="document" action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newEmployeeLabel">New Employee Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @include('personnel::employees.create')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
    </div>

@endsection

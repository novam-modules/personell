<?php

namespace Modules\Personell\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Personell\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Department $dept)
    {
        $departments = [];
        if(request()->ajax()){
            return $departments = $dept->all();
        }
        // dd($departments);
        return view('personell::departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('personell::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $dept = Department::create($request->all());
        return response()->json($dept);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('personell::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('personell::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

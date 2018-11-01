<?php

namespace Modules\Personnel\Http\Controllers;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Personnel\Models\Contact;
use Modules\Personnel\Models\Employee;
use Modules\Personnel\Http\Resources\EmployeesData;
use Modules\Personnel\Http\Requests\CreateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $employees = EmployeesData::collection(User::all());

        if($request->ajax()) return $employees;

        return view('personnel::employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('personnel::employees.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {

        try{
            $EMP = \DB::transaction(function () use($request) {

                $password = bcrypt($request->password);
                $request->merge(compact('password'));

                $user  = User::create($request->all());
                $group = $user->group;

                $request->merge(['user_id' => $user->id]);

                $employee  = Employee::create($request->all());

                $contact  = Contact::create($request->all());

                return compact('user', 'group', 'employee', 'contact');

            });
            return response()->json($EMP);

        } catch(\Exception $e){

            return response('Error: '.$e->getMessage(), 500);
        }

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $employee = User::find($id)->load('employee');
        return view('personnel::employees.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('personnel::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
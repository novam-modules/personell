<?php

namespace Admin\Personell\Http\Controllers;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Admin\Personell\Models\Contact;
use Admin\Personell\Models\Employee;
use Admin\Personell\Http\Resources\EmployeesData;

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

        return view('personell::employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('personell::employees.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        try{
            $EMP = \DB::transaction(function () use($request) {

                $request->merge([
                    'password' =>bcrypt($request->password)
                ]);
                $NewUser = User::create($request->all());

                $Employee  = Employee::create(['user_id' => $NewUser->id]);
                $Employee->fill($request->all())->save();

                $Contact  = Contact::create(['user_id' => $NewUser->id]);
                $Contact->fill($request->all())->save();

                return [
                    'user' => $user = $NewUser->first(),
                    'employee' => $Employee->first(),
                    'contact' => $Contact->first(),
                    'group' => $user->group
                ];

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

<?php

namespace Modules\Personnel\Http\Controllers;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
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
        // $employees = EmployeesData::collection(User::all());

        // if($request->ajax()) return $employees;
        $Faker = \Faker\Factory::create();
        $genders = ['male' => 'men', 'female' => 'women'];

        for ($i = 0, $n = 20; $i < $n; $i++) {
            $employees[$i] = (object)[
                'id' => $i,
                'gender' => $gender = ['male', 'female'][mt_rand(0,1)],
                'name' => $Faker->name($gender),
                'job' => $Faker->jobTitle,
                'email' => $Faker->email,
                'phone' => $Faker->phoneNumber,
                'photo' => "https://randomuser.me/api/portraits/{$genders[$gender]}/{$i}.jpg"
            ];
        }
        $Account = $request->user()->account;
        $employees = $Account->users;
        // $employees = $employees + User::all();

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
        try {
            $request->merge([
                'password' => bcrypt($request->password),
                'account_id' => $request->user()->account_id,
                'group_id' => -1
            ]);

            $User = User::create($request->except('_token'));
            $request->merge(['user_id' => $User->id]);
            $Employee  = Employee::create($request->all());
            $User->notify(new EmploymentAdded($Employee));
            return back()->withStatus(['success' => 'Done']);
        }
        catch (\Exception $e) {
            return back()->withStatus(['error' => $e->getMessage()]);
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

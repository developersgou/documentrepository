<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departmentlist=Department::all();
        return view("admin.department.departmentlist",["departmentlist"=>$departmentlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $userdetails=User::where('role',2)->get();
        return view('admin.department.createdepartment',["userdetails"=>$userdetails]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          request()->validate([
        "dept_name"=>'required',
        "dept_head"=>'required',
       
        ],
        [
        'dept_name.required' => 'Field is mandatory.',
        'dept_head.required' => 'Field is mandatory.',

       ]);

        $department= new Department;
        $department->dept_name=request("dept_name");
         $department->dept_head=request("dept_head");
        $department->dept_status=1;
        $department->save();
        return redirect()->back()->with('message', 'Department Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departmentlist= Department::find($id);
       return view('admin.department.updatedepartment',["departmentlist"=>$departmentlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
        "dep_name"=>'required',
       
        ],
        [
        'dep_name.required' => 'Field is mandatory.',

       ]);

        $department= Department::find($id);
        $department->dep_name=request("dep_name");
        $department->dep_status=1;
        $department->save();
         return redirect()->back()->with('message', 'Department Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department= Department::find($id);
        $department->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

     public function statusChange($id, $status)
    {
       $department= Department::find($id);
       $department->dept_status=$status;
       $department->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
    }
}

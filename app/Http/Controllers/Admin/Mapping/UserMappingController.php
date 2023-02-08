<?php

namespace App\Http\Controllers\Admin\Mapping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Department;
use App\Models\General\Usermapping;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mapping=Usermapping::all();
         return view('admin.mapping.mapping-list',["mapping"=>$mapping]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userdetails=User::where('role','>',1)->get();
        $departmentlist=Department::where('dept_status',1)->get();
        return view('admin.mapping.create-mapping',["userdetails"=>$userdetails,"departmentlist"=>$departmentlist]);
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
        "user_id"=>'required|unique:usermappings,user_id',
        "dept_id"=>'required',
        "user_designation"=>'required',

       
       
        ],
        [
        'user_id.required' => 'Field is mandatory.',
        'dept_id.required' => 'Field is mandatory.',
        'user_id.unique' => 'Sorry User is already mapped.',
        'user_designation.required' => 'Field is mandatory.',

       ]);
        

        $dept_id = $request->dept_id;
        $dept_id = implode(',',$dept_id);
        $mapping= new Usermapping;
        $mapping->user_id=request("user_id");
        $mapping->dept_id=$dept_id;
        $mapping->user_designation=request("user_designation");
        $mapping->mapping_status=1;
        $mapping->save();
        return redirect()->back()->with('message', 'Mapping Created Successfully!');
    }

    public function mappingStatusChange($id, $status)
    {
       $user= Usermapping::find($id);
       $user->mapping_status=$status;
       $user->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

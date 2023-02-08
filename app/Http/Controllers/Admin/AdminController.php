<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Department;
use App\Models\General\Documents;
use App\Models\General\Usermapping;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usercount = User::where('role','>',1)->count();
        $depcount= Department::count();
         $doccount= Documents::where('doc_status',1)->count();
        $documentpending= Documents::where('doc_status',0)->count();
         $mappingcount=Usermapping::count();
         //$notification=JobNotification::where('job_status',1)->orderBy('id', 'DESC')->get();
        //return view('admin.dashboard',["usercount"=>$usercount,"jobcount"=>$jobcount,"notification"=>$notification]);
        return view('admin.dashboard',
        [
            "usercount"=>$usercount,
            "depcount"=>$depcount,
            "doccount"=>$doccount,
            "documentpending"=>$documentpending,
            "mappingcount"=>$mappingcount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Department;
use App\Models\General\Documents;
use App\Models\General\Usermapping;
use Carbon\Carbon;
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
          $trashcount=Documents::where('doc_status',2)->count();
           $document=Documents::where('doc_status',1)->get();
        //return view("admin.document.documentlist",["document"=>$document]);
         //$notification=JobNotification::where('job_status',1)->orderBy('id', 'DESC')->get();
        //return view('admin.dashboard',["usercount"=>$usercount,"jobcount"=>$jobcount,"notification"=>$notification]);
        return view('admin.dashboard',
        [
            "usercount"=>$usercount,
            "depcount"=>$depcount,
            "doccount"=>$doccount,
            "documentpending"=>$documentpending,
            "mappingcount"=>$mappingcount,
            "trashcount"=>$trashcount,
            "document"=>$document
        ]);
    }

     public function datefiter(Request $request)
    {

           request()->validate(
            [
                "fromdate" => 'required',
                "todate" => 'required',
               
            ],
            [
                'fromdate.required' => 'Field is mandatory.',
                'todate.required' => 'Field is mandatory.',
                
               

            ]
        );

        $usercount = User::where('role','>',1)->count();
        $depcount= Department::count();
         $doccount= Documents::where('doc_status',1)->count();
        $documentpending= Documents::where('doc_status',0)->count();
         $mappingcount=Usermapping::count();
          $trashcount=Documents::where('doc_status',2)->count();
           $document=Documents::where('doc_status',1)->get();
       $from = $request->input('fromdate');
        $to = $request->input('todate');
    //DD($from);
        //$startDate = Carbon::createFromFormat('m/d/Y', $from);
        //$endDate = Carbon::createFromFormat('m/d/Y', $to)->format('Y-m-d');
        //DD($startDate);

    // Search in the title and body columns from the posts table
        $document = Documents::whereBetween('doc_approval_date', [$from, $to])->get();
       
        return view('admin.dashboard',
        [
            "usercount"=>$usercount,
            "depcount"=>$depcount,
            "doccount"=>$doccount,
            "documentpending"=>$documentpending,
            "mappingcount"=>$mappingcount,
            "trashcount"=>$trashcount,
            "document"=>$document
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

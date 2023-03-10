<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Department;
use App\Models\General\Usermapping;
use App\Models\General\Documents;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class DepartmentheadController extends Controller
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
        $mappingcount=Usermapping::count();
        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');    
        $dep = explode(',',$dept); 
        $documentpending=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->count();
        $documentcount=Documents::where('doc_status',1)->count();
        $trashcount=Documents::where('doc_status',2)->count();
        $document=Documents::where('doc_status',1)->get();
        //return view("departmenthead.document.documentList",["document"=>$document]);

         //$notification=JobNotification::where('job_status',1)->orderBy('id', 'DESC')->get();
        //return view('admin.dashboard',["usercount"=>$usercount,"jobcount"=>$jobcount,"notification"=>$notification]);
        return view('departmenthead.dashboard',
            [
                "usercount"=>$usercount,
                "depcount"=>$depcount,
                "mappingcount"=>$mappingcount,
                "documentpending"=>$documentpending,
                "documentcount"=>$documentcount,
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
        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');    
        $dep = explode(',',$dept); 
        $documentpending=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->count();
        $documentcount=Documents::where('doc_status',1)->count();
        //$document=Documents::where('doc_status',1)->get();        
        $from = $request->input('fromdate');
        $to = $request->input('todate');
        $trashcount=Documents::where('doc_status',2)->count();
        $startDate = Carbon::createFromFormat('Y-m-d', $from);
        $endDate = Carbon::createFromFormat('Y-m-d', $to);
        //DD($startDate);

    // Search in the title and body columns from the posts table
        $document = Documents::whereBetween('doc_approval_date', [$from, $to])->get();

       return view('departmenthead.dashboard',
            [
               
               
                "documentpending"=>$documentpending,
                "documentcount"=>$documentcount,
                "document"=>$document,
                "trashcount"=>$trashcount,
                
            ]);       
         
}

    public function getUser()
    {
        $userdetails=User::where('role','>',1)->get();
        return view('departmenthead.users.userslist',["userdetails"=>$userdetails]);
    }

    public function getDepartment()
    {
        $departmentlist=Department::all();
        return view("departmenthead.department.departmentList",["departmentlist"=>$departmentlist]);
    }

     public function getPendingDocument()
    {
        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');    
        $dep = explode(',',$dept); 
        $document=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->get();
        return view("departmenthead.Document.approval-pending",["document"=>$document]);
    }

      public function getDocument()
    {
        
        $document=Documents::where('doc_status',1)->get();
        return view("departmenthead.document.documentList",["document"=>$document]);
    }

      public function getDocumentTrash()
    {
        
        $document=Documents::where('doc_status',2)->get();
        return view("departmenthead.document.trashlist",["document"=>$document]);
    }
     public function statusChange($id, $status)
    {
       $document= Documents::find($id);
       $document->doc_status=$status;
       $document->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
    }

     public function trash($id, $status)
    {
       $document= Documents::find($id);
       $document->doc_status=$status;
       $document->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
    }

      public function removetrash($id, $status)
    {
       $document= Documents::find($id);
       $document->doc_status=$status;
       $document->save();
        return redirect()->back()->with('message', 'Status Update  Successfully!');
    }
    
    public function mapping()
    {
         $mapping=Usermapping::all();
         return view('departmenthead.mapping.mapping-list',["mapping"=>$mapping]);
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

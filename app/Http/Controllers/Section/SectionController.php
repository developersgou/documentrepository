<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Department;
use App\Models\General\Usermapping;
use App\Models\General\Documents;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');    
        $dep = explode(',',$dept); 

        $department=Department::where('dept_status',1)->get();
        $documentpending=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->count();
        $documentcount=Documents::where('doc_status',1)->count();
        $document=Documents::where('doc_status',1)->get();

        return view('section.dashboard',
            [
               
               
                "documentpending"=>$documentpending,
                "documentcount"=>$documentcount,
                "document"=>$document,
                "department"=>$department
                
            ]);       
         
    }

    public function fiter(Request $request)
    {

        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');    
        $dep = explode(',',$dept); 
        $documentpending=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->count();
        $documentcount=Documents::where('doc_status',1)->count();
        //$document=Documents::where('doc_status',1)->get();        
        $search = $request->input('search');
        $search2 = $request->input('search2');
        $search3 = $request->input('search3');
        $from = $request->input('fromdate');
        $to = $request->input('todate');

        $department=Department::where('dept_status',1)->get();
        //DD($startDate);

    // Search in the title and body columns from the posts table
        $document = Documents::query()
        ->where('doc_number', 'LIKE', "%{$search}%")
        ->orWhere('doc_type', 'LIKE', "%{$search}%")
        ->orWhere('doc_department', 'LIKE', "%{$search2}%")
        ->orWhere('doc_approval_date', 'LIKE', "%{$search3}%")   
        ->get();

       return view('section.dashboard',
            [
               
               
                "documentpending"=>$documentpending,
                "documentcount"=>$documentcount,
                "document"=>$document,
                "department"=>$department
                
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

        $startDate = Carbon::createFromFormat('Y-m-d', $from);
        $endDate = Carbon::createFromFormat('Y-m-d', $to);
        //DD($startDate);

    // Search in the title and body columns from the posts table
        $document = Documents::whereBetween('doc_approval_date', [$from,$to])->get();

       return view('section.dashboard',
            [
               
               
                "documentpending"=>$documentpending,
                "documentcount"=>$documentcount,
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

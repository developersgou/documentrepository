<?php

namespace App\Http\Controllers\Section\Document;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Department;
use App\Models\General\Documents;
use App\Models\General\Usermapping;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DocumentManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document=Documents::where('doc_status',1)->paginate(5);
        return view("Section.Document.documentlist",["document"=>$document]);
    }
   
     public function getPendingDocument()
    {
        $user = auth()->user();
        $dept = Usermapping::where('user_id',$user->id)->value('dept_id');
        
        $dep = explode(',',$dept); 
        $document=Documents::where('doc_status',0)->whereIn('doc_department',$dep)->get();
        return view("section.Document.approval-pending",["document"=>$document]);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departmentlist=Department::get();
        $user = auth()->user();     
        $checkmapping=Usermapping::where('user_id',$user->id)->value('dept_id');
        if($checkmapping =="")
        {
      
        return redirect()->route('section.warning-mapping');  
        }

         else
         {
    
        $dept=Usermapping::where('user_id',$user->id)->value('dept_id');
        return view('section.Document.Createdocument',["departmentlist"=>$departmentlist,"dept"=>$dept]);

         }
        
    }
     public function mappingCheck()
    {
        return view("section.Document.warning-mapping");
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
        "doc_number"=>'required',
        "doc_name"=>'required',
        "doc_approval_date"=>'required',
        "dep_id"=>'required',
        "doc_filetype"=>'required',
        "doc_document"=>'required|mimes:pdf',
        "doc_remarks"=>'required',
        ],
        [

        'doc_number.required' => 'Field is mandatory.',
        'doc_name.required' => 'Field is mandatory.',
        'doc_approval_date.required' => 'Field is mandatory.',
        'dep_id.required' => 'Field is mandatory.',
        'doc_filetype.required' => 'Field is mandatory.',
        'doc_document.required' => 'Field is mandatory.',
        'doc_document.mimes' => 'You can upload PDF only.',
        'doc_remarks.required' => 'Field is mandatory.',

       ]);

         if($request->hasFile('doc_document'))
           {

            $folder = 'uploads/documents/';  
            $img_ext = $request->file('doc_document')->getClientOriginalExtension();
            $filename1 = time() . '.' . $img_ext;
            $doc_document = $request->file('doc_document')->move($folder, $filename1);
   
            }
        $user = auth()->user();
        $document= new Documents;
        $document->doc_number=request("doc_number");
        $document->doc_name=request("doc_name");
        $document->doc_type=request("doc_filetype");
        $document->doc_department=request("dep_id");
        $document->doc_approval_date=request("doc_approval_date");
        $document->doc_uploaded_by=$user->user_name;
        $document->doc_document=$doc_document;
        $document->doc_remarks=request("doc_remarks");
        $document->doc_ext=$img_ext;
        $document->doc_status =0;
        $document->save();
        return redirect()->back()->with('message', 'Document Created Successfully!');
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

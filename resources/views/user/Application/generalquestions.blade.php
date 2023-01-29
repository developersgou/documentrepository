
@section("title","SGOU|JOB")
@extends("userlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
         <span class="badge rounded-pill bg-danger">Step 1 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
      <span  class="badge rounded-pill bg-danger">Step 2 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
       <span class="badge rounded-pill bg-danger" >Step 3 <i class="bi bi-exclamation-octagon me-1"></i></span>----------

 <span class="badge rounded-pill bg-danger">Step 4 <i class="bi bi-exclamation-octagon me-1"></i></span>----------

 <span class="badge rounded-pill bg-danger">Step 5 <i class="bi bi-exclamation-octagon me-1"></i></span>
     </div>       
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">GENERAL QUESTIONS</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('user.storegeneralquestions') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                <!-- <div class="col-md-12">

                  <label for="inputName5" class="form-label">Have you done content (SLM) writing of SGOU?</label>
                   <select class="form-control" name="questions_content" value="{{old('questions_content')}}" onchange="checkSlm();" id="questions_content">
                  
                    <option value="" hidden>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    
                 
                    
                </select>

                                 @error("questions_content")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("questions_content")}}</span>
                            @enderror
                </div>
 -->
     <!--  <div class="col-12" id="slmcontent" style="display: none;">
              <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputName1" class="form-label">Programme</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_programme" value="{{old('questions_programme')}}">
                         
                           @error("questions_programme")
                            <p style="color:red">{{$errors->first("questions_programme")}}</p>
                            @enderror
                      </div>

                      <div class="col-md-6">
                        <label for="exampleInputName1" class="form-label">No. of blocks</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_blocks" value="{{old('questions_blocks')}}">
                         
                           @error("questions_blocks")
                            <p style="color:red">{{$errors->first("questions_blocks")}}</p>
                            @enderror
                      </div>

                    
   </div>
</div> -->

              <div class="col-md-6">
              <label for="inputName5" class="form-label">Choose Discipline</label>
                   <input type="hidden"  value="{{$job_id}}" name="job_id">
                   <input list="discipline" class="form-control"  autofocus  name="questions_discipline" value="{{old('questions_discipline')}}">
                 
                  <datalist id="discipline">
                   
                    <!-- <option value="English">English</option>
                    <option value="Malayalam">Malayalam</option> -->
                    <option value="Hindi">Hindi</option>
                    <!-- <option value="Sanskrit">Sanskrit</option>
                    <option value="Arabic">Arabic</option>
                    <option value="History">History</option>
                    <option value="Environmental Science">Environmental Science</option> -->
                    
                 </datalist>

                                 @error("questions_discipline")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("questions_discipline")}}</span>
                            @enderror
                </div>


              <div class="col-md-6">

                  <label for="inputName5" class="form-label">Employment Status</label>
                   <select class="form-control" name="questions_empstatus" value="{{old('questions_empstatus')}}" onchange="checkEmpstatus();" id="questions_empstatus">
                  
                    <option value="" hidden>Select Status</option>
                    <option value="Employed">Employed</option>
                    <option value="Unemployed">Unemployed</option>
         <!--            <option value="Retired">Retired</option> -->
                 
                    
                </select>

                                 @error("questions_empstatus")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("questions_empstatus")}}</span>
                            @enderror
                </div>

                 <div class="col-12" id="empstatuspresent" style="display: none;">
              <div class="row">
                    <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Present Designation</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_designation" value="{{old('questions_designation')}}">
                         
                           @error("questions_designation")
                            <p style="color:red">{{$errors->first("questions_designation")}}</p>
                            @enderror
                      </div>

                      <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Institution/Office</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_institution" value="{{old('questions_institution')}}">
                         
                           @error("questions_institution")
                            <p style="color:red">{{$errors->first("questions_institution")}}</p>
                            @enderror
                      </div>

                    <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Employer</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_employer" value="{{old('questions_employer')}}">
                         
                           @error("questions_employer")
                            <p style="color:red">{{$errors->first("questions_employer")}}</p>
                            @enderror
                      </div>
   </div>
</div>
<div class="col-12" id="empstatuslast" style="display:none;">
    <div class="row">

                    <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Last Designation</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_last_designation" value="{{old('questions_last_designation')}}">
                         
                           @error("questions_last_designation")
                            <p style="color:red">{{$errors->first("questions_last_designation")}}</p>
                            @enderror
                      </div>

                      <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Institution/Office last attended</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_last_institution" value="{{old('questions_last_institution')}}">
                         
                           @error("questions_last_institution")
                            <p style="color:red">{{$errors->first("questions_last_institution")}}</p>
                            @enderror
                      </div>

                    <div class="col-md-4">
                        <label for="exampleInputName1" class="form-label">Last Employer</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_last_employer" value="{{old('questions_last_employer')}}">
                         
                           @error("questions_last_employer")
                            <p style="color:red">{{$errors->first("questions_last_employer")}}</p>
                            @enderror
                      </div>

   </div>
</div>


             <!--  <div class="col-md-6">
              <label for="inputName5" class="form-label">Preferred Location</label>
                   
                   <input list="location" class="form-control"  autofocus  name="questions_location" value="{{old('questions_location')}}">
                 
                  <datalist id="location">
                   
                    <option value="Nalamchira">Nalamchira,Thiruvananthapuram</option>
                    <option value="Chemmanmukku">Chemmanmukku,Kollam</option>
                    <option value="Adoor">Adoor,Pathanamthitta</option>
                    <option value="Kayamkulam">Kayamkulam,Alappuzha</option>
                    <option value="Nattakam">Nattakam,Kottayam</option>
                    <option value="Kattappana">Kattappana,Idukki</option>
                    <option value="Kochi">Kochi,Ernakulam</option>
                    <option value="Kayamkulam">Kuttanellur,Thrissur</option>
                    <option value="Pattambi">Pattambi,Palakkad</option>
                    <option value="Munduparamba">Munduparamba,Malappuram</option>
                    <option value="Farook">Farook College P O,Kozhikode</option>
                    <option value="Puzhamudi">Puzhamudi,Wayanad</option>
                    <option value="Thalassery">Thalassery,Kannur</option>
                    <option value="Vidyanagar">Vidyanagar,Kasargod</option>
                  
                    
                 </datalist>

                                 @error("questions_location")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("questions_location")}}</span>
                            @enderror
                </div> -->
                   
                      <div class="col-md-12">
                        <label for="exampleInputName1" class="form-label">Transaction Reference Number</label>
                        <input type="text" class="form-control" id="" autofocus  name="questions_transaction_no" value="{{old('questions_transaction_no')}}">
                         
                           @error("questions_transaction_no")
                            <p style="color:red">{{$errors->first("questions_transaction_no")}}</p>
                            @enderror
                      </div>

                       <div class="col-md-12">
                    <p style="color:red">
                        Please enter the payment Transaction Reference Number in the above field to continue application.
                    </p>
                       <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=4344157" class="btn btn-primary" target="_blank">Click here to pay</a>
                      </div> 
                   
                   
                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">CONTINUE</button>
                  <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
                   
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
 <script type="text/javascript">
    function checkEmpstatus()
    {
        $status=document.getElementById('questions_empstatus').value;
       if($status=="Employed")
       {
          
        document.getElementById('empstatuspresent').style.display="block";
         document.getElementById('empstatuslast').style.display="none";
       }
       else if($status=="Retired")
       {
       
         document.getElementById('empstatuslast').style.display="block";
         document.getElementById('empstatuspresent').style.display="none";
       }
       else
       {
       
         document.getElementById('empstatuspresent').style.display="none";
         document.getElementById('empstatuslast').style.display="none";
       }
    } 
 </script>
 <script type="text/javascript">
    function checkSlm()
    {
        $status1=document.getElementById('questions_content').value;
       if($status1=="Yes")
       {
          
        document.getElementById('slmcontent').style.display="block";
         
       }
       else if($status1=="No")
       {
       document.getElementById('slmcontent').style.display="none";
       }
       // else
       // {
       
       //   document.getElementById('empstatuspresent').style.display="none";
       //   document.getElementById('empstatuslast').style.display="none";
       // }
    } 
 </script>

    @endsection

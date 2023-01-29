
@section("title","SGOU|DOCUMENT PREVIEW")
@extends("userlayouts.theme")
@section("maincontent")

     <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
<span class="badge  rounded-pill bg-success">Step 1 <i class="bi bi-check-circle-fill"></i></span>----------
<span  class="badge rounded-pill bg-success">Step 2 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success" >Step 3 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success">Step 4 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-danger">Step 5 <i class="bi bi-exclamation-octagon me-1"></i></span>
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">APPLICATION PREVIEW </h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('user.submitapplication') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                     <div class="col-12">

        @foreach($pdetails as $pdetail)
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">PERSONAL PROFILE</h5>
                <table class="table table-bordered">
                     <tr>
                        <th>Photo</th>
                        <td><img src="{{asset($pdetail->personal_photo)}}" height="150" width="150"></td>
                        <th>Signature</th>
                        <td colspan="2"><img src="{{asset($pdetail->personal_signature)}}" height="150" width="150"></td>
                   </tr>
                  <tr>
                  <tr>
                    <th>Name</th>
                    <td>{{$pdetail->personal_name}}</td>
                    <th>Parent/Guardian</th>
                    <td>{{$pdetail->personal_parent}}</td>
                    
                  </tr>
                  <tr>
                    <th>Reltaionship with applicant</th>
                    <td>{{$pdetail->personal_relation}}</td>
                    <th>Gender</th>
                    <td>{{$pdetail->personal_gender}}</td>
                  </tr>
                  <tr>
                    <th>Date of Birth</th>
                    <td>{{$pdetail->personal_dob}}</td>
                    <th>Religion</th>
                    <td>{{$pdetail->personal_religion}}</td>
                  </tr>
                  <tr>
                    <th>Caste</th>
                    <td>{{$pdetail->personal_caste}}</td>
                    <th>Caste Category</th>
                    <td>{{$pdetail->personal_category}}</td>
                  </tr>
                  <tr>
                    <th>Identity proof</th>
                    <td>{{$pdetail->personal_id}}</td>
                    <th>ID Card Number</th>
                    <td>{{$pdetail->personal_id_no}}</td>
                  </tr>
                  <tr>
                    <th>Employment Status</th>
                    <td>{{$pdetail->personal_employment_status}}</td>
                    <th>Whether Differently Abled Person</th>
                    <td>{{$pdetail->personal_disability}}</td>
                  </tr>
                  <tr>
                    <th>Disability type</th>
                    <td>{{$pdetail->personal_disability_type}}</td>
                    <th>Disability Percentage</th>
                    <td>{{$pdetail->personal_disability_percentage}}</td>
                  </tr>
                 
                </table>
              
              </div>
              
              </div>
              </div>
            @endforeach 
        </div>
           <div class="col-12">
         @foreach($commdetails as $commdetail)
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">COMMUNICATION DETAILS</h5>
               
                <table class="table table-bordered">
                  <tr>
                    <td colspan="2" style="color: green;text-align: center;">Permanent Address</td>
                     <td colspan="2" style="color:green;text-align: center;">Communication Address</td>
                  </tr>
               
                  <tr>
                    <th>Housename/Houseno</th>
                    <td>{{$commdetail->pmtaddresslineone}}</td>
                    <th>Housename/Houseno</th>
                    <td>{{$commdetail->commaddresslineone}}</td>
                    
                  </tr>
                  <tr>
                    <th>Locality</th>
                    <td>{{$commdetail->pmtaddresslinetwo}}</td>
                    <th>Locality</th>
                    <td>{{$commdetail->commaddresslinetwo}}</td>
                  </tr>
                  <tr>
                    <th>Postoffice</th>
                    <td>{{$commdetail->pmtaddresslinefour}}</td>
                    <th>Postoffice</th>
                    <td>{{$commdetail->commaddresslinefour}}</td>
                  </tr>
                  <tr>
                    <th>District</th>
                    <td>{{$commdetail->pmtaddresslinefive}}</td>
                    <th>District</th>
                    <td>{{$commdetail->commaddresslinefive}}</td>
                  </tr>
                  <tr>
                    <th>State</th>
                    <td>{{$commdetail->pmtaddresslinesix}}</td>
                    <th>State</th>
                    <td>{{$commdetail->commaddresslinesix}}</td>
                  </tr>
                  <tr>
                    <th>Pincode</th>
                    <td>{{$commdetail->pmtaddresslinethree}}</td>
                    <th>Pincode</th>
                    <td>{{$commdetail->commaddresslinethree}}</td>
                  </tr>
                  
                  <tr>
                    <th>Mobile</th>
                    <td>@if (Auth::check())

 {{ Auth::user()->user_mobile ?? ""}}

@endif</td>
                    <th>Alternative Mobile</th>
                    <td>{{$commdetail->alt_mobile}}</td>
                  </tr>
                  </table>
              
              </div>
              </div>
              </div>
              @endforeach
              
            </div>      
          
            <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">ACADEMIC DETAILS</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Programme</th>
                          <th>Specialisation</th>
                          <th>Institution</th>
                          <th>Class/Division</th>
                          <th>Year of Passing</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($acdetails as $acdetails)
                           <tr>
                              <td>{{$acdetails->ac_course}}</td>
                              <td>{{$acdetails->ac_specialisation}}</td>
                              <td>{{$acdetails->ac_institution}}</td>
                              <td>{{$acdetails->ac_class}}</td>
                              <td>{{$acdetails->ac_year}}</td>
                            
                            
                          
                                
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
              </div>
              </div>
             
              
            </div>      
           
            </div>
            <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">M.Phil DETAILS</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                          <th>Specialisation</th>
                          <th>Institution</th>
                          <th>Year</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($mphildetails as $mphildetails)
                           <tr>
                              
                              <td>{{$mphildetails->mphil_specialisation}}</td>
                              <td>{{$mphildetails->mphil_institution}}</td>
                              <td>{{$mphildetails->mphil_year}}</td>
                            
                            
                          
                                
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
              </div>
              </div>
             
              
            </div>      
           
            </div>
            <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">PhD DETAILS</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                          <th>Specialisation</th>
                          <th>Title</th>
                          <th>Institution</th>
                          <th>Faculty</th>
                          <th>Year</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($phddetails as $phddetails)
                           <tr>
                              
                              <td>{{$phddetails->phd_specialisation}}</td>
                              <td>{{$phddetails->phd_title}}</td>
                              <td>{{$phddetails->phd_institution}}</td>
                              <td>{{$phddetails->phd_faculty}}</td>
                              <td>{{$phddetails->phd_year}}</td>
                            
                            
                          
                                
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
              </div>
              </div>
             
              
            </div>      
           
            </div>

            <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">UGC Net DETAILS</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                          <th>Specialisation</th>
                          <th>Year</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($netdetails as $netdetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td>{{$netdetails->net_specialisation}}</td>
                              <td>{{$netdetails->net_year}}</td>
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
           
            

              </div>
              </div>
             
              
            </div>      
           
            </div>
               
               
            <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">TEACHING EXPERIENCE</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                          <th>Teaching Level</th>
                          <th>Institution</th>
                          <th>Designation</th>
                          <th>Subject</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>Duration</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($texdetails as $texdetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td>{{$texdetails->teaching_category}}</td>
                              <td>{{$texdetails->teaching_institution}}</td>
                              <td>{{$texdetails->teaching_designation}}</td>
                              <td>{{$texdetails->teaching_course}}</td>
                              <td>{{$texdetails->teaching_fromdate}}</td>
                              <td>{{$texdetails->teaching_todate}}</td>
                              <td>{{$texdetails->teaching_duration}}</td>
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
           
            

              </div>
              </div>
             
              
            </div>      
           
            </div>
              <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">RESEARCH EXPERIENCE</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                        
                          <th>Institution</th>
                          <th>Specialisation</th>
                          <th>Designation</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>Duration</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($rexdetails as $rexdetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td>{{$rexdetails->research_institution}}</td>
                              <td>{{$rexdetails->research_specialisation}}</td>
                              <td>{{$rexdetails->research_designation}}</td>
                              <td>{{$rexdetails->research_fromdate}}</td>
                              <td>{{$rexdetails->research_todate}}</td>
                              <td>{{$rexdetails->research_duration}}</td>
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
           
            

              </div>
              </div>
             
              
            </div>      
           
            </div>
               <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">OTHER EXPERIENCE</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                        
                          <th>Institution</th>
                          <th>Specialisation</th>
                          <th>Designation</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>Duration</th>
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($oexdetails as $oexdetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td>{{$oexdetails->other_institution}}</td>
                              <td>{{$oexdetails->other_specialisation}}</td>
                              <td>{{$oexdetails->other_designation}}</td>
                              <td>{{$oexdetails->other_fromdate}}</td>
                              <td>{{$oexdetails->other_todate}}</td>
                              <td>{{$oexdetails->other_duration}}</td>
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
           
            

              </div>
              </div>
             
              
            </div>      
           
            </div>
                   
 <div class="col-12">
       
      
              <div class="card">
              <div class="card-body">
                <div class="table-responsive">
              <h5 class="card-title">AWARDS AND ACHIEVEMENTS</h5>
               
     <div class="table-responsive">
     

       <div class="table-responsive">
         <table class="table">
                <thead>
                    <tr>
                        
                        
                          <th>Awarding Body</th>
                          <th>Award Name</th>
                          <th>Award Date</th>
                          <th>Award Level</th>
                          
                        
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($awarddetails as $awarddetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td>{{$awarddetails->award_body}}</td>
                              <td>{{$awarddetails->award_name}}</td>
                              <td>{{$awarddetails->award_date}}</td>
                              <td>{{$awarddetails->award_level}}</td>
                            
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                            </tbody>
              </table>
              </div>
                
              </div>
           
            

              </div>
              </div>
             
              
            </div>      
           
            </div>


<div class="col-12">
          <div class="card">
            <div class="card-body">
                <p style="color:blue;"> <input type="checkbox" id="" name="confirm"> Click SUBMIT to proceed</p>

                    @error("confirm")
                            <p style="color:red">{{$errors->first("confirm")}}</p>
                            @enderror
                          @foreach($jobnot as $jobnot)
                          
                         <input type="hidden" name="job_id" value="{{$jobnot->id}}">
                         <input type="hidden" name="job_registration_id" value="{{$jobnot->job_registration_id}}">
                 <br><button type="submit" class="btn btn-secondary">SUBMIT</button>
                      @endforeach
            </div>
          </div>
       
        </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

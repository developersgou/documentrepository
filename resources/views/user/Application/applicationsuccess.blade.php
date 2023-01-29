
@section("title","SGOU|APPLICATION SUCCESS")
@extends("userlayouts.theme")
@section("maincontent")

     <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
<span class="badge  rounded-pill bg-success">Step 1 <i class="bi bi-check-circle-fill"></i></span>----------
<span  class="badge rounded-pill bg-success">Step 2 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success" >Step 3 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success">Step 4 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success">Step 5 <i class="bi bi-check-circle-fill"></i></span>
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-12">

          <div class="card">
            <div class="card-body">
   


           
              <!-- Vertical Form -->
             
               
                <div class="col-12" style="margin-top:10px;">
                  @foreach($applicationstatus as $applicationstatus)
                <div class="alert alert-success">
                    
                   <div class="card-title">Your have succesfully applied for the post of <strong>{{$applicationstatus->getJobDetails->job_post}}</strong>  with application id :<strong>{{$applicationstatus->job_application_id}}</strong></div> 

                     <div style="margin-top:10px;"> <a href="{{route('user.download-userapplication',
                      [$applicationstatus->job_id,$applicationstatus->getJobDetails->id])}}" class="btn btn-outline-primary" target="_blank">Download Application</a>
                        <a href="{{route('user.job-notificationlist')}}" class="btn btn-outline-success">Find More Jobs</a>
                     <a href="{{route('user.dashboard')}}" class="btn btn-outline-dark">Dashboard</a></div>
                                     
                </div>

           
                    
                 @endforeach   
</div>
                
            

            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

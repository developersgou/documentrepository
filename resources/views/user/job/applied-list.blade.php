
@section("title","SGOU|APPLICATION SUCCESS")
@extends("userlayouts.theme")
@section("maincontent")

 <div class="pagetitle">

    
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;"> <a href="{{route('user.userdashboard')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i>Back</a>| APPLIED JOB LIST </div>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-12">

          <div class="card">
            <div class="card-body">
   


           
              <!-- Vertical Form -->
             
               
                <div class="col-12" style="margin-top:10px;">
                  @if(count($notificationapplied)>0)
                  @foreach($notificationapplied as $notificationapplied)
                <div class="alert alert-success">
                    
                   <div class="card-title">Your have succesfully applied for the post of <strong>{{$notificationapplied->getJobDetails->job_post}}</strong>  with application id :<strong>{{$notificationapplied->job_application_id}}</strong></div> 

                     
                       
                  
                </div>
                @endforeach   
                  @else
                  <div class="alert alert-danger">
                  <div class="card-title">You have not applied for any job.</div> 
                  @endif   
               </div>
                 
                 
</div>
                
            

            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

 @section("title","SGOU|DASHBOARD")
@extends("userlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
 <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('user.userdashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">User Dashboard</li>
        </ol>
      </nav>
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">WELCOME {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->user_name }}} </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
<div class="card">
           

            <div class="card-body">
              <h5 class="card-title">Your Activity <i class="bi bi-box-arrow-left"></i> <span></span></h5>
               @if(count($notificationapplied)>0)
            @foreach($notificationapplied as $notificationapplied)
              <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                 Your have succesfully applied for the post of <strong>{{$notificationapplied->getJobDetails->job_post}}</strong>  with application id :<strong>{{$notificationapplied->job_application_id}}</strong>
                  </div>
                </div><!-- End activity item-->

              
              
             

              
              </div>
            @endforeach
              @else
            <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                No acitivity to show.
                  </div>
                </div><!-- End activity item-->

              
              
             

              
              </div>
 
@endif

            </div>
          </div>
   <div class="card">
           

            <div class="card-body">
              <h5 class="card-title">Alerts <i class="bi bi-exclamation-diamond"></i> <span></span></h5>
               @if(count($registrationstatus)>0)
            @foreach($registrationstatus as $registrationstatus)
              <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                 Your have partially applied for the post of <strong>{{$registrationstatus->getJobDetails->job_post}}</strong>.
                  @if($registrationstatus->getJobDetails->job_status ==1)
                  <a href="{{route('user.apply-job-status',[$registrationstatus->getJobDetails['id']])}}"> Continue registration.</a>
                 @else
               
                  <strong style="color:red;">Application Closed.</strong>
                
                 @endif
                  </div>
                </div><!-- End activity item-->

              
              
             

              
              </div>
            @endforeach
              @else
            <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                No acitivity to show.
                  </div>
                </div><!-- End activity item-->

              
              
             

              
              </div>
 
@endif

            </div>
          </div>

   <div class="card">
           

            <div class="card-body">
              <h5 class="card-title">Active Jobs <i class="bi bi-volume-up-fill"></i>  <span></span></h5>
            @if(count($notification)>0)
            @foreach($notification as $notification)
              <div class="activity">
  
                <div class="activity-item d-flex">
                <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                 Applications are invited for the post of <strong>{{$notification->job_post}}</strong>.
                 
                  <a href="{{route('user.apply-job-status',[$notification['id']])}}"  ><strong style="color:red;">Apply Now</strong></a>
               
                  </div>
                </div><!-- End activity item-->
              
              </div>
            @endforeach
              @else
            <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label"></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                No active job to show.
                  </div>
                </div><!-- End activity item-->

              
              
             

              
              </div>
 
@endif

            </div>
          </div>    
    
              </div>
            </div>
 
 
      </div>
     
    </section>
    @endsection
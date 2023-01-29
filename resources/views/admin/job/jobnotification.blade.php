 @section("title","SGOU|DASHBOARD")
@extends("adminlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
 
     
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
      <a href="{{route('admin.createjobnotification')}}" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> Create Job</a> 
     </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
 <h5 class="card-title">Job List</h5>

        <!-- Left side columns -->
    @foreach($notification as $notification)
   
     <div class="col-md-6">
         <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                
                  <img src="{{asset('backend/assets/img/jobtitle.png')}}" width="100" height="100"alt="" id="responsive">
              </div>
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">{{$notification->job_post}}</h5>
                  <p class="card-text">
                  <table class="table">
                    <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Job Id</td>
                      <td>{{$notification->job_notification_no}}</td>
                    </tr>
                      <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Notification Date</td>
                      <td>{{$notification->job_notification_date}}</td>
                    </tr>
                       <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Commence Date</td>
                      <td>{{$notification->job_notification_commencementdate}}</td>
                    </tr>
                    <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Vaccancies</td>
                      <td>{{$notification->job_post_no}}</td>

                    </tr>
                    <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Closing Date</td>
                      <td>  {{$notification->job_notification_closuredate}}</td>
                    </tr>
                    <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Eligibility</td>
                      <td>{{$notification->job_eligibility}}</td>
                    </tr>
                     <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Job Category</td>
                      <td>{{$notification->job_category}}</td>
                    </tr>
                     <tr>
                      <td><i class="bi bi-check-circle-fill"></i> Status</td>
                      <td>   
                        @if($notification->job_status == 1)
                        <span class="badge bg-success">ACTIVE </span>
                      @else
                        <span class="badge bg-danger">INACTIVE </span>
                        @endif
                      </td>
                    </tr>
              </table>

                    
                  </p>
                    <a href="{{asset($notification->job_notification_file)}}" download class="btn btn-outline-primary">Download</a>
                    <a href="{{route('admin.fetchapplicants',[$notification['id']])}}" class="btn btn-outline-warning">View Applicants</a>
                   @if($notification->job_status == 1)
                               <a href="{{route('admin.jobstatuschange',[$notification['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                             
                              @else
                              <a href="{{route('admin.jobstatuschange',[$notification['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                            
                           @endif
                    </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

                 
  </div>
      @endforeach

              </div>
            </div>
 
 
      </div>
     
    </section>
    @endsection
 @section("title","SGOU|DASHBOARD")
@extends("userlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">

    
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;"> <a href="{{route('user.userdashboard')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i>Back</a>| JOB NOTIFICATIONS </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
    @foreach($notification as $notification)
   
     <div class="col-md-6">
         <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('backend/assets/img/jobtitle.png')}}" width="100" height="100"alt="" id="responsive">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$notification->job_post}}</h5>
                  <p class="card-text">
                  <table class="table">
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
              </table>

                    
                  </p>
                  <a href="{{asset($notification->job_notification_file)}}" download class="btn btn-outline-primary">Download</a>
                  @if($notification->job_status==1)
                  <a href="{{route('user.apply-job-status',[$notification['id']])}}"  class="btn btn-outline-warning">Apply</a>
                  @else
                   <a href=""  class="btn btn-outline-danger">Closed</a>
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
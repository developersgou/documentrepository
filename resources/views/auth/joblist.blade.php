
@section("title","SGOU|JOBS")
@extends("authlayouts.theme")
@section("maincontent")
<section class="section">
      <div class="row">
        

        <div class="col-12" style="margin-top:10px;">

          <div class="card">
            <div class="card-body">
   
             <div class="row">
                  <div class="col-12" id="bannerhome">
                   <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
          <img src="{{asset('backend/assets/img/headerlogo.png')}}" alt="" id="responsive">
        
      </a>
     
    </div><!-- End Logo -->`
                </div>
                <div class="col-12" id="banneraction">
                  <!--  <a href="/" style="color:white;font-size: 20px;"><i class="bi bi-house"></i>Home</a> -->
                </div>
           
            <div class="col-md-12" style="border: 0px solid #ced4da; margin-top: 5px;">
                <div class="card-title">Job List</div>
                    <div class="d-flex justify-content-center py-4">
           
              </div><!-- End Logo -->
              
                   @foreach($notification as $notification)
   
     <div class="col-md-12">
         <div class="card mb-3">
            <div class="row g-0">
              
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">Applications are invited for the post of {{$notification->job_post}}</h5> 
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
                    <a href="{{asset($notification->job_notification_file)}}" target="_blank" class="btn btn-outline-primary">VIEW NOTIFICATION</a>
                    @if($notification->job_status == 1)
                     <a href="login"  class="btn btn-outline-success">APPLY</a>
                    @else
                     <a href=""  class="btn btn-outline-danger">CLOSED</a>
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
          </div>

          

          

        </div>
      </div>
        <script>
function showPassword() {

  var y = document.getElementById("password").value;
  
  if(y=="")
  {
    alert('Please enter a password to show')
  }
  else
  {
  var x = document.getElementById("password");
  if (x.type === "password") 
  {
    x.type = "text";
  } 
  else
   {
    x.type = "password";
  }
  }
}
</script>
    </section>
@endsection
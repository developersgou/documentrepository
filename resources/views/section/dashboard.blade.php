 @section("title","SGOU|DASHBOARD")
@extends("sectionlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Sectiom Dashboard</li>
        </ol>
      </nav>
      <div class="pagetitle">

      <div class="alert alert-primary" style="background-color:#1E2F97 ;color: white;">You are logged in as {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->  email }}} </div>
    </div><!-- End Page Title -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
    
     <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"> ssdsdsdsdad</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="ps-3">
                         
                      <a href="" class="btn btn-outline-success"><h6></h6> View</a>
                 

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">KSHDHA</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                 <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="" class="btn btn-outline-primary"><h6>DDD</h6> View</a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <div class="col-lg-12">
              <div class="card-title">LATEST JOBS</div>
              <div class="row">
       
               <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body" style="background-color:whitesmoke;">
                  <h5 class="card-title">AA</h5>
                 
                
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                 <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      
                 <a href="" class="btn btn-outline-primary"><h6>
                  
                
                
               </h6> View Applicants</a>

               
                    </div>
                 
                
                  </div>

                
              
                </div>

              </div>
            </div><!-- End Sales Card -->
        <!-- End Right side columns -->
    
      </div>
      </div>
      </div>
<script type="text/javascript">
  function alertWarning()
  {
     alert("No Applicatnts to list");

  }
 
</script>
    </section>
    @endsection
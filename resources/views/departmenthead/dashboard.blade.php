 @section("title","SGOU|DASHBOARD")
@extends("departmentheadlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('department.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Section Authority Dashboard</li>
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
                  <h5 class="card-title"> Registered Users</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="ps-3">
                         
                      <a href="{{route('department.user-list')}}" class="btn btn-outline-success"><h6>{{$usercount}}</h6> View</a>
                 

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Departments</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                 <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="{{route('department.departmentlist')}}" class="btn btn-outline-primary"><h6>{{$depcount}}</h6> View</a>

                    </div>
                  </div>
                </div>

              </div>
            </div>
             <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Mappings</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="{{route('department.user-mapping')}}" class="btn btn-outline-primary"><h6>{{$mappingcount}}</h6> View</a>

                    </div>
                  </div>
                </div>

              </div>
            </div>

              <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Documents</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               <i class="bi bi-file-earmark"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="{{route('department.document-list')}}" class="btn btn-outline-primary"><h6>{{$documentcount}}</h6> View</a>

                    </div>
                  </div>
                </div>

              </div>
            </div>

             <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pending Approval</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               <i class="bi bi-file-earmark"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="{{route('department.document-list-approval-pending')}}" class="btn btn-outline-primary"><h6>{{$documentpending}}</h6> View</a>

                    </div>
                  </div>
                </div>

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
 @section("title","SGOU|DASHBOARD")
@extends("sectionlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Section Dashboard</li>
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
                  <h5 class="card-title">Documents</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                         
                      <a href="{{route('section.document-list')}}" class="btn btn-outline-success"><h6>{{$documentcount}}</h6> View</a>
                 

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Approval Pending</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                 <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      
                     <a href="{{route('section.document-list-approval-pending')}}" class="btn btn-outline-primary"><h6>{{$documentpending}}</h6> View</a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
     
      </div>
<script type="text/javascript">
  function alertWarning()
  {
     alert("No Applicatnts to list");

  }
 
</script>
    </section>
    @endsection

@section("title","SGOU|APPLY-JOB")
@extends("userlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
      <a href="{{route('admin.jobnotificationlist')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i> job list</a> 
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title"></h5>
  @if(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
@endif
            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

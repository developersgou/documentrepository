
@section("title","SGOU|WARNING")
@extends("sectionlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
        <div class="btn btn-outline-primary"><a href="{{route('section.document-list')}}" style="">
          <i class="bi bi-arrow-left-circle-fill"></i> Document List
            </a></div>            
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" style="padding:5px;">
    
   <div class="alert alert-danger" >
    <i class="bi bi-exclamation-octagon-fill"></i> SORRY YOU ARE NOT MAPPED TO ANY DEPARTMENT.         
  </div>
         
              <!-- Vertical Form -->
           
            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

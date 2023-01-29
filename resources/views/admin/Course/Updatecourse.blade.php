
@section("title","SGOU|COURSE")
@extends("adminlayouts.theme")
@section("maincontent")
    <div class="pagetitle">
  
        <div class="btn btn-outline-primary"><a href="{{route('admin.courselist')}}" style="">
          <i class="bi bi-arrow-left-circle-fill"></i> Course List
            </a></div>            
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Update Course</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.courselistupdate',[$courselist['id']])}}" autocomplete="off">
                       @csrf
                       @method("PUT")
              <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="" autofocus  name="cname" value="{{$courselist->cname}}">
                         
                           @error("cname")
                            <p style="color:red">{{$errors->first("cname")}}</p>
                            @enderror
                      </div>
                       <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Category</label>
                       <select class="form-control" name="ccategory">
                           <option value="">Select Category</option>
                           <option value="UG">UG</option>
                           <option value="PG">PG</option>
                       </select>
                           @error("ccategory")
                            <p style="color:red">{{$errors->first("ccategory")}}</p>
                            @enderror
                      </div>
                   
                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Code</label>
                        <input type="text" class="form-control" id="" autofocus  name="ccode" value="{{$courselist->ccode}}">
                         
                           @error("ccode")
                            <p style="color:red">{{$errors->first("ccode")}}</p>
                            @enderror
                      </div>
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Duration</label>
                        <input type="text" class="form-control" id="" autofocus  name="cduration" value="{{$courselist->cduration}}">
                         
                           @error("cduration")
                            <p style="color:red">{{$errors->first("cduration")}}</p>
                            @enderror
                      </div>
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Fee</label>
                        <input type="text" class="form-control" id="" autofocus  name="cfees" value="{{$courselist->cfees}}">
                         
                           @error("cfees")
                            <p style="color:red">{{$errors->first("cfees")}}</p>
                            @enderror
                      </div>
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Eligibility</label>
                        <input type="text" class="form-control" id="" autofocus  name="celigibility" value="{{$courselist->celigibility}}">
                         
                           @error("celigibility")
                            <p style="color:red">{{$errors->first("celigibility")}}</p>
                            @enderror
                      </div>
                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                        
              </form><!-- Vertical Form -->

            </div>
          </div>

          

          

        </div>
      </div>
    </section>
    @endsection
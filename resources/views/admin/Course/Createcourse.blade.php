
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
      <h5 class="card-title">Create Course</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('admin.createcourse') }}" autocomplete="off">
                       @csrf

                              <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Code</label>
                        <input type="text" class="form-control" id="" autofocus  name="ccode" value="{{old('ccode')}}">
                         
                           @error("ccode")
                            <p style="color:red">{{$errors->first("ccode")}}</p>
                            @enderror
                      </div>
              <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="" autofocus  name="cname" value="{{old('cname')}}">
                         
                           @error("cname")
                            <p style="color:red">{{$errors->first("cname")}}</p>
                            @enderror
                      </div>
                       <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Course Category</label>
                       <select class="form-control" name="ccategory">
                           <option value="">Select Category</option>
                           <option value="Discipline Core">Discipline Core</option>
                           <option value="Skill Enhancement">Skill Enhancement</option>
                           <option value="Anciliary Course">Anciliary Course</option>
                           <option value="Generic Elective">Generic Elective</option>
                           <option value="Language Core">Language Core</option>


                       </select>
                           @error("ccategory")
                            <p style="color:red">{{$errors->first("ccategory")}}</p>
                            @enderror
                      </div>
                   
                     <div class="col-6">
                         <label for="exampleInputName1" class="form-label">Programme Name</label>
                    <select class="form-control dynamic" name="pgcode" id="pgcode" data-dependent="pgcode">

                    <option value="">Select Programme</option> 
                    @foreach($programme as $programme)
                    <option value="{{$programme->pcode}}"> {{$programme->pname}}</option>
                    @endforeach
                  </select>
                     </div>
              
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="" autofocus  name="csem" value="{{old('csem')}}">
                         
                           @error("csem")
                            <p style="color:red">{{$errors->first("csem")}}</p>
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

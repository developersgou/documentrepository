
@section("title","SGOU|DEPARTMENT")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
        <div class="btn btn-outline-primary"><a href="{{route('admin.departmentlist')}}" style="">
          <i class="bi bi-arrow-left-circle-fill"></i> Department List
            </a></div>            
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Create Department</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('admin.createdepartment') }}" autocomplete="off">
                       @csrf

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Department Name:</label>
                        <input type="text" class="form-control" id="" autofocus  name="dep_name" value="{{old('dep_name')}}">
                          @error("dep_name")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("dep_name")}}
                                 
                            </div>
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

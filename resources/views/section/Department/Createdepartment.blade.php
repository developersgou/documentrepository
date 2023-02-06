
@section("title","SGOU|DEPARTMENT")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.departmentlist')}}" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> Department List</a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">CREATE DEPARTMENT</h5>

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

                        <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Department Name:</label>
                        <input type="text" class="form-control" id="" autofocus  name="dept_name" value="{{old('dept_name')}}">
                          @error("dept_name")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("dept_name")}}
                                 
                            </div>
                             @enderror
                      </div>
                       <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Department Head:</label>
                        <select class="form-control" name="dept_head">
                          <option value="">Select Department Head</option>
                       @foreach($userdetails as $details)
                       <option value="{{$details->id}}">{{$details->user_name}}</option>
                       @endforeach   
                        </select>
                          @error("dept_head")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("dept_head")}}
                                 
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

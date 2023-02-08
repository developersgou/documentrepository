
@section("title","SGOU|MAPPING")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.user-mapping')}}" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> Mapping List</a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">CREATE MAPPING</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('admin.postmapping') }}" autocomplete="off">
                       @csrf

                        <div class="col-4">
                        <label for="exampleInputName1" class="form-label">User Name:</label>
                         <select class="form-control" name="user_id">
                          <option value="">Select User</option>
                       @foreach($userdetails as $details)
                       <option value="{{$details->id}}">{{$details->user_name}}</option>
                       @endforeach   
                        </select>
                          @error("user_id")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_id")}}
                                 
                            </div>
                             @enderror
                      </div>
                       <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Department:</label>
                        <select class="form-control" name="dept_id[]"  multiple >
                          <option value="">Select Department</option>
                       @foreach($departmentlist as $departmentlist)
                       <option value="{{$departmentlist->id}}">{{$departmentlist->dept_name}}</option>
                       @endforeach   
                        </select>
                          @error("dept_id")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("dept_id")}}
                                 
                            </div>
                             @enderror
                      </div>
                      
                          <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Designation:</label>
                       <input type="text" name="user_designation" class="form-control">
                          @error("user_designation")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_designation")}}
                                 
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


@section("title","SGOU|JOB")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
      <a href="{{route('admin.jobnotificationlist')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i> job list</a> 
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Create Job Notification</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('admin.create-Jobnotification') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                       <div class="col-6">
                        <label for="exampleInputName1" class="form-label"> Notification Number</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_notification_no" value="{{old('job_notification_no')}}">
                         
                           @error("job_notification_no")
                            <p style="color:red">{{$errors->first("job_notification_no")}}</p>
                            @enderror
                      </div>
                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Notification Date</label>
                        <input type="date" class="form-control" id="" autofocus  name="job_notification_date" value="{{old('job_notification_date')}}">
                         
                           @error("job_notification_date")
                            <p style="color:red">{{$errors->first("job_notification_date")}}</p>
                            @enderror
                      </div>
                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Application Commencement Date</label>
                        <input type="date" class="form-control" id="" autofocus  name="job_notification_commencementdate" value="{{old('job_notification_commencementdate')}}">
                         
                           @error("job_notification_commencementdate")
                            <p style="color:red">{{$errors->first("job_notification_commencementdate")}}</p>
                            @enderror
                      </div>

                     <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Application Closure Date</label>
                        <input type="date" class="form-control" id="" autofocus  name="job_notification_closuredate" value="{{old('job_notification_closuredate')}}">
                         
                           @error("job_notification_closuredate")
                            <p style="color:red">{{$errors->first("job_notification_closuredate")}}</p>
                            @enderror
                      </div>

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Post</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_post" value="{{old('job_post')}}">
                         
                           @error("job_post")
                            <p style="color:red">{{$errors->first("ccode")}}</p>
                            @enderror
                      </div>
                       <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Number of Posts</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_post_no" value="{{old('job_post_no')}}">
                         
                           @error("job_post_no")
                            <p style="color:red">{{$errors->first("job_post_no")}}</p>
                            @enderror
                      </div>
                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Eligibility Criteria</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_eligibility" value="{{old('job_eligibility')}}">
                         
                           @error("job_eligibility ")
                            <p style="color:red">{{$errors->first("job_eligibility")}}</p>
                            @enderror
                      </div>
                     <div class="col-md-6">

                  <label for="inputName5" class="form-label">Category</label>
                   <select class="form-control" name="job_caste_category" value="{{old('job_caste_category')}}">
                  
                    <option value="">Select Category</option>
                    <option value="General">General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC/ST">SC/ST</option>
                    <option value="OEC">OEC</option>
                    <option value="Others">OTHERS</option>
                    
                </select>

                                 @error("job_caste_category")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_caste_category")}}</span>
                            @enderror
                </div>
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Payment Amount</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_payment" value="{{old('job_payment')}}">
                         
                           @error("job_payment")
                            <p style="color:red">{{$errors->first("job_payment")}}</p>
                            @enderror
                      </div>
             
                        <div class="col-md-6">
                  <label for="inputName5" class="form-label">Notification Type</label>
                   <select class="form-control" name="job_notification_type" value="{{old('job_notification_type')}}">
                  
                    <option value="">Select Type</option>
                    <option value="First">First Notification</option>
                    <option value="Renotification">Renotification</option>
                    <option value="NCA 1">NCA 1</option>
                    <option value="NCA 2">NCA 2</option>
                    </select>
                    @error("job_notification_type")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_notification_type")}}</span>
                  @enderror
                </div>
                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Notification Status</label>
                   <select class="form-control" name="job_notification_status" value="{{old('job_notification_status')}}">
                  
                    <option value="">Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Cancelled">Cancelled</option>
                    
                    </select>

                                 @error("job_notification_status")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_notification_status")}}</span>
                            @enderror
                </div>
                   <div class="col-md-6">
                  <label for="inputName5" class="form-label">Upload file here..</label>
                  
                 <input id="job_notification_file" type="file" class="form-control" name="job_notification_file">
                 @error("job_notification_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_notification_file")}}</span>

                    @enderror
                </div>  
                   
                   <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Job Registration Id</label>
                        <input type="text" class="form-control" id="" autofocus  name="job_registration_id" value="{{old('job_registration_id')}}">
                         
                           @error("job_registration_id ")
                            <p style="color:red">{{$errors->first("job_registration_id")}}</p>
                            @enderror
                      </div>
                 <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Job Category</label>
                      

 <select class="form-control" name="job_category" value="{{old('job_category')}}">
                  
                    <option value="">Select Job Category</option>
                    <option value="1">CAT-1</option>
                    <option value="2">CAT-2</option>
                   
                    
                    </select>

                         
                           @error("job_category ")
                            <p style="color:red">{{$errors->first("job_category")}}</p>
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

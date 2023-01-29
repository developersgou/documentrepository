
@section("title","SGOU|DOCUMENT UPLOAD")
@extends("userlayouts.theme")
@section("maincontent")

     <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
<span class="badge  rounded-pill bg-success">Step 1 <i class="bi bi-check-circle-fill"></i></span>----------
<span  class="badge rounded-pill bg-success">Step 2 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-success" >Step 3 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-danger">Step 4 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
<span class="badge rounded-pill bg-danger">Step 5 <i class="bi bi-exclamation-octagon me-1"></i></span>
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">DOCUMENT UPLOAD  </h5><span class="badge rounded-pill bg-danger" ><i class="bi bi-exclamation-octagon me-1"></i> Max file size : 1 MB , Format : PDF</span><br>
      <br>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('user.lsc-docupload') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                     
                  
                
                
                   <div class="col-md-4">
                     <input type="hidden"  value="{{$job_id}}" name="job_id">
                  <label for="inputName5" class="form-label">SSLC/Tenth Certificate </label>
                  
                 <input id="job_sslc_file" type="file" class="form-control" name="job_sslc_file">
                 @error("job_sslc_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_sslc_file")}}</span>

                    @enderror
                </div>  
                 <div class="col-md-4">
                  <label for="inputName5" class="form-label">Original Degree Certificate</label>
                  
                 <input id="job_degree_file" type="file" class="form-control" name="job_degree_file">
                 @error("job_degree_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_degree_file")}}</span>

                    @enderror
                </div>  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Original PG Certificate</label>
                  
                 <input id="job_pg_file" type="file" class="form-control" name="job_pg_file">
                 @error("job_pg_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_pg_file")}}</span>

                    @enderror
                </div>  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">NET/JRF</label>
                  
                 <input id="job_net_file" type="file" class="form-control" name="job_net_file">
                 @error("job_net_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_net_file")}}</span>

                    @enderror
                </div>  
                   
                    <div class="col-md-4">
                  <label for="inputName5" class="form-label">Community/Non-Creamy layer Certificate</label>
                  
                 <input id="job_community_file" type="file" class="form-control" name="job_community_file">
                 @error("job_community_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_community_file")}}</span>

                    @enderror
                </div>  
                   
                   
                    <div class="col-md-4">
                  <label for="inputName5" class="form-label">PWD Certificate</label>
                  
                 <input id="job_pwd_file" type="file" class="form-control" name="job_pwd_file">
                 @error("job_pwd_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_pwd_file")}}</span>

                    @enderror
                </div>  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Teaching Experience</label>
                  
                 <input id="job_texperience_file" type="file" class="form-control" name="job_texperience_file">
                 @error("job_texperience_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_texperience_file")}}</span>

                    @enderror
                </div>  
                 <div class="col-md-4">
                  <label for="inputName5" class="form-label">Research Experience</label>
                  
                 <input id="job_rexperience_file" type="file" class="form-control" name="job_rexperience_file">
                 @error("job_rexperience_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_rexperience_file")}}</span>

                    @enderror
                </div>  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Other Experience</label>
                  
                 <input id="job_oexperience_file" type="file" class="form-control" name="job_oexperience_file">
                 @error("job_oexperience_file")
                      
                      <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("job_oexperience_file")}}</span>

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

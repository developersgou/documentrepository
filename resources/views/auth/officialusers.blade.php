
@section("title","SGOU|REGISTER")
@extends("authlayouts.theme")
@section("maincontent")
<section class="section">
      <div class="row">
        

        <div class="col-12" style="margin-top:10px;">

          <div class="card">
            <div class="card-body">
   
             <div class="row">
                  <div class="col-12" id="bannerhome">
                   <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/backend/assets/img/headerlogo.png" alt="" id="responsive">
        
      </a>
     
    </div><!-- End Logo -->`
                </div>
                <div class="col-12" id="banneraction">
                   <a href="/" style="color:white;font-size: 20px;"><i class="bi bi-house"></i>Home</a>
                </div>
            <div class="col-md-6" style="padding-top: 30px;">
               <img src="{{asset('backend/assets//img/logingif.gif')}}" width="500" height="400">
            </div>
            <div class="col-md-6" style="border: 1px solid #ced4da; margin-top: 5px;">
                    <div class="d-flex justify-content-center py-4">
              <div class="pagetitle"><h4 style="color:navy;"><strong>CREATE OFFICIAL USER</strong></h4></div> 
              </div><!-- End Logo -->
              
                                 <form class="row g-3" method="POST" action="{{ route('storeofficialuser') }}" autocomplete="off">
                                     @csrf
                                     @if (session()->has('message'))
                                         <div class="alert alert-success">
                                             {{ session()->get('message') }}
                                         </div>
                                     @endif
                                     <div class="col-md-12">
                                         <label for="inputName5" class="form-label">Full Name</label>
                                         <input id="" type="text" class="form-control" name="user_name"
                                             value="{{ old('user_name') }}" autocomplete>

                                         @error('user_name')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('user_name') }}</span>
                                         @enderror
                                     </div>
                                     <div class="col-md-12">
                                         <label for="inputName5" class="form-label">Email</label>

                                         <input id="" type="email" class="form-control" name="email"
                                             value="{{ old('email') }}" autocomplete="name">

                                         @error('email')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('email') }}</span>
                                         @enderror
                                     </div>

                                     


                                     <div class="col-md-6">
                                         <label for="inputCity" class="form-label">Password</label>
                                          <div class="input-group has-validation">
                                          <span class="input-group-text" id="inputGroupPrepend"  onclick="showPassword()"><i class="bi bi-eye-fill"></i></span>
                                         <input id="password" type="password" class="form-control" name="password">
                                      </div>
                                         @error('password')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('password') }}</span>
                                         @enderror
                                     </div>

                                     <div class="col-md-6">
                                         <label for="inputCity" class="form-label">Confirm Password</label>
                                         <input id="cpassword" type="password" class="form-control" name="cpassword">

                                         @error('cpassword')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('cpassword') }}</span>
                                         @enderror
                                     </div>

                                     <div class="text-center">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                         <button type="reset" class="btn btn-secondary">Reset</button>
                                     </div>
                                   
                                 </form><!-- End Multi Columns Form -->
            </div>
</div>
            </div>
          </div>

          

          

        </div>
      </div>
        <script>
function showPassword() {

  var y = document.getElementById("password").value;
  
  if(y=="")
  {
    alert('Please enter a password to show')
  }
  else
  {
  var x = document.getElementById("password");
  if (x.type === "password") 
  {
    x.type = "text";
  } 
  else
   {
    x.type = "password";
  }
  }
}
</script>
    </section>
@endsection

@section("title","SGOU|RESET PASSWORD")
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

         
            <div class="col-md-6" style="padding-top: 30px;background: #fcfcff;" id="loginleft">
               <img src="{{asset('backend/assets//img/confirm.png')}}" width="600" height="380">
            </div>
            <div class="col-md-5" style="border: 1px solid #ced4da; margin-top: 5px;padding-bottom: 10px;background: #fcfcff;">
                    <div class="d-flex justify-content-center py-4">
           <div class="pagetitle"><h4 style="color:navy;"><strong>RESET PASSWORD</strong></h4></div> 
              </div><!-- End Logo -->

                <form method="POST" action="{{ route('password.update') }}" autocomplete="off" class="row g-3 needs-validation">

                        @csrf
                  
                 <div class="col-12">
                             @if( Session::get('error'))
                                     <div class="alert alert-danger">
                                         {{ Session::get('error') }}
                                     </div>
                             @endif
                           @if(session()->has('message'))
                           <div class="alert alert-success">
                           {{ session()->get('message') }}
                           </div>
                            @endif

                            @if(session()->has('failmessage'))
                            <div class="alert alert-danger">
                          {{ session()->get('failmessage') }}
                            </div>
                           @endif
                </div>
           

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                         <input id="email" type="email" class="form-control" name="email" value="{{$email ?? old('email')}}" readonly>

                            <span class="text-danger">@error('email'){{$message}} @enderror</span>       
                      </div>
                        
                    </div>

                   <input type="hidden" name="token" value="{{$token}}">
                    <div class="col-12">
                      <label for="Password" class="form-label">New Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"  onclick="showPassword()"><i class="bi bi-eye-fill"></i></span>
                           
                       <input id="password" type="password" class="form-control" name="password"    value="{{old('password')}}">

                            
                    </div>
                    <span class="badge bg-danger">@error('password'){{$message}} @enderror</span>  
                   
                   </div>
                  <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                        <div class="input-group has-validation">
                           
                           
                       <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"    value="{{old('password_confirmation')}}">

            
                              
                    </div>
                      <span class="badge bg-danger">@error('password_confirmation'){{$message}} @enderror</span>
                     
</div>



                  
                    <div class="text-center">
                      
                        <button type="submit" class="btn btn-primary">
                                  RESET PASSWORD                         </button>
                    </div>
                    
    

  
                   
                  </form>
             
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

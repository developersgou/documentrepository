
@section("title","SGOU|FORGOT PASSWORD")
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
         <img src="{{asset('backend/assets/img/headerlogo.png')}}" alt="" id="responsive">
        
      </a>
     
    </div><!-- End Logo -->`
                </div>
                <div class="col-12" id="banneraction">
                   <!--  <a href="/" style="color:white;font-size: 20px;"><i class="bi bi-house"></i>Home</a> -->
                   
                </div>

         
            <div class="col-md-6" style="padding-top: 30px;background: #fcfcff;" id="loginleft">
               <img src="{{asset('backend/assets//img/loginindex.gif')}}" width="700" height="380">
            </div>
            <div class="col-md-5" style="border: 1px solid #ced4da; margin-top: 5px;padding-bottom: 10px;background: #fcfcff;">
                    <div class="d-flex justify-content-center py-4">
              LOGIN
              </div><!-- End Logo -->

                <form method="POST" action="{{ route('login') }}" autocomplete="off" class="row g-3 needs-validation">

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
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  >

                              
                      </div>
                        @error('email')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('email') }}</span>
                                         @enderror
                    </div>

          



                  
                    <div class="col-4">
                      
                        <button type="submit" class="btn btn-primary w-100">
                                  RESET PASSWORD
                                </button>
                    </div>
                    
    

  
                   
                  </form>
             
            </div>
</div>
            </div>
          </div>

          

          

        </div>
      </div>
      
<script type="text/javascript">
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
    var string_length = 6;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
   document.getElementById("captcha1").value=randomstring;

</script>
<script type="text/javascript">
    function captchaRefresh()
    {

    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
    var string_length = 6;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
   document.getElementById("captcha1").value=randomstring;

    }
</script>
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

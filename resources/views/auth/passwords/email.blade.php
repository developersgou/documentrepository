
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
        <img src="/backend/assets/img/headerlogo.png" alt="" id="responsive">
        
      </a>
     
    </div><!-- End Logo -->`
                </div>
                <div class="col-12" id="banneraction">
                    <a href="/" style="color:white;font-size: 20px;"><i class="bi bi-house"></i>Home</a>
                   
                </div>

         
            <div class="col-md-6" style="padding-top: 30px;background: #fcfcff;padding-left: 180px;" id="loginleft">
               <img src="{{asset('backend/assets//img/reset.png')}}" width="280" height="280" >
            </div>
            <div class="col-md-5" style="border: 1px solid #ced4da; margin-top: 5px;padding-bottom: 10px;background: #fcfcff;">
                    <div class="d-flex justify-content-center py-4">
                           <div class="pagetitle"><h4 style="color:navy;"><strong>FORGOT PASSWORD</strong></h4></div> 
            
              </div><!-- End Logo -->

                <form method="POST" action="{{ route('password.email') }}" autocomplete="off" class="row g-3 needs-validation">

                        @csrf
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
                  
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
           

                    <div class="col-md-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                         <input id="email" type="email" class="form-control" name="email" value="{{$email ?? old('email')}}"  >

                         
                      </div>
                       <span class="badge bg-danger">@error('email'){{$message}} @enderror</span>    
                       
                    </div>

          



                  
                   <div class="text-center">
                      
                <center><button type="submit" class="btn btn-primary">
                              SENT PASSWORD RESET LINK              </button></center> 
                    </div>
                    
    

  
                   
                  </form>
             
            </div>
</div>
            </div>
          </div>

          

          

        </div>
      </div>
      

    </section>
@endsection

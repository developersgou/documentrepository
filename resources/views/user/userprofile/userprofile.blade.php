@section("title","SGOU|PROFILE")
@extends("userlayouts.theme")
@section("maincontent")

     <div class="pagetitle">
         <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
      <a href="{{route('user.userdashboard')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i>Back</a>| <button class="btn btn-primary">Showing the profile of {{$userdetails->personaldetails->personal_name}}</button>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{asset($userdetails->personaldetails->personal_photo)}}" alt="Profile" class="rounded-circle">
              <h2>{{$userdetails->personaldetails->personal_name}}</h2>
              <h6>{{$userdetails->fetchRegistrationTable->registation_id}}</h6>
                <div class="social-links mt-2">
                <a href="#" class="twitter" style="font-size:15px;">{{$userdetails->user_mobile}}</a>
                <a href="#" class="facebook" style="font-size:15px;">{{$userdetails->email}}</a>
               
              </div>
              <div class="badge bg-success"> Created: {{$userdetails->created_at->format('d-m-yy h:i a')}}</div>
              <div style="margin-top:10px;"> <a href="{{route('user.download-userprofile',[$userdetails['id']])}}" class="btn btn-outline-primary" target="_blank">Download Profile</a></div>
             
                 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
 @endif
                        @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
 @endif
            </div>
          </div>           


        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Communication</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Quick Contact</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
              
             
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label "><h5 class="card-title">Personal Pofile 
                      <a href="{{route('user.updatepersonaldetails',[$userdetails->personaldetails['id']])}}"><i class="bi bi-pencil-square"></i></a></h5></div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_name}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_gender}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dob</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_dob}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Marital Status</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_marital_status }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Employment Status</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_employment_status}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Id Type</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_id}} </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Id Number</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_id_no}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Religion</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_religion }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Caste</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_caste }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Category</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_category}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nationality</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_nationality}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Disability</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_disability}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Disability Type</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_disability_type}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Percentage</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->personaldetails->personal_disability_percentage}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <div class="row mb-3">
                     <h5 class="card-title">Permanent Address
                      <a href="{{route('user.communication-detailsupdate',[$userdetails->fetchCommunicationTable['id']])}}"><i class="bi bi-pencil-square"></i></a></h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">House name/No</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslineone}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Locality</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslinetwo}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Post Office</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslinefour}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Pincode</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslinethree}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">District</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslinefive}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">State</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->pmtaddresslinesix}}</div>
                  </div>
                </div>

                <div class="row mb-3">
                     <h5 class="card-title">Communication Address</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">House name/No</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslineone}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Locality</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslinetwo}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Post Office</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslinefour}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Pincode</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslinethree}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">District</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslinefive}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">State</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->fetchCommunicationTable->commaddresslinesix}}</div>
                  </div>
                </div>

                
                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                     <h5 class="card-title">Contact</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Mobile</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->user_mobile}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Email</div>
                    <div class="col-lg-9 col-md-8">{{$userdetails->email}}</div>
                  </div>

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">

            
                  <!-- Change Password Form -->
                  <form class="row g-3" method="post" 
                  action="" autocomplete="off">
                       @csrf

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cpassword" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                         <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection
  
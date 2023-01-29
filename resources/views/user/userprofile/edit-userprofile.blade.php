 @section("title","SGOU|DASHBOARD")
@extends("userlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">

    
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;"> <a href="{{route('user.user-profile')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i>Back</a>| EDIT PROFILE </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
    <form   class="row g-3" method="POST" action="{{route('user.userprofilestore',[$pdetails['id']])}}"  autocomplete="off" enctype="multipart/form-data" >

  @csrf
     @method("PUT")
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Full Name</label>
                  
                 <input id="personal_name" type="text" class="form-control" value="{{$pdetails->personal_name}}" name="personal_name">
               

                                 @error("personal_name")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_name")}}</span>
                            @enderror
                </div>
                   <div class="col-md-4">
                  <label for="inputName5" class="form-label">Parent/Guardian</label>
                  
                 <input id="personal_parent" type="text" class="form-control" name="personal_parent" value="{{$pdetails->personal_parent}}">
               

                                 @error("personal_parent")
                          
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_parent")}}</span>
                            @enderror
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Relationship with applicant</label>
                  
                 <input id="personal_relation" type="text" class="form-control" name="personal_relation" value="{{$pdetails->personal_relation}}">
               

                                 @error("personal_relation")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_relation")}}</span>
                            @enderror
                </div>

                 
                <div class="col-md-4">
                     <label for="inputName5" class="form-label">Gender</label>
             
                 <select class="form-control" name="personal_gender" value="{{old('personal_gender')}}">

                  
                    @if($pdetails->personal_gender == 'Male')
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    @elseif($pdetails->personal_gender == 'Female')
                    <option value="Female" selected  >Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                    @elseif($pdetails->personal_gender == 'Other')
                    <option value="Other" selected>Other</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                       @endif         
                     
                           
                 </select>

                                @error("personal_gender")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_gender")}}</span>
                            @enderror
                </div>
              
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Date of Birth</label>
                 <input id="personal_dob" type="date" class="form-control" name="personal_dob" 
                 value="{{$pdetails->personal_dob}}">

                                 @error("personal_dob")
                          
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_dob")}}</span>
                            @enderror
                </div>
            
                    <div class="col-md-4">
                  <label for="inputName5" class="form-label">Marital Status</label>
                <select class="form-control" name="personal_marital_status" 
                value="{{old('personal_marital_status')}}">
                  
                     
                    @if($pdetails-> personal_marital_status  == 'Married')
                    <option value="Married" selected>Married</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Widow">Widow</option>
                    <option value="Widower">Widower</option>

                    @elseif($pdetails-> personal_marital_status  == 'Unmarried')
                    <option value="Married" >Married</option>
                    <option value="Unmarried" selected>Unmarried</option>
                    <option value="Widow">Widow</option>
                    <option value="Widower">Widower</option>

                    @elseif($pdetails-> personal_marital_status  == 'Widow')
                    <option value="Married" >Married</option>
                    <option value="Unmarried" >Unmarried</option>
                    <option value="Widow" selected>Widow</option>
                    <option value="Widower">Widower</option>

                    @elseif($pdetails-> personal_marital_status  == 'Widower')
                    <option value="Married" >Married</option>
                    <option value="Unmarried" >Unmarried</option>
                    <option value="Widow" >Widow</option>
                    <option value="Widower" selected>Widower</option>
                
                     @endif
                           
                 </select>

                                 @error("personal_marital_status")
                            
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_marital_status")}}</span>
                            @enderror
                </div>
                  
              
                 <div class="col-md-4">
                  <label for="" class="form-label">Religion</label>
                 <input id="personal_religion" type="text" class="form-control" name="personal_religion" value="{{$pdetails->personal_religion}}">

                                @error("personal_religion")
                        
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_religion")}}</span>
                            @enderror
                </div>
                  <div class="col-md-4">
                  <label for="inputName5" class="form-label">Caste</label>
                 <input id="personal_caste" type="text" class="form-control" name="personal_caste" value="{{$pdetails->personal_caste}}">

                                @error("personal_caste")
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_caste")}}</span>
                            @enderror
                </div>
                
                   <div class="col-md-4">
                  <label for="inputName5" class="form-label"> Caste Category</label>
                <select class="form-control" name="personal_category" value="{{old('personal_category')}}">
                  
                    
                    @if($pdetails-> personal_category  == 'General')
                    <option value="General" selected>General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC/ST">SC/ST</option>
                    <option value="OEC">OEC</option>
                    <option value="Others">OTHERS</option>

                     @elseif($pdetails-> personal_category  == 'OBC')
                    <option value="General" >General</option>
                    <option value="OBC" selected>OBC</option>
                    <option value="SC/ST">SC/ST</option>
                    <option value="OEC">OEC</option>
                    <option value="Others">OTHERS</option>

                     @elseif($pdetails-> personal_category  == 'SC/ST')
                    <option value="General" >General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC/ST"  selected>SC/ST</option>
                    <option value="OEC">OEC</option>
                    <option value="Others">OTHERS</option>

                    @elseif($pdetails-> personal_category  == 'OEC')
                    <option value="General" >General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC/ST">SC/ST</option>
                    <option value="OEC" selected>OEC</option>
                    <option value="Others">OTHERS</option>

                    @elseif($pdetails-> personal_category  == 'Others')
                    <option value="General" >General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC/ST">SC/ST</option>
                    <option value="OEC">OEC</option>
                    <option value="Others" selected>OTHERS</option>
                     
                    @endif      
                 </select>

                                 @error("personal_category")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_category")}}</span>
                            @enderror
                </div>

                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">Nationality</label>
                  <select class="form-control" name="personal_nationality" value="{{old('personal_nationality')}}" id="personal_nationality">
                  
                    @if($pdetails-> personal_nationality  == 'Indian')
                    <option value="Indian" selected>Indian</option>
                    <option value="Others">Others</option>

                     @elseif($pdetails-> personal_nationality  == 'Others')
                     <option value="Indian" >Indian</option>
                     <option value="Others" selected>Others</option>

                     @endif

                      </select>
                         @error("personal_nationality")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_nationality")}}</span>
                            @enderror
                </div>
                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">Employment Status</label>
                <select class="form-control" name="personal_employment_status" value="{{old('personal_employment_status')}}">
                  
                   @if($pdetails-> personal_employment_status  == 'Employed')
                    <option value="Employed" selected>Employed</option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="SGOU Employee">SGOU Employee</option>

                     @elseif($pdetails-> personal_employment_status  == 'Unemployed')
                    <option value="Employed" >Employed</option>
                    <option value="Unemployed" selected>Unemployed</option>
                    <option value="SGOU Employee">SGOU Employee</option>

                    @elseif($pdetails-> personal_employment_status  == 'SGOU Employee')
                    <option value="Employed" >Employed</option>
                    <option value="Unemployed" >Unemployed</option>
                    <option value="SGOU Employee" selected>SGOU Employee</option>

                     @endif
                           
                 </select>

                                 @error("personal_employment_status")
                            
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_employment_status")}}</span>
                            @enderror
                </div>
                  
                  
                
                   <div class="col-md-4">
                  <label for="inputName5" class="form-label">Type of ID</label>
                <select class="form-control" name="personal_id" value="{{old('personal_id')}}">
                  
                    @if($pdetails-> personal_id  == "Driving Licence")
                    <option value="Driving Licence" selected>Driving Licence</option>
                    <option value="PAN Card">PAN Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Voters ID">Voters ID</option>

                    @elseif($pdetails-> personal_id  == "PAN Card")
                    <option value="Driving Licence" >Driving Licence</option>
                    <option value="PAN Card" selected>PAN Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Voters ID">Voters ID</option>

                    @elseif($pdetails-> personal_id  == "Passport")
                    <option value="Driving Licence" >Driving Licence</option>
                    <option value="PAN Card">PAN Card</option>
                    <option value="Passport" selected>Passport</option>
                    <option value="Voters ID">Voters ID</option>

                  @elseif($pdetails-> personal_id  == "Voters ID")
                    <option value="Driving Licence" >Driving Licence</option>
                    <option value="PAN Card">PAN Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Voters ID" selected>Voters ID</option>
                    
                    @endif
                     
                           
                 </select>

                                 @error("personal_id")
                            
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_id")}}</span>
                            @enderror
                </div>
                  

              <div class="col-md-4">
                  <label for="" class="form-label">ID Number</label>
                 <input id="personal_id_no" type="text" class="form-control" name="personal_id_no" value="{{$pdetails->personal_id_no}}">

                                @error("personal_id_no")
                        
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_id_no")}}</span>
                            @enderror
                </div>
                
                 <div class="col-md-4">
                  <label for="" class="form-label">Whether Differently Abled Person</label>
                   <select class="form-control" name="personal_disability" id="personal_disability" onchange="checkDisability();">
                  
                    @if($pdetails-> personal_disability  == "No")
                    <option value="No" selected>No</option>
                    <option value="Yes">Yes</option>

                     @elseif($pdetails-> personal_disability  == "Yes")
                    <option value="No" >No</option>
                    <option value="Yes" selected>Yes</option>
                    
                    @endif
                      
                </select>

                                 @error("personal_disability")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_disability")}}</span>
                            @enderror
                </div>
                <div class="col-12" id="check" style="display: none;">
                    <div class="row">

                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">Type of Disability</label>
                  
                 <input type="text" class="form-control" name="personal_disability_type"  value="{{$pdetails->personal_disability_type}}" id="personal_disability_type">
               

                                 @error("personal_disability_type")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_disability_type")}}</span>
                            @enderror
                </div>

                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">Percentage of Disability</label>
                  
                 <input  type="text" class="form-control" name="personal_disability_percentage"  value="{{$pdetails->personal_disability_percentage}}" id="personal_disability_percentage" >
               

                                 @error("personal_disability_percentage")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_disability_percentage")}}</span>
                            @enderror
                </div>
                 
</div>
</div>
<div class="col-md-6">
<input  type="hidden" class="form-control" name="old_personal_photo" value="{{$pdetails->personal_photo}}">
                     <label for="inputName5" class="form-label">Upload your photo here</label>
                
                     <input id="personal_photo" type="file" class="form-control" name="personal_photo"  >

                                @error("personal_photo")
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_photo")}}</span>
                            @enderror
                </div>
   
   

                 <div class="col-md-6">
                    <input  type="hidden" class="form-control" name="old_personal_signature" value="{{$pdetails->personal_signature}}">
                     <label for="inputName5" class="form-label">SCANNED SIGNATURE</label>
                
                     <input id="personal_signature" type="file" class="form-control" name="personal_signature">
               

                                @error("personal_signature")
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("personal_signature")}}</span>
                            @enderror

                </div>
                <div class="col-12" id="preview">
                    <div class="row">
                        <h6>PREVIEW</h6>
                        <div class="col-md-6"  id="image-holder">
                    

                </div>
                  <div class="col-md-6"  id="image-holder2">
                    

                </div>
                    </div>
                </div>
                 


                <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-primary">Update</button>
                 
                </div>
              </form><!-- End Multi Columns Form -->

              </div>
            </div>
 
 
      </div>
       <script>
$(document).ready(function()
         {
        $("#personal_photo").on('change', function() 
        {
            document.getElementById('preview').style.display='block'

          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
   <script>
$(document).ready(function() {
        $("#personal_signature").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder2 = $("#image-holder2");
          image_holder2.empty();
          if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder2);
                }
                image_holder2.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
    </section>
    @endsection
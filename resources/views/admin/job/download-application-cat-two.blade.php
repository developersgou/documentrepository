<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Source:SGOU Recruitment Portal.</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  height: 30px;
  text-align: left;
}
</style>
</head>
<body onload="window.print()">


<div style="margin:10px">
<table style="width:100%">
  <tr>
    <td colspan="7">
      <center><img src="{{asset('backend/assets/img/logo-pdf-detail.png')}}" width="1000px" height="200px"></center>
      

    </td>
  </tr>
  <tr>
     @foreach($jobnot as $jobnot)
    <td colspan="7">
    
      <center><h2 style="text-transform:capitalize;">APPLICATION FORM FOR THE POST OF {{$jobnot->job_post}}</h2></center>

    </td>
    @endforeach
    
  </tr>
    @foreach($pdetails as $pdetail)
    @foreach($regid as $regid)
     @foreach($applicationid as $applicationid)
      @foreach($commdetails as $commdetail)
      @foreach($user as $user)
  <tr>
    <td colspan="7">
      <h4>PERSONAL DETAILS</h4>
      

    </td>
  </tr>
  <tr>
    <td colspan="3">
      <center><img src="{{asset($pdetail->personal_photo)}}" width="100px" height="100px"></center>
      

    </td>
    <td colspan="4">
      <center><img src="{{asset($pdetail->personal_signature)}}" width="150px" height="100px"></center>
      

    </td>
  </tr>
  <tr>
    <th>Full Name/ ID</th>
    <td colspan="3">{{$pdetail->personal_name}} / {{$regid->registation_id}} </td>
    <th>Application ID</th>
    <td>{{$applicationid->job_application_id}} </td>
  
  </tr>
    <tr>
    <th>Email</th>
    <td colspan="3">
      {{$user->email}}
    </td>
    <td rowspan="4" colspan="4">
      <div class="barcode" style="width: 400px;border: none;margin: 0 auto; padding: 10px;">
        
        
    @php
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
  @endphp 
      <img src="data:image/jpg;base64,{{ base64_encode($generator->getBarcode($applicationid->job_application_id, $generator::TYPE_CODE_128)) }}" >
    <center>{{$applicationid->job_application_id}}</center>
   
</div>
</td>
  </tr>
    <tr>
    <th>Mobile</th>
    <td colspan="3">{{$user->user_mobile}}</td>
   </tr>
    <tr>
    <th>Alternate Mobile</th>
    <td colspan="3">{{$commdetail->alt_mobile}}</td>
  </tr>
    <tr>
    <th>Gender</th>
    <td>{{$pdetail->personal_gender}}</td>
    <th>Date of Birth</th>
    <td>{{$pdetail->personal_dob}}</td>
  </tr>
    <tr>
    <th>Nationality</th>
    <td colspan="3">{{$pdetail->personal_nationality}}</td>
    <th>Religion</th>
    <td colspan="2">{{$pdetail->personal_religion}}</td>
   </tr>
    <tr>
    <th>Caste</th>
    <td colspan="3">{{$pdetail->personal_caste}}</td>
    <th>Caste Category</th>
    <td colspan="2">{{$pdetail->personal_category}}</td>
   </tr>
    <tr>
    <th>ID Proof</th>
    <td colspan="3">{{$pdetail->personal_id}}</td>
    <th>ID Proof Number</th>
    <td colspan="2">{{$pdetail->personal_id_no}}</td>
   </tr>
   <tr>
    <th>Marital Status</th>
    <td colspan="3">{{$pdetail->personal_marital_status}}</td>
    <th>Employment Status</th>
    <td colspan="2">{{$pdetail->personal_employment_status}}</td>
   </tr>
   <tr>
    <th>Disability</th>
    <td colspan="3">{{$pdetail->personal_disability}}</td>
    <th>Disability Type</th>
    <td colspan="2">{{$pdetail->personal_disability_type}}</td>
   </tr>
    
 
   </table>
   <table style="width:100%">

    <tr>
    <td colspan="7">
      <h4>COMMUNICATION DETAILS</h4>
    </td>
     
       <tr>
    <th>House Name/No.</th>
    <td colspan="2">{{$commdetail->commaddresslineone}}</td>
    <th>Locality</th>
    <td colspan="3">{{$commdetail->commaddresslinetwo}}</td>
  </tr>
   <tr>
    <th>Post Office</th>
    <td colspan="2">{{$commdetail->commaddresslinefour}}</td>
    <th>Pincode</th>
    <td colspan="3">{{$commdetail->commaddresslinethree}}</td>
  </tr>
   <tr>
    <th>District</th>
    <td colspan="2">{{$commdetail->commaddresslinefive}}</td>
    <th>State</th>
    <td colspan="3">{{$commdetail->commaddresslinesix}}</td>
  </tr>

    </td>
  </tr>
     
   </table>
  @endforeach
  @endforeach
  @endforeach
  @endforeach
   @endforeach
<table style="width:100%">
   <th colspan="7"> <h4>ACADEMIC DETAILS</h4></th>
</tr>

                    <tr>
                              
                          <th colspan="2">Programme</th>
                          <th>Specialisation</th>
                          <th colspan="2">Institution</th>
                          <th>Class/Division</th>
                          <th>Year of Passing</th>
                        
                        
                        </tr>
             
               
                             @foreach($acdetails as $acdetails)
                            
                           <tr>
                              <td colspan="2">{{$acdetails->ac_course}}</td>
                              <td>{{$acdetails->ac_specialisation}}</td>
                              <td colspan="2">{{$acdetails->ac_institution}}</td>
                              <td>{{$acdetails->ac_class}}</td>
                              <td>{{$acdetails->ac_year}}</td>
                            
                            
                          
                                
                          </tr>
                            @endforeach
</table>
                           
<table style="width:100%">
                                 <tr>
  <th colspan="7"> <h4>EXPERIENCE</h4></th>
</tr>
                                               
    
                    <tr>
                        
                        
                          <th colspan="2">Institution</th>
                          <th>Specialisation</th>
                          <th>Designation</th>
                          <th>From Date</th>
                          <th>To Date</th>
                          <th>Duration</th>
                        
                        
                        </tr>
               
                             @foreach($oexdetails  as $oexdetails)
                            
                           
                            
                          
                           <tr>
                              
                              <td colspan="2">{{$oexdetails->other_institution}}</td>
                              <td>{{$oexdetails->other_specialisation}}</td>
                              <td>{{$oexdetails->other_designation}}</td>
                              <td>{{$oexdetails->other_fromdate}}</td>
                              <td>{{$oexdetails->other_todate}}</td>
                              <td>{{$oexdetails->other_duration}}</td>
                            
                            
                          
                                
                          </tr>
                        
                           
                            
                               @endforeach
                          
</table> 
     
               
                           
<br>
<div class="col-lg-12">
  <strong> This is the University copy of the application...</strong> 

  <br>
<br>
 <br>
 
</div>

</div>


</body>
</html>

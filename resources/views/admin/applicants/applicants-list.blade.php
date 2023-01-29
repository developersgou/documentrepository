@section("title","SGOU|APPLICANTS")
@extends("adminlayouts.theme")
@section("maincontent")

 
    <div class="pagetitle">
            <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
     APPLICANTS  LIST 
     </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
                
   
        </button>
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
 
   
     

        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                      <th>Sl No</th>
                  
                          <th>Name</th>
                          <th>Gender/Date of Birth</th>
                          <th>Mobile/Email</th>
                           <th>Caste/Category</th>
                          <th>Address</th>
                       
                          <th>Action</th>
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($applicants as $applicants)

                           <tr>
                              <td>{{$loop->iteration}}</td>
                          
                              <td>{{$applicants->fetchPersonalDetails->personal_name}}
                              <br>
                              {{$applicants->job_application_id}}
                             
                                
                              </td>
                              <td>{{$applicants->fetchPersonalDetails->personal_gender}}
                              <br>
                              {{$applicants->fetchPersonalDetails->personal_dob}}</td>
                              <td>{{$applicants->fetchUserDetails->user_mobile}}
                                <br>
                                  {{$applicants->fetchUserDetails->email}}
                              </td>
                              <td>{{$applicants->fetchPersonalDetails->personal_caste}}
                                <br>
                                {{$applicants->fetchPersonalDetails->personal_category}}
                              </td>
                              <td>
                                {{$applicants->fetchCommunicationTable->commaddresslineone}}
                                <br>
                                {{$applicants->fetchCommunicationTable->commaddresslinetwo}}
                             
                                {{$applicants->fetchCommunicationTable->commaddresslinefour}}
                             
                                {{$applicants->fetchCommunicationTable->commaddresslinefive}}
                             
                                {{$applicants->fetchCommunicationTable->commaddresslinesix}}
                             
                                {{$applicants->fetchCommunicationTable->commaddresslinethree}}
                             
                               

                              <td><a href="{{route('admin.download-userapplication',[$applicants->job_id,$applicants->user_id])}}" class="btn btn-outline-primary" target="_blank">Download</a></td>
                          
                          </tr>
                            @endforeach
                            </tbody>
              </table>
            
              <!-- End Table with stripped rows -->
     
<div class="col-lg-12">
    
</div>
              
              <!-- End Table with stripped rows -->

          
          </div>

        </div>
      </div>
      <script type="text/javascript">
        function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('accordion-item');

  for (i = 0; i < nodes.length; i++) 
  {
    if (nodes[i].innerText.toLowerCase().includes(filter))
     {
      nodes[i].style.display = "block";
       

    }
     else 
     {
      nodes[i].style.display = "none";

    }
  }
}
      </script>

   <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>
    
    </section>
    @endsection
  
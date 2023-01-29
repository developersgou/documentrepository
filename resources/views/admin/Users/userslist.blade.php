@section("title","SGOU|USERS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
            <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;">
      USERS LIST
     </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   
     <div class="table-responsive">
     

       <div class="table-responsive">
        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                          <th>Registration Id</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Date of Birth</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Action</th>
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($userdetails as $details)
                           <tr>
                              <td>{{$details->registation_id}}</td>
                              <td>{{$details->personaldetails->personal_name}}</td>
                              <td>{{$details->personaldetails->personal_gender}}</td>
                              <td>{{$details->personaldetails->personal_dob}}</td>
                              <td>{{$details->fetchUserTable->user_mobile}}</td>
                              <td>{{$details->fetchUserTable->email}}</td>
                              <td> <a href="{{route('admin.complete-profile',[$details['id']])}}" class="btn btn-outline-primary">View More</a></td>
                          
                                
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->
     
<div class="col-lg-12">
    
</div>
              </div>
              <!-- End Table with stripped rows -->

            </div>
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
  
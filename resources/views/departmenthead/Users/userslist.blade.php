@section("title","SGOU|USERS")
@extends("departmentheadlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
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
                        
                          <th>Name</th>
            
                      
                          <th>Email</th>
                          <th>Role</th>
                          <th>Created At</th>
                          <th>Status</th>
                         
                        
                        </tr>
                </thead>
                 <tbody>
                             @foreach($userdetails as $details)
                           <tr>
                             
                              <td>{{$details->user_name}}</td>  
                             
                              <td>{{$details->email}}</td>
                              <td>

                                @if($details->role == 2)
                                
                                 <span class="badge bg-success">Section Authority</span>


                                 @elseif($details->role == 3)
                                 <span class="badge bg-warning">Section Assistant</span>

                                 @else
                                 <span class="badge bg-secondary">Viewer</span>
                                @endif
                              </td>
                              <td>{{$details->created_at}}</td>
                            <td>
                                @if($details->status == 1)
                                   <span class="badge bg-success">Active</span>
                                   @else
                                   <span class="badge bg-danger">Inactive</span>
                                  @endif
                            </td>
                                
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->
     

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
  
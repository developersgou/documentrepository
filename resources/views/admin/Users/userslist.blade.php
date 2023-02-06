@section("title","SGOU|USERS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.user-creation')}}" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> Create User</a> 
       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   <div class="card-title">USER LIST</div>
     <div class="table-responsive">
     

       <div class="table-responsive">
        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                        
                          <th>Name</th>
            
                      
                          <th>Email</th>
                          <th>Role</th>
                          <th>Created At</th>
                          <th>Action</th>
                        
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
                                @if($details->email_verified == 1)
                                <a href="{{route('admin.userstatuschange',[$details['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                              
                               @else
                               <a href="{{route('admin.userstatuschange',[$details['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                             
                            @endif
                     
                            <a href="{{route('admin.userremove',[$details['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
                               <a href="{{route('admin.passwrodedit',[$details['id']])}}" class="btn btn-secondary" id=""><i class='bi bi-eye'></i></a>
                                
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
  
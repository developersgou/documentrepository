@section("title","SGOU|DEPARTMENT")
@extends("departmentheadlayouts.theme")
@section("maincontent")

 
    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
       DEPARTMENT lIST
       </div>
    </div><!-- End Page Title -->
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
            <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
     
     <div class="table-responsive">
      <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                          <th>Sl No</th>
                          <th>Department Name</th>
                           <th>Department Head</th>
                          <th>Created At</th>
                          
                          <th>Status</th>
                       
                       
                        
                        </tr>
                </thead>
                 <tbody>
                              @foreach($departmentlist as $departmentlist)
                          
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$departmentlist->dept_name}}</td>
                                <td>{{$departmentlist->fetchUserDetails->user_name}}</td>
                                 <td>{{$departmentlist->created_at}}</td>
                               
                                <td>
                                   @if($departmentlist->dept_status == 1)
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
          </div>

        </div>
      </div>
      
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
  
@section("title","SGOU|MAPPING")
@extends("departmentheadlayouts.theme")
@section("maincontent")

 
    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
      MAPPING LIST
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
                          <th>Name</th>
                          <th>Department</th>
                           <th>Designation</th>
                          <th>Created At</th>
                          <th>Status</th>
                       
                       
                        
                        </tr>
                </thead>
                 <tbody>
                              @foreach($mapping as $mappings)
                              @php
                            $values = explode(",",$mappings->fetchDepartmentDetails->dept_name);
                            @endphp
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mappings->fetchUserDetails->user_name}}</td>
                                <td>
                                 
                                        {{$mappings->fetchDepartmentDetails->dept_name}}
                                

                                  
                                </td>
                                <td>{{$mappings->user_designation}}</td>
                                <td>{{$mappings->created_at}}</td>
                              
                                <td>
                                   @if($mappings->mapping_status == 1)
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
  
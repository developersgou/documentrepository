@section("title","SGOU|DOCUMENTS")
@extends("departmentheadlayouts.theme")
@section("maincontent")

   
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
      TRASH LIST
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
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
                        
                         <th >Number</th>
                         <th >Name</th>
                         <th >Department/Uploaded By</th>
                         <th >Type</th>
                         <th >Date</th>
                         <th>Action</th>
                        
                        </tr>
                </thead>
                 <tbody>
                              @foreach($document as $documents)
                           <tr>
                             
                              <td>{{$documents->doc_number}}</td>  
                               <td>{{$documents->doc_name}}</td>
                              <td>{{$documents->fetchDepartmentDetails->dept_name}}
                                <br>
                                <span class="badge bg-success">{{$documents->doc_uploaded_by}}</span>
                            </td>
                              <td>{{$documents->doc_type}}</td>
                           
                              <td>{{$documents->doc_approval_date}}</td>
                              <td>  <a href="{{asset($documents->doc_document)}}" target="_black" class="btn btn-outline-warning"><i class="bi bi-eye"></i></a>
                
                               <a href="{{route('department.documentsremovetrash',[$documents['id'],'1'])}}" onclick="return confirm('Are you sure you want to remove trash.');" class="btn btn-outline-danger" id=""><i class="bi bi-box-arrow-up"></i></a>

                             
                           
                           
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
    </section>
    @endsection
  
@section("title","SGOU|DOCUMENTS")
@extends("adminlayouts.theme")
@section("maincontent")

   
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
     APPROVED DOCUMENT LIST 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   
  <div class="col-md-3" style="margin-left:auto;" >
     <h1><input type="text" id="Search" class="form-control" onkeyup="myFunction()" placeholder="Search" title="Type in a name"></h1>
  </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
          <table class="table table-striped">
             <tr>
                        
                            <th width="25%">Document Name</th>
                         
                            <th width="25%">Department</th>
                             <th width="25%">Document Number</th>
                            
                        </tr>
        </table>
            @if($document->isNotEmpty())
                
                @foreach($document as $documents)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$documents->id}}" aria-expanded="false" aria-controls="flush-{{$documents->id}}">
                    <table class="table table-striped">
                       
                        <tr>
                        
                        <td width="25%">{{$documents->doc_name}}</td> 
                     
                          <td width="25%">{{$documents->fetchDepartmentDetails->dept_name}}</td>
                            <td width="25%">{{$documents->doc_number}}</td> 
                       </tr>
                    </table>
                    </button>
                  </h2>
                  <div id="flush-{{$documents->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                       <table id="example" class="table datatable" style="width:100%">
                        <tr>
                          <th>Document Number</th>
                          <td>{{$documents->doc_number}}</td>
                        </tr>
                           <tr>
                          <th>Department</th>
                          <td>{{$documents->fetchDepartmentDetails->dept_name}}</td>
                        </tr>
                           <tr>
                          <th>Approval Date</th>
                          <td>{{$documents->doc_approval_date}}</td>
                        </tr>
                          <tr>
                          <th>Uploaded By</th>
                          <td>{{$documents->doc_uploaded_by}}</td>
                        </tr>
                          <tr>
                          <th>Document Name</th>
                          <td>{{$documents->doc_name}}</td>
                        </tr>
                          <tr>
                          <th>Remarks</th>
                          <td>{{$documents->doc_remarks}}</td>
                        </tr>
                          <tr>
                          <th>Created At</th>
                          <td>{{$documents->created_at}}</td>
                        </tr>
                         <tr>
                          <th>Updated At</th>
                          <td>{{$documents->updated_at}}</td>
                        </tr>
                     
                            <tr>
                          <th>Status</th>
                            <td>
                                   @if($documents->doc_status == 1)
                                   <span class="badge bg-success">Approved</span>
                                   @else
                                   <span class="badge bg-danger">Approval Pending</span>
                                  @endif
                                </td>
                        </tr>
                        <tr>
                         
                          <td colspan="2">
                                  
                           
                          
                             <a href="{{$documents->doc_document}}" download class="btn btn-outline-primary" >Download</a> 
                            <a href="{{$documents->doc_document}}" target="_black" class="btn btn-outline-warning">Preview</a>
                           
                        </td>
                        </tr>
                    
                      </table>
                   
                    </div>
                  </div>
                </div>
                  @endforeach

              
                 @else
                 <div class="alert alert-danger"><i class="bi bi-exclamation-triangle"></i> No documents to list.</div>
                 @endif


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
  
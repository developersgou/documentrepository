@section("title","SGOU|DOCUMENTS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
        <div class="btn btn-outline-primary" style=""><a href="{{route('admin.createdocument')}}" style="">
           <i class="bi bi-plus-circle-fill"></i> Create
            </a></div>               

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card">

            <div class="card-body">
            
     <h5 class="card-title">Document List</h5>
     <div class="table-responsive">
      <div class="col-md-3" style="margin-left:auto;" >
     <h1><input type="text" id="Search" class="form-control" onkeyup="myFunction()" placeholder="Search" title="Type in a name"></h1>
  </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @if($document->isNotEmpty())

                @foreach($document as $documents)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$documents->id}}" aria-expanded="false" aria-controls="flush-{{$documents->id}}">
                    {{$loop->iteration}} {{$documents->doc_name}}
                    </button>
                  </h2>
                  <div id="flush-{{$documents->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-bordered datatable">
                        <tr>
                          <th>Document Number</th>
                          <td>{{$documents->doc_number}}</td>
                        </tr>
                           <tr>
                          <th>Department</th>
                          <td>{{$documents-> dep_id}}</td>
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
                          <th>File Name</th>
                          <td>{{$documents->doc_filename}}</td>
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
                                   <span class="badge bg-success">Active</span>
                                   @else
                                   <span class="badge bg-danger">Inactive</span>
                                  @endif
                                </td>
                        </tr>
                        <tr>
                         
                          <td colspan="2">
                                      @if($documents->doc_status == 1)
                               <a href="{{route('admin.documentstatuschange',[$documents['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                             
                              @else
                              <a href="{{route('admin.documentstatuschange',[$documents['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                            
                           @endif
                             <a href="{{route('admin.documentlistedit',[$documents['id']])}}" class="btn btn-secondary" id=""><i class='bi bi-eye'></i></a>
                            <a href="{{route('admin.departmentremove',[$documents['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
                             <a href="/{{$documents->doc_document}}" download class="btn btn-outline-primary" >Download</a> 
                            <a href="/{{$documents->doc_document}}" target="_black" class="btn btn-outline-warning">Preview</a>
                           
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
<div class="col-lg-12">
     {!! $document->links() !!}
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
    </section>
    @endsection
  
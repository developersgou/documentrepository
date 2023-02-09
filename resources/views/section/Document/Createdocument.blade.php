
@section("title","SGOU|DOCUMENT")
@extends("sectionlayouts.theme")
@section("maincontent")



     <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('section.document-list')}}" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> Document List</a> 
       </div>
    </div>
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Upload Document</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('section.storedocument')}}" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Document Number:</label>
                        <input type="text" class="form-control" id="" autofocus  name="doc_number" value="{{old('doc_number')}}">
                          @error("doc_number")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_number")}}
                                 
                            </div>
                             @enderror
                      </div>
                          <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Document Subject:</label>
                        <input type="text" class="form-control" id=""   name="doc_name" value="{{old('doc_name')}}">
                         <input type="hidden" class="form-control" id=""   name="dep_id" value="{{$dept}}">
                          @error("doc_name")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_name")}}
                                 
                            </div>
                             @enderror
                      </div>
                 
                 <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Approval Date:</label>
                        <input type="date" class="form-control" id=""   name="doc_approval_date" value="{{old('doc_approval_date')}}">
                          @error("doc_approval_date")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_approval_date")}}
                                 
                            </div>
                             @enderror
                  </div>
                     
                         <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Document Type:</label>
                        <select class="form-control" name="doc_filetype" value="{{old('doc_file_type')}}">
                          <option value="">Select Document Type</option>
                          <option value="UO">University Order</option>
                          <option value="Circular">Circular</option>
                        </select>
                        @error("doc_filetype")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_filetype")}}
                                
                            </div>
                             @enderror
                      </div>
                          <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Document:</label>
                        <input type="file" class="form-control" id=""   name="doc_document" value="{{old('doc_document')}}">
                          @error("doc_document")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_document")}}
                                 
                            </div>
                             @enderror
                      </div>
                      <div class="col-6">
                      <label for="exampleInputName1" class="form-label">Remarks:</label>
                      <input type="text" name="doc_remarks" class="form-control">
          
                          @error("doc_remarks")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_remarks")}}
                                 
                            </div>
                             @enderror
                      </div>
              
                   
                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>

          

          

        </div>
      </div>
    </section>
 
    @endsection

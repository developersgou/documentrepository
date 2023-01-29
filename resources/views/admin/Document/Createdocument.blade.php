
@section("title","SGOU|DOCUMENT")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
        <div class="btn btn-outline-primary"><a href="{{route('admin.documentlist')}}" style="">
          <i class="bi bi-arrow-left-circle-fill"></i> Document List
            </a></div>            
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Create Document</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{ route('admin.createdocument') }}" autocomplete="off" enctype="multipart/form-data">
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
                        <label for="exampleInputName1" class="form-label">Document Name:</label>
                        <input type="text" class="form-control" id=""   name="doc_name" value="{{old('doc_name')}}">
                          @error("doc_name")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_name")}}
                                 
                            </div>
                             @enderror
                      </div>
                  <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Department Name:</label>
                      <select class="form-control" name="dep_id">
                        <option value="" hidden>SELECT DEPARTMENT</option>
                         @foreach($departmentlist as $departmentlists)
                       <option value="{{$departmentlists->id}}"> {{$departmentlists->dep_name}}</option>
                    @endforeach
                        
                      </select>
                          @error("dep_id")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("dep_id")}}
                                 
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
                        <label for="exampleInputName1" class="form-label">File Name:</label>
                        <input type="text" class="form-control" id=""   name="doc_filename" value="{{old('doc_filename')}}">
                          @error("doc_filename")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("doc_filename")}}
                                 
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
                          <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Remarks:</label>
                      <textarea class="form-control" name="doc_remarks">
                        
                      </textarea >
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

 @section("title","SGOU|DASHBOARD")
@extends("sectionlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('section.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Section  Dashboard</li>
        </ol>
      </nav>
      <div class="pagetitle">

      <div class="alert alert-primary" style="background-color:#1E2F97 ;color: white;">You are logged in as {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->  email }}} | Approval pending :  
                      
         <a href="{{route('section.document-list-approval-pending')}}" style="color: white;">{{$documentpending}} <span class="badge bg-warning">View</span></a>

                   </div>
    </div><!-- End Page Title -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

       

     

            <!-- Reports -->
          

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">


                <div class="card-body">
                  <h5 class="card-title">Document List</h5>

              
       <div class="table-responsive">
        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                        
                         <th >Number</th>
                         <th > Name</th>
                       <th >Upload</th>
                         <th >Type</th>
                      
                         <th >Date</th>
                         <th>ACTION</th>
                        
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
                                 <a href="{{asset($documents->doc_document)}}" download class="btn btn-outline-primary" ><i class="bi bi-box-arrow-down"></i></a> 
                               
                           
                          </td>
                              
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>

                </div>

              </div>
            </div><!-- End Recent Sales -->

       

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
           

            <div class="card-body">
            
            
      
  <h5 class="card-title">Advance Filter</h5>
              <div class="activity">

       
      
               <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
  

       @if(session()->has('message'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="GET" action="{{ route('section.datewise-filter-search') }}" autocomplete="off">
                     

                       



                        <div class="col-6" >
                        <label for="exampleInputName1" class="form-label"> Enter from date</label>
                        <input type="date" class="form-control" id=""  name="fromdate" >

                            @error('fromdate')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('fromdate') }}</span>
                                         @enderror
                        
                        
                      </div>
                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label"> Enter to date</label>
                        <input type="date" class="form-control" id=""  name="todate" >
                        
                        @error('todate')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('todate') }}</span>
                                         @enderror

                      </div>
                      
           
              
                   
                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">Find</button>
             
                  <a href="{{route('section.dashboard')}}" class="btn btn-secondary">Reset</a>
                </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>

          

          

        </div>


           
     


              

              </div>

            </div>
          </div><!-- End Recent Activity -->

      

        </div><!-- End Right side columns -->

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
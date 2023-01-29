@section("title","SGOU|COURSE")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
        <div class="btn btn-outline-primary" style=""><a href="{{route('admin.createcourse')}}" style="">
           <i class="bi bi-plus-circle-fill"></i> Create
            </a></div>               

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card">

            <div class="card-body">
            
     <h5 class="card-title">Course List</h5>
     <div class="table-responsive">
         <table class="table table-bordered border-primary datatable table-bordered">
                <thead>
                    <tr>
                          <th>Sl No</th>
                          <th>Course Name</th>
                          <th>Course Category</th>
                          <th>CourseCode</th>
                          <th>Programme Category</th>
                          <th>Programme Name</th>
                          <th>Semester</th>
                          <th>Status</th>
                          <th>Action</th>
                        
                        </tr>
                </thead>
                 <tbody>
                            @foreach($courselist as $courselist)
                          
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$courselist->cname}}</td>
                                <td>{{$courselist->ccategory}}</td>
                                <td>{{$courselist->ccode}}</td>
                                <td>{{$courselist->pcategory}}</td>
                                <td>{{$courselist->pname }}</td>
                                 <td>{{$courselist->csem }}</td>
                                <td>
                                   @if($courselist->cstatus == 1)
                                   <span class="badge bg-success">Active</span>
                                   @else
                                   <span class="badge bg-danger">Inactive</span>
                                  @endif
                                </td>
                             <td>
                                      @if($courselist->cstatus == 1)
                               <a href="{{route('admin.coursestatuschange',[$courselist['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                             
                              @else
                              <a href="{{route('admin.coursestatuschange',[$courselist['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                            
                           @endif
                              <a href="{{route('admin.courselistedit',[$courselist['id']])}}" class="btn btn-secondary" id=""><i class='bi bi-eye'></i></a>
                             <a href="{{route('admin.courseremove',[$courselist['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
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
    </section>
    @endsection
  
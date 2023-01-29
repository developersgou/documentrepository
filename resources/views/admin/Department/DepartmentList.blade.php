@section("title","SGOU|DEPARTMENT")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
        <div class="btn btn-outline-primary" style=""><a href="{{route('admin.createdepartment')}}" style="">
           <i class="bi bi-plus-circle-fill"></i> Create
            </a></div>               

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card">

            <div class="card-body">
            
     <h5 class="card-title">Department List</h5>
     <div class="table-responsive">
         <table class="table table-striped datatable table-bordered">
                <thead>
                    <tr>
                          <th>Sl No</th>
                          <th>Department Name</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th>Status</th>
                          <th>Action</th>
                       
                        
                        </tr>
                </thead>
                 <tbody>
                              @foreach($departmentlist as $departmentlist)
                          
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$departmentlist->dep_name}}</td>
                                 <td>{{$departmentlist->created_at}}</td>
                                   <td>{{$departmentlist->updated_at}}</td>
                                <td>
                                   @if($departmentlist->dep_status == 1)
                                   <span class="badge bg-success">Active</span>
                                   @else
                                   <span class="badge bg-danger">Inactive</span>
                                  @endif
                                </td>
                             <td>
                                      @if($departmentlist->dep_status == 1)
                               <a href="{{route('admin.departmentstatuschange',[$departmentlist['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                             
                              @else
                              <a href="{{route('admin.departmentstatuschange',[$departmentlist['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                            
                           @endif
                             <a href="{{route('admin.departmentlistedit',[$departmentlist['id']])}}" class="btn btn-secondary" id=""><i class='bi bi-eye'></i></a>
                            <a href="{{route('admin.departmentremove',[$departmentlist['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
                           
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
  
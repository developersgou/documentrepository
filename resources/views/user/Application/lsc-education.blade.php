
@section("title","SGOU|JOB")
@extends("userlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
       <span class="badge  rounded-pill bg-success">Step 1 <i class="bi bi-check-circle-fill"></i></span>----------
       <span  class="badge rounded-pill bg-danger">Step 2 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
       <span class="badge rounded-pill bg-danger" >Step 3 <i class="bi bi-exclamation-octagon me-1"></i></span>----------

 <span class="badge rounded-pill bg-danger">Step 4 <i class="bi bi-exclamation-octagon me-1"></i></span>----------

 <span class="badge rounded-pill bg-danger">Step 5 <i class="bi bi-exclamation-octagon me-1"></i></span>
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-12">

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
             
                 <form class="row g-3" method="post" action="{{ route('user.lsc-qualification') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf


             


              

 <div class="col-12">
   <input type="hidden"  value="{{$job_id}}" name="job_id">
    <div class="table-responsive">
         
         <h3 class="card-title">ACADEMIC QUALIFICATIONS</h3>
          <table class="table table-striped" style="width:100%">
                <tr>
            <th></th>
            <th style="text-align: center;">Course Name</th>
           <th style="text-align: center;">Specialisation</th>
           <th style="text-align: center;">Institution</th>
             <th style="text-align: center;">Class/Division</th>
           <th style="text-align: center;">Year of Passing</th>
             <th style="text-align: center;">Action</th>
        </tr>
          </table>
    <TABLE id="dataTable" class="table table-striped" style="width: 100%;">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><select class="form-control" name="ac_course[]" value="{{old('ac_course')}}">

                  
                      <option value="" hidden>Select your qualification</option>
                      <option value="PG">Post Graduation</option>
                      <option value="UG">Under Graduation</option>
                      <option value="Others">Others</option>
                     
                     
                           
                 </select>
        @error("ac_course")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("ac_course")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="ac_specialisation[]" required>
        @error("ac_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("ac_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="ac_institution[]" required>
        @error("ac_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("ac_institution")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="ac_class[]" required>
        @error("ac_class")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("ac_class")}}</span>
                            @enderror
   </TD>
      <TD><input  class="form-control" type="text" name="ac_year[]" required>
        @error("ac_year")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("ac_year")}}</span>
                            @enderror
   </TD>
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

    </TR>
  </TABLE>
    </div>
</div>
      
<div class="col-12">
    <div class="table-responsive">
         
         <h3 class="card-title">M.Phil</h3>
          <table class="table table-striped">
                <tr>
            <th></th>
            
           <th style="text-align: center;">Specialisation</th>
           <th style="text-align: center;">Institution</th>
           <th style="text-align: center;">Year of Passing</th>
             <th style="text-align: center;">Action</th>
        </tr>
          </table>
    <TABLE id="dataTable1" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><input  class="form-control" type="text" name="mphil_specialisation[]">
        @error("mphil_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("mphil_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="mphil_institution[]">
        @error("mphil_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("mphil_institution")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="mphil_year[]">
        @error("mphil_year")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("mphil_year")}}</span>
                            @enderror
   </TD>
     
      
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow1('dataTable1')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow1('dataTable1')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

    </TR>
  </TABLE>
    </div>
</div> 

<div class="col-12">
    <div class="table-responsive">
         
         <h3 class="card-title">Ph D</h3>
          <table class="table table-striped">
                <tr>
            <th></th>
            
            
           <th style="text-align: center;">Specialisation</th>
              <th style="text-align: center;">Title</th>
           <th style="text-align: center;">Institution</th>
            <th style="text-align: center;">Faculty</th>
            <th style="text-align: center;">Year</th>
             <th style="text-align: center;">Action</th>
        </tr>
          </table>
    <TABLE id="dataTable2" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><input class="form-control" type="text" name="phd_specialisation[]">
        @error("phd_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("phd_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="phd_title[]">
        @error("phd_title")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("phd_title")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="text" name="phd_institution[]">
        @error("phd_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("phd_institution")}}</span>
                            @enderror
   </TD>
     <TD><input class="form-control" type="text" name="phd_faculty[]">
        @error("phd_faculty")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("phd_faculty")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="phd_year[]">
        @error("phd_year")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("phd_year")}}</span>
                            @enderror
   </TD>
     
     
      
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow2('dataTable2')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow2('dataTable2')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

    </TR>
  </TABLE>
    </div>
</div>             
          
<div class="col-12">
    <div class="table-responsive">
         
         <h3 class="card-title">UGC NET</h3>
          <table class="table table-striped">
                <tr>
            <th></th>
            
            
           <th style="text-align: center;">Specialisation</th>
           <th style="text-align: center;">Year</th>

          
        </tr>
          </table>
    <TABLE id="dataTable3" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><input class="form-control" type="text" name="net_specialisation">
        @error("net_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("net_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="net_year">
        @error("net_year")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("net_year")}}</span>
                            @enderror
   </TD>
    
    
      
     
      
      

    </TR>
  </TABLE>
    </div>
</div> 

 


                   
                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">CONTINUE</button>
                  <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
 
 <script type="text/javascript">
          function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>

      <script type="text/javascript">
          function addRow1(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow1(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>
    <script type="text/javascript">
          function addRow2(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow2(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>

      <script type="text/javascript">
          function addRow3(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow3(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>
       
    @endsection



@section("title","SGOU|EXPERIENCE")
@extends("userlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#2a3a4f;color: white;text-transform: uppercase;">
<span class="badge  rounded-pill bg-success">Step 1 <i class="bi bi-check-circle-fill"></i></span>----------
<span  class="badge rounded-pill bg-success">Step 2 <i class="bi bi-check-circle-fill"></i></span>----------
<span class="badge rounded-pill bg-danger" >Step 3 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
<span class="badge rounded-pill bg-danger">Step 4 <i class="bi bi-exclamation-octagon me-1"></i></span>----------
<span class="badge rounded-pill bg-danger">Step 5 <i class="bi bi-exclamation-octagon me-1"></i></span>
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

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
             
                 <form class="row g-3" method="post" action="{{ route('user.lsc-qualification') }}" autocomplete="off" enctype="multipart/form-data">
                       @csrf


             
 
         <h3 class="card-title">TEACHING EXPERIENCE</h3>

              

 <div class="col-12">
 
    <div class="table-responsive">
         
         <h3 class="card-title">EXPERIENCE</h3> <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
      <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
         
    <TABLE id="dataTable" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><select class="form-control" name="teaching_category[]" value="{{old('teaching_category')}}">

                  
                      <option value="" hidden>Select</option>
                      <option value="PG">Post Graduation</option>
                      <option value="UG">Under Graduation</option>
                     
                     
                           
                 </select>
        @error("teaching_category")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_category")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="teaching_institution[]" required>
        @error("teaching_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_institution")}}</span>
                            @enderror
   </TD>
    <TD><input class="form-control" type="text" name="teaching_designation[]" required>
        @error("teaching_designation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_designation")}}</span>
                            @enderror
   </TD>
   
      <TD><input class="form-control" type="text" name="teaching_course[]" required>
        @error("teaching_course")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_course")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="date" name="teaching_fromdate[]" required>
        @error("teaching_fromdate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_fromdate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="date" name="teaching_todate[]" required>
        @error("teaching_todate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_todate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="text" name="teaching_duration[]" required>
        @error("teaching_duration")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("teaching_duration")}}</span>
                            @enderror
   </TD>
    
     
       <TD>
        
   
     
      </TD>

      

    </TR>
  </TABLE>
    </div>
</div>
      
<div class="col-12">
    <div class="table-responsive">
         
         <h3 class="card-title">RESEARCH EXPERIENCE</h3>
          <button class="btn btn-outline-success" type="button" onclick="addRow1('dataTable1')" ><i class="bi bi-plus-circle"></i></button>
    <button class="btn btn-outline-danger" type="button" onclick="deleteRow1('dataTable1')" ><i class="bi bi-trash-fill"></i></button> 
          <table class="table table-striped">
                <tr>
            <th></th>
            <th style="text-align: left;">Institution</th>
            <th style="text-align: left;">Specialisation</th>
            <th style="text-align: left;">Designation</th>
            <th style="text-align: left;">From Date</th>
            <th style="text-align: left;">To Date</th>
            <th style="text-align: left;">Duration</th>
             <!-- <th style="text-align: center;">Action</th> -->
        </tr>
          </table>
    <TABLE id="dataTable1" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><input  class="form-control" type="text" name="research_institution[]">
        @error("research_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_institution")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="research_specialisation[]">
        @error("research_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="research_designation[]">
        @error("research_designation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_designation")}}</span>
                            @enderror
   </TD>
     
       <TD><input class="form-control" type="date" name="research_fromdate[]" required>
        @error("research_fromdate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_fromdate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="date" name="research_todate[]" required>
        @error("research_todate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_todate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="text" name="research_duration[]" required>
        @error("research_duration")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("research_duration")}}</span>
                            @enderror
   </TD>
    
     
       <TD>
        
   
    
      </TD>

      

    </TR>
  </TABLE>
    </div>
</div> 

<div class="col-12">
    <div class="table-responsive">
         
         <h3 class="card-title">Other Experience</h3>

           <button class="btn btn-outline-success" type="button" onclick="addRow2('dataTable2')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow2('dataTable2')" ><i class="bi bi-trash-fill"></i></button> 
          <table class="table table-striped">
                <tr>
            <th></th>
            <th style="text-align: left;">Institution</th>
            <th style="text-align: left;">Specialisation</th>
            <th style="text-align: left;">Designation</th>
            <th style="text-align: left;">From Date</th>
            <th style="text-align: left;">To Date</th>
            <th style="text-align: left;">Duration</th>
            <!--  <th style="text-align: center;">Action</th> -->
        </tr>
          </table>
    <TABLE id="dataTable2" class="table table-striped">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><input  class="form-control" type="text" name="other_institution[]">
        @error("other_institution")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_institution")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="other_specialisation[]">
        @error("other_specialisation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_specialisation")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control" type="text" name="other_designation[]">
        @error("other_designation")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_designation")}}</span>
                            @enderror
   </TD>
     
       <TD><input class="form-control" type="date" name="other_fromdate[]" required>
        @error("other_fromdate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_fromdate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="date" name="other_todate[]" required>
        @error("other_todate")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_todate")}}</span>
                            @enderror
   </TD>
   <TD><input class="form-control" type="text" name="other_duration[]" required>
        @error("other_duration")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("other_duration")}}</span>
                            @enderror
   </TD>
     
      
     
       <TD>
        
   
    
      </TD>

      

    </TR>
  </TABLE>
    </div>
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


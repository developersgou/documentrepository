 @section("title","SGOU|DASHBOARD")
@extends("userlayouts.theme")
  @section("maincontent")
   <script>
    $(document).ready(function(){
      $("#pmadthree").blur(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('user.ajax-pincodemapping')}}?pmadthree="+value, success: function(result)
        {
          $("#pmfr").html(result);
         
           

        }});
      });
    });

</script>
<script>
   $(document).ready(function(){
      $("#pmadfour").blur(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('user.ajax-districtmaping')}}?pmadfour="+value, success: function(result)
        {
          $("#pmfi").html(result);
         
           

        }});
      });
    });
</script>
    <script>
      $(document).ready(function(){
         $("#pmadfive").blur(function(){
           let value = $(this).val();
           $.ajax({url: "{{route('user.ajax-statemaping')}}?pmadfive="+value, success: function(result)
           {
             $("#pmsi").html(result);
   
           }});
         });
       });
       </script>      
       <script>
    $(document).ready(function(){
      $("#comadthree").blur(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('user.ajax-pincodemappingtwo')}}?comadthree="+value, success: function(result)
        {
          $("#comfr").html(result);
         
           

        }});
      });
    });

</script>
<script>
   $(document).ready(function(){
      $("#comadfour").change(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('user.ajax-districtmapingtwo')}}?comadfour="+value, success: function(result)
        {
          $("#comfi").html(result);
         
           

        }});
      });
    });</script>
    <script>
      $(document).ready(function(){
         $("#comadfive").blur(function(){
           let value = $(this).val();
           $.ajax({url: "{{route('user.ajax-statemapingtwo')}}?comadfive="+value, success: function(result)
           {
             $("#comsi").html(result);
   
           }});
         });
       });
       </script>  



 <div class="pagetitle">

    
      <div class="alert alert-primary" style="background-color:#1779f4;color: white;text-transform: uppercase;"> <a href="{{route('user.user-profile')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i>Back</a>| EDIT PROFILE </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
    

 <form   class="row g-3" method="POST" action="{{route('user.communicationdetails-update',[$cdetails['id']])}}"  autocomplete="off">
      @csrf
       @method("PUT")
  <div class="col-12">
 
  <div class="row">
  <div class="col-lg-6">
    
   <div class="card">
  <div class="card-body">

    

     <h5 class="card-title">PERMANENT ADDRESS</h5>
    
     <div class="row">
             
          
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Housename/Houseno</label>
                  
                 <input id="pmadone" type="text" class="form-control" name="pmtaddresslineone" value="{{$cdetails->pmtaddresslineone}}">
               

                                 @error("pmtaddresslineone")
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslineone")}}</span>

                            @enderror
                </div>
                <div class="col-md-6">
                <label for="inputName5" class="form-label">Locality</label>
                  
                 <input id="pmadtwo" type="text" class="form-control" name="pmtaddresslinetwo" value="{{$cdetails->pmtaddresslinetwo}}">
               

                                 @error("pmtaddresslinetwo")
                          
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslinetwo")}}</span>
                            @enderror
                </div>
                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Pincode</label>
                <input type="number" id="pmadthree" name="pmtaddresslinethree" class="form-control" value="{{$cdetails->pmtaddresslinethree}}">

                                 @error("pmtaddresslinethree")
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslinethree")}}</span>
                            @enderror
                </div>
                 
                

                  <div class="col-md-6">
                  <label for="inputName5" class="form-label">Postoffice</label>
                  <input list="pmfr"  id="pmadfour" name="pmtaddresslinefour" class="form-control"  value="{{$cdetails->pmtaddresslinefour}}">
                 

                <datalist id="pmfr">
    
                </datalist>
             
                              
                

                                @error("pmtaddresslinefour")
                         
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslinefour")}}</span>
                            @enderror
                </div>
               
                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">District</label>
               
                   <input list="pmfi" id="pmadfive" name="pmtaddresslinefive"  value="{{$cdetails->pmtaddresslinefive}}" class="form-control">
                 

                <datalist id="pmfi">
    
                </datalist>

                 

                                 @error("pmtaddresslinefive")
                        
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslinefive")}}</span>
                            @enderror
                </div>
                  
                  
                 
                  <div class="col-md-6">
                  <label for="inputName5" class="form-label">State</label>
                  <input list="pmsi"  id="pmadsix" name="pmtaddresslinesix" class="form-control"  value="{{$cdetails->pmtaddresslinesix}}">
                
                    <datalist id="pmsi">
    
                    </datalist>

                 

                                 @error("pmtaddresslinesix")
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("pmtaddresslinesix")}}</span>
                            @enderror
                </div>
                 

             
            </div>
</div>
</div> 
</div> 
<div class="col-lg-6">
   <div class="card">
<div class="card-body">
    <table width="100%">
        <tr>
            <td><h5 class="card-title">COMMUNICATION ADDRESS</h5></td>
            <td id="color"> <h6>Copy permanent address <input class="form-check-input" type="checkbox" id="myCheck" onclick="adreesSimilarity();"></h6></td>
        </tr>
    </table>

             
 
             <div class="row">
             
          
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Housename/Houseno</label>
                  
                 <input id="comadone" type="text" class="form-control" name="commaddresslineone" value="{{$cdetails->commaddresslineone}}">
               

                            @error("commaddresslineone")
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslineone")}}</span>
                            @enderror
                </div>
                 
                 
                <div class="col-md-6">
                <label for="inputName5" class="form-label">Locality</label>
                  
                 <input id="comadtwo" type="text" class="form-control" name="commaddresslinetwo" value="{{$cdetails->commaddresslinetwo}}">
               

                                 @error("commaddresslinetwo")
                        
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslinetwo")}}</span>
                            @enderror
                </div>

                 
               <div class="col-md-6">
                  <label for="inputName5" class="form-label">Pincode</label>
                <input type="number" id="comadthree" name="commaddresslinethree" class="form-control" value="{{$cdetails->commaddresslinethree}}" >



                                 @error("commaddresslinethree")
                             <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslinethree")}}</span>
                            @enderror
                </div>
              
              <div class="col-md-6">
                  <label for="inputName5" class="form-label">Postoffice</label>
          
                <input list="comfr"  id="comadfour" name="commaddresslinefour" class="form-control" value="{{$cdetails->commaddresslinefour}}">
                 

                <datalist id="comfr">
    
                </datalist>
             
                  @error("commaddresslinefour")
                       
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslinefour")}}</span>
                 @enderror
                              
                 </div>
              
                
                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">District</label>

                <input list="comfi"  id="comadfive" name="commaddresslinefive" class="form-control" value="{{$cdetails->commaddresslinefive}}">
                

                <datalist id="comfi">
    
                </datalist>


                                 @error("commaddresslinefive")
                       
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslinefive")}}</span>
                            @enderror
                </div>
                  
                  <div class="col-md-6">
                  <label for="inputName5"  class="form-label">State</label>

                     <input list="comsi"  id="comadsix" name="commaddresslinesix" class="form-control" value="{{$cdetails->commaddresslinesix}}">
                

                <datalist id="comsi">
    
                </datalist>

                                 @error("commaddresslinesix")
                          
                                 <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("commaddresslinesix")}}</span>
                            @enderror
                </div>
                 
                 
                 

              
                 
            </div>
</div>
</div> 
</div> 

<div class="col-12">

      <center>  <button type="submit" id="continue" class="btn btn-primary">Update</button>
                 
    </center>
                
                </div> 
</div>
</div>
 </form>


    <!-- End Multi Columns Form -->

              </div>
            </div>
 
 
      </div>
       <script>
$(document).ready(function()
         {
        $("#personal_photo").on('change', function() 
        {
            document.getElementById('preview').style.display='block'

          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
   <script>
$(document).ready(function() {
        $("#personal_signature").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder2 = $("#image-holder2");
          image_holder2.empty();
          if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder2);
                }
                image_holder2.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
    </section>
    @endsection
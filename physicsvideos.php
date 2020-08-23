<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap css -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">

<!-- custom css (optional) -->
<link href="css/style.css" rel="stylesheet">
<link href="css/dropdown.css" rel="stylesheet">


<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
.topnav-right {
  float:right;
}
</style>

<script src="js/myscript.js"></script>

<link rel="stylesheet" href="css/video_css.css"></link>

<!-- ...........................................END of STOP VIDEO SCript...................................-->
<!-- ..........................................start of BUTTON script......................................-->
  <script>
  $(document).ready(function(){
    var originalcolor = $("#mid-II").attr('class');
    var changecolor="btn btn-danger btn-lg";
      $("#CollapseExample1").show();
      $("#CollapseExample2").hide();
      $("#CollapseExample3").hide();

      if($("#mid-II").click(function(){
          $("#mid-II").attr('class', changecolor);
          $("#mid-I").attr('class', originalcolor);
          $("#mid-III").attr('class', originalcolor);
        $("#CollapseExample2").show();
        $("#CollapseExample1").hide();
        $("#CollapseExample3").hide();


      }));

      if($("#mid-I").click(function(){
        $("#mid-I").attr('class', changecolor);
        $("#mid-II").attr('class', originalcolor);
        $("#mid-III").attr('class', originalcolor);
        $("#CollapseExample1").show();
        $("#CollapseExample2").hide();
        $("#CollapseExample3").hide();

      }));

            if($("#mid-III").click(function(){
              $("#mid-III").attr('class', changecolor);
              $("#mid-II").attr('class', originalcolor);
              $("#mid-I").attr('class', originalcolor);
              $("#CollapseExample3").show();
              $("#CollapseExample2").hide();
              $("#CollapseExample1").hide();

            }));
});
</script>
</head>
<body>
  <?php include("header.php") ?>
  <div class="container-fluid">
<center><h1 id="heading">PHYSICS VIDEO LECTURES:</h1></center>
<hr id="hrc">
<br>

<!--button for selecting the terms -->
<div id="button-group">
<center>
<p>
<button class="btn btn-danger btn-lg mb-1" id="mid-I">MID-TERM I&nbsp&nbsp</button>
<button class="btn btn-primary btn-lg mb-1" id="mid-II">MID-TERM II&nbsp</button>
<button class="btn btn-primary btn-lg mb-1" id="mid-III">MID-TERM III</button>
</p>
</center>
</div>
<br>

<!-- ........................................MODEL START FROM HERE .................................................................-->


<div id="CollapseExample1">
<h3 style="margin-left:600px"> MODULE I </h3>
<hr width="1100px" height="2px" style="background-color:tomato">

<div class="container">

<br>
<!-- Starting of the first row-->

<div class="row">
<!--Starting of the colums-->
<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">INTERFERENCE</h4>
  <a href="#myModal1" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                   <!-- end of first col-->

                  <!--Starting of the modal -->

                          <div id="myModal1" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">Modal Header</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <center><iframe id="Video1" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/CAe3lkYNKt8" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
<img src="images\physics\interference and diffraction.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERNCE AND DIFFRACTION</h4>
<a href="#myModal2" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>                     <!-- end of second col-->

                  <!--Starting of the modal -->

                          <div id="myModal2" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                          <div class="modal-header">

                                    <h4 class="modal-title">Modal Header</h4>
                          </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- INTERFERNCE AND DIFFRACTION-->         <center><iframe id="Video2" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/oYFEWoxuB1I" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 2-->


<div class="col">
<div class="card">
<img src="images\physics\coherent sources of waves.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">COHERENT SOURCES OF LIGHT</h4>
  <a href="#myModal3" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                 <!-- end of third col-->


<!--Starting of the modal -->

                          <div id="myModal3" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">COHERENT SOURCES OF LIGHT</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- COHERENT SOURCES OF LIGHT -->        <center><iframe id="Video3" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Z6TQSVLMKE4" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 3-->



</div>  <!-- end of row 1-->

<br>
<br>


<!--Starting of row 2-->
<div class="row">
 <!--Starting OF COL 1 ROW 2-->

 <div class="col">
  <div class="card">
  <img src="images\physics\fresnels biprism.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">FRESNELS BIPRISM</h4>
    <a href="#myModal4" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of first col-->

<!--Starting of modal 4 -->

                           <div id="myModal4" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">FRESNELS BIPRISM</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- FRESNELS BIPRISM -->        <center><iframe id="Video4" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/oKAsZIbOe0c" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 4-->



<div class="col">
<div class="card">
<img src="images\physics\fresnels biprism(experiment 1).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">FRESNELS BIPRISM(EXP1)</h4>
  <a href="#myModal5" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 5 -->

                             <div id="myModal5" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- FRESNELS BIPRISM(EXP1) -->        <center><iframe id="Video5" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/DfqaYpXYSDY" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 1-->




 <div class="col">
  <div class="card">
  <img src="images\physics\fresnels biprism(experiment 2).png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">FRESNELS BIPRISM(EXP2)</h4>
    <a href="#myModal6" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 2-->


          <!--Starting of modal 6 -->

                                      <div id="myModal6" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">

                                                      <h4 class="modal-title">FRESNEL'S BIPRISM(EXP2)</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- FRESNELS BIPRISM(EXP2) -->        <center><iframe id="Video6" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/qUYU5WV0V5Q" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 6-->


</div>  <!-- end of 2st row -->
<br>
<br>

<!--Starting of row 3-->
<div class="row">
<!--Starting OF COL 1 ROW 3-->

<div class="col">
<div class="card">
<img src="images\physics\youngs double slit experiment.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">YDSE PART 1</h4>
  <a href="#myModal7" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                         <div id="myModal7" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">YDSE PART 1</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- YDSE PART 1 -->        <center><iframe id="Video7" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/MDX3qb_BMs4" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src="images\physics\ydse2.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">YDSE PART 2 </h4>
<a href="#myModal8" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW3-->

<!--Starting of modal 8 -->

                           <div id="myModal8" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">YDSE PART 2</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- YDSE PART 2 -->        <center><iframe id="Video8" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Dze26GQK4o0" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 8-->




<div class="col">
<div class="card">
<img src="images\physics\diffraction.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">DIFFRACTION OF LIGHT</h4>
  <a href="#myModal9" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 3-->


        <!--Starting of modal 9 -->

                                    <div id="myModal9" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">

                                                    <h4 class="modal-title">DIFFRACTION OF LIGHT</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- DIFFRACTION OF LIGHT -->        <center><iframe id="Video9" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/-mNQW5OShMA" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 9-->


</div>  <!-- end of ROW 3 -->
<br>
<br>

<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\physics\diffraction grating.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">DIFFRACTION GRATING</h4>
<a href="#myModal10" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 10 -->

                       <div id="myModal10" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title"> DIFFRACTION GRATING</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DIFFRACTION GRATING -->        <center><iframe id="Video10" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/EUA8KYv-je4" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 10-->



<div class="col">
<div class="card">
<img src="images\physics\diffraction at a single slit.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">DIFFRACITON DUE TO SINGLE SLIT</h4>
<a href="#myModal11" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 8 -->

                         <div id="myModal11" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title"> DIFFRACITON DUE TO SINGLE SLIT</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DIFFRACITON DUE TO SINGLE SLIT -->        <center><iframe id="Video11" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/h9xx3pXFW-g" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 11-->




<div class="col">
<div class="card">
<img src="images\physics\polarisation of light.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Polarization of Light</h4>
<a href="#myModal12" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 4-->


      <!--Starting of modal 12 -->

                                  <div id="myModal12" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title"> POLARIZATION</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- POLARIZATION -->        <center><iframe id="Video12" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/6_C8KyU67RU" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 12-->


</div>  <!-- end of ROW 4 -->

<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\physics\newtons experiment.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">NEWTONS RINGS EXPERIMENT</h4>
<a href="#myModal13" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal13" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title"> NEWTONS RINGS EXPERIMENT</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--NEWTONS RINGS EXPERIMENT -->        <center><iframe id="Video13" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/dsociG2sXGM" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->



<div class="col">
<div class="card">
<img src="images\physics\interference 3.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">ORDINARY AND EXTRA ORDINARY RAYS</h4>
<a href="#myModal14" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                         <div id="myModal14" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">  ORDINARY AND EXTRA ORDINARY RAYS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- ORDINARY AND EXTRA ORDINARY RAYS-->        <center><iframe id="Video14" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/iRwagObFrPM" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 14-->




<div class="col">
<div class="card">
<img src="images\physics\interference11.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Polarized light and optical acitivity</h4>
<a href="#myModal15" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 5-->


      <!--Starting of modal 15 -->

                                  <div id="myModal15" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">  Polarized light and optical acitivity</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- Polarized light and optical acitivity -->    <center><iframe id="Video15" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/q-YhdLDbe5o" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 15-->


</div>  <!-- end of ROW 5 -->
<br>
<br>
</div><!-- end of container -->
</div> <!-- end of div for id-->






<!-- __________________________________________________MIDTERM-II_____________________________________________________  -->



<div id="CollapseExample2">
<h3 style="margin-left:600px"> MODULE II </h3>
<hr width="1100px" height="2px" style="background-color:tomato">
<div class="container">
<br>
<!-- Starting of the first row-->

<div class="row">
<!--Starting of the colums-->
<div class="col">
<div class="card">
<img src="images\physics\interference of waves.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">INTERFERENCE</h4>
  <a href="#myModal16" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                   <!-- end of first col-->

                  <!--Starting of the modal -->

                          <div id="myModal16" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">DIFFRACTION</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <center><iframe id="Video16" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/CAe3lkYNKt8" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 16-->


<div class="col">
<div class="card">
<img src="images\physics\interference and diffraction.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERNCE AND DIFFRACTION</h4>
<a href="#myModal17" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>                     <!-- end of second col-->

                  <!--Starting of the modal -->

                          <div id="myModal17" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                          <div class="modal-header">

                                    <h4 class="modal-title">INTERFERNCE AND DIFFRACTION</h4>
                          </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- INTERFERNCE AND DIFFRACTION-->         <center><iframe id="Video17" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/oYFEWoxuB1I" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">INTERFERENCE</h4>
  <a href="#myModal18" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                 <!-- end of third col-->


<!--Starting of the modal -->

                          <div id="myModal18" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">Modal Header</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- COHERENT SOURCES OF LIGHT -->        <center><iframe id="Video18" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Z6TQSVLMKE4" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 1-->



</div>  <!-- end of row 1-->

<br>
<br>


<!--Starting of row 2-->
<div class="row">
 <!--Starting OF COL 1 ROW 2-->

 <div class="col">
  <div class="card">
  <img src="images\physics\interference of waves.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">INTERFERENCE</h4>
    <a href="#myModal19" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of first col-->

<!--Starting of modal 4 -->

                           <div id="myModal19" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">Modal Header</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- FRESNELS BIPRISM -->        <center><iframe id="Video19" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/oKAsZIbOe0c" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 4-->



<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">INTERFERENCE</h4>
  <a href="#myModal20" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 5 -->

                             <div id="myModal20" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- FRESNELS BIPRISM(EXP1) -->        <center><iframe id="Video20" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/DfqaYpXYSDY" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 1-->




 <div class="col">
  <div class="card">
  <img src="images\physics\interference of waves.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">INTERFERENCE</h4>
    <a href="#myModal21" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 2-->


          <!--Starting of modal 6 -->

                                      <div id="myModal21" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">

                                                      <h4 class="modal-title">FRESNEL'S BIPRISM(EXP2)</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- FRESNELS BIPRISM(EXP2) -->        <center><iframe id="Video21" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/qUYU5WV0V5Q" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 6-->


</div>  <!-- end of 2st row -->
<br>
<br>


<!--Starting of row 3-->
<div class="row">
<!--Starting OF COL 1 ROW 3-->

<div class="col">
<div class="card">
<img src="images\physics\youngs double slit experiment.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">YDSE PART 1</h4>
  </div>
  <a href="#myModal22" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>

</div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                         <div id="myModal22" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">YDSE PART 1</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- YDSE PART 1 -->        <center><iframe id="Video22" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/MDX3qb_BMs4" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src="images\physics\ydse2.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">YDSE PART 2</h4>
<a href="#myModal23" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW3-->

<!--Starting of modal 8 -->

                           <div id="myModal23" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">YDSE PART 2</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- YDSE PART 2 -->        <center><iframe id="Video23" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Dze26GQK4o0" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 8-->




<div class="col">
<div class="card">
<img src="images\physics\diffraction.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">DIFFRACTION OF LIGHT</h4>
  <a href="#myModal24" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 3-->


        <!--Starting of modal 24 -->

                                    <div id="myModal24" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">

                                                    <h4 class="modal-title">DIFFRACTION OF LIGHT</h4>
                                          </div>

                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- DIFFRACTION OF LIGHT -->        <center><iframe id="Video24" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/-mNQW5OShMA" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 24-->


</div>  <!-- end of ROW 3 -->
<br>
<br>
<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal25" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 25 -->

                       <div id="myModal25" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DIFFRACTION GRATING -->        <center><iframe id="Video25" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/EUA8KYv-je4" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 25-->



<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal26" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 26 -->

                         <div id="myModal26" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DIFFRACITON DUE TO SINGLE SLIT -->        <center><iframe id="Video26" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/h9xx3pXFW-g" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 26-->




<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal27" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 4-->


      <!--Starting of modal 27 -->

                                  <div id="myModal27" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- POLARIZATION -->        <center><iframe id="Video27" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/6_C8KyU67RU" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 27-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal28" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 28-->

                       <div id="myModal28" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--NEWTONS RINGS EXPERIMENT -->        <center><iframe id="Video28" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/dsociG2sXGM" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 28-->



<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal29" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 29 -->

                         <div id="myModal29" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- ORDINARY AND EXTRA ORDINARY RAYS-->        <center><iframe id="Video29" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/iRwagObFrPM" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 29-->




<div class="col">
<div class="card">
<img src="images\physics\interference.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTERFERENCE</h4>
<a href="#myModal30" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 5-->


      <!--Starting of modal 30 -->

                                  <div id="myModal30" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">FRESNELS BIPRISM(EXP1) </h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- Polarized light and optical acitivity -->    <center><iframe id="Video30" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/q-YhdLDbe5o" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 30-->

                            </div>  <!-- end of ROW 5 -->
                            <br>
                            <br>
                            </div><!-- end of container -->
                            </div> <!-- end of div for id-->



<!-- _________________________________________________-MODULE-III____________________________________ -->

<div id="CollapseExample3">
<h3 style="margin-left:600px"> MODULE III </h3>
<hr width="1100px" height="2px" style="background-color:tomato">
<div class="container">
<br>
<!-- Starting of the first row-->

<div class="row">
<!--Starting of the colums-->
<div class="col">
<div class="card">
<img src="images\physics\reference(mod3).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">Refernce frames and Principle of relativity</h4>
  <a href="#myModal31" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                   <!-- end of first col-->

                  <!--Starting of the modal 32 -->

                          <div id="myModal31" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

<!--Refernce frames and Principle of relativity-->    <h4 class="modal-title">Refernce frames and Principle of relativity</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <center><iframe id="Video31" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/ng6ANMGNlpg" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 32-->


<div class="col">
<div class="card">
<img src="images\physics\gallaleio transformation.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Galilean Transformation Equation</h4>
<a href="#myModal32" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>                     <!-- end of second col-->

                  <!--Starting of the modal 32 -->

                          <div id="myModal32" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                          <div class="modal-header">

                                    <h4 class="modal-title">Modal Header</h4>
                          </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--Galilean Transformation Equation-->         <center><iframe id="Video32" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/QRKtQKCbEII" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal32-->


<div class="col">
<div class="card">
<img src="images\physics\michaelson morley(mod3).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">Michelson-Morley Experiment</h4>
  <a href="#myModal33" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                 <!-- end of third col 33-->


<!--Starting of the modal -->

                          <div id="myModal33" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">Michelson-Morley Experiment</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--Michelson-Morley Experiment -->        <center><iframe id="Video33" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Ui0WPRTVkNM" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 33-->



</div>  <!-- end of row 1-->

<br>
<br>


<!--Starting of row 2-->
<div class="row">
 <!--Starting OF COL 1 ROW 2-->

 <div class="col">
  <div class="card">
  <img src="images\physics\reference(mod3).png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">Einstein's Theory of relativity</h4>
    <a href="#myModal34" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of first col-->

<!--Starting of modal 34 -->

                           <div id="myModal34" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">Einstein's Theory of relativity</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- Einstein's Theory of relativity -->        <center><iframe id="Video34" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/ev9zrt__lec" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 34-->



<div class="col">
<div class="card">
<img src="images\physics\mod3.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">Lorentz Transformation</h4>
  <a href="#myModal35" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 35 -->

                             <div id="myModal35" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">Lorentz Transformation </h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- Lorentz Transformation -->        <center><iframe id="Video35" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/EhXWiAJBmzc" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 35-->




 <div class="col">
  <div class="card">
  <img src="images\physics\relativistic momentum.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">Length Contraction and Special Relativity</h4>
    <a href="#myModal36" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 2-->


          <!--Starting of modal 36 -->

                                      <div id="myModal36" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">

                                                      <h4 class="modal-title">Length Contraction and Special Relativity</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- Length Contraction and Special Relativity -->   <center><iframe id="Video36" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/NdAE6TAP2t8" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 36-->


</div>  <!-- end of 2st row -->
<br>
<br>

<!--Starting of row 3-->
<div class="row">
<!--Starting OF COL 1 ROW 3-->

<div class="col">
<div class="card">
<img src="images\physics\time delation.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">Time dilation</h4>
  <a href="#myModal37" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                         <div id="myModal37" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">Time dilation</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- Time dilation -->        <center><iframe id="Video37" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/-OZzE_hr-j0" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 37-->



<div class="col">
<div class="card">
<img src="images\physics\gallaleio(mod3).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Galilean Transformation Equations for Velocity</h4>
<a href="#myModal38" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW3-->

<!--Starting of modal 38 -->

                           <div id="myModal38" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">Galilean Transformation Equations for Velocity</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- Galilean Transformation Equations for Velocity --> <center><iframe id="Video38" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/NH3_lIkSB9s" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 38-->




<div class="col">
<div class="card">
<img src="images\physics\rest mass energy.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">MassEnergy equivalence(Rest MassEnergy)</h4>
  <a href="#myModal39" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 3-->


        <!--Starting of modal 39 -->

                                    <div id="myModal39" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">MassEnergy equivalence(Rest MassEnergy)</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- MassEnergy equivalence(Rest MassEnergy) -->        <center><iframe id="Video39" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/5nTQ7bnkarM" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 39-->


</div>  <!-- end of ROW 3 -->
<br>
<br>

<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\physics\relativistic momentum.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Relativistic Momentum</h4>
<a href="#myModal40" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 40 -->

                       <div id="myModal40" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">

                               <div class="modal-header">

                                         <h4 class="modal-title">Relativistic Momentum</h4>
                               </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- Relativistic Momentum -->        <center><iframe id="Video40" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/dwWm4ij85lQ" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 40-->



<div class="col">
<div class="card">
<img src="images\physics\debroglie hypothesis.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">deBroglie Hypothesis</h4>
<a href="#myModal41" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 41 -->

                         <div id="myModal41" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">deBroglie Hypothesis</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--deBroglie Hypothesis -->        <center><iframe id="Video41" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/XCHHHdd0zG8" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 41-->




<div class="col">
<div class="card">
<img src="images\physics\wave particle duality.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Wave Particle Duality</h4>
<a href="#myModal42" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 4-->


      <!--Starting of modal 42 -->

                                  <div id="myModal42" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                          <div class="modal-header">

                                                    <h4 class="modal-title">Wave Particle Duality</h4>
                                          </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- Wave Particle Duality -->        <center><iframe id="Video42" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/eYOcuYhnrCU" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 42-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\physics\phase velocity and group velocity.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Relation between phase velocity and group velocity</h4>
<a href="#myModal43" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal43" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">

                               <div class="modal-header">

                                         <h4 class="modal-title">Relation between phase velocity and group velocity</h4>
                               </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--Relation between phase velocity and group velocity -->        <center><iframe id="Video43" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/FEV2Zhz3yY4" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 43-->



<div class="col">
<div class="card">
<img src="images\physics\xray diffraction.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">X-ray diffraction and Bragg's Law</h4>
<a href="#myModal44" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 44 -->

                         <div id="myModal44" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">X-ray diffraction and Bragg's Law</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- X-ray diffraction and Bragg's Law-->        <center><iframe id="Video44" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/aFyjUhFCL5Q" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 44-->




<div class="col">
<div class="card">
<img src="images\physics\compton effect.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">Cromptons Effect</h4>
<a href="#myModal45" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 5-->


      <!--Starting of modal 45 -->

                                  <div id="myModal45" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">Cromptons Effect</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- Cromptons Effect -->    <center><iframe id="Video45" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/3Jz0wGKgtAM" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 45-->

                            </div>  <!-- end of ROW 5 -->
                            <br>
                            <br>
                            </div><!-- end of container -->
                            </div> <!-- end of div for id-->


<!-- ________________________________________________END OF MODULE-III________________________ -->
</div>
<?php include("footer.php") ?>

</body>
</html>

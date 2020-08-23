<!DOCTYPE html>
<html lang="en">
<head>
  <title> Lectures</title>
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

  <style>
  .topnav-right {
      float:right;
    }
    </style>

  <script src="js/myscript.js"></script>

  <link rel="stylesheet" href="css/video_css.css">


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
    <br>
    <div class="container-fluid">
<center><h1 id="heading">ELECTRICAL ENGINEERING VIDEO LECTURES:</h1></center>
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
  <div class="card border border-warning">
  <img src="images\ELECTRICAL VIDEOS\MID TERM I\INTRODUCTION TO CIRCUIT PARAMETERS.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">INTRODUCTION TO CIRCUIT PARAMETERS</h4>
    <a href="#myModal1" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                   <!-- end of first col-->

                    <!--Starting of the modal1 -->

                            <div id="myModal1" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">INTRODUCTION TO CIRCUIT PARAMETERS</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="Video1" width="750" height="520" src="https://www.youtube.com/embed/777WPL-bx8w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\KIRCHOFF'S CURRENT LAW.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">KIRCHOFF'S CURRENT LAW</h4>
  <a href="#myModal2" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                     <!-- end of second col-->

                    <!--Starting of the modal -->

                            <div id="myModal2" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                            <div class="modal-header">

                                      <h4 class="modal-title">KIRCHOFF'S CURRENT LAW</h4>
                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- KIRCHOFF'S CURRENT LAW-->         <center><iframe id="Video2" width="750" height="520" src="https://www.youtube.com/embed/n__cezo9R1U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 2-->


 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM I\KIRCHOFF'S VOLTAGE LAW.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">KIRCHOFF'S VOLTAGE LAW</h4>
    <a href="#myModal3" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                 <!-- end of third col-->


<!--Starting of the modal -->

                            <div id="myModal3" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">KIRCHOFF'S VOLTAGE LAW</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- KIRCHOFF'S VOLTAGE LAW -->  <center><iframe id="Video3" width="750" height="520" src="https://www.youtube.com/embed/dlROTnDbULo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    <img src="images\ELECTRICAL VIDEOS\MID TERM I\MESH ANALYSIS.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">MESH ANALYSIS</h4>
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

                                             <h4 class="modal-title">MESH ANALYSIS</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MESH ANALYSIS-->        <center><iframe id="Video4" width="750" height="520" src="https://www.youtube.com/embed/3DDm2wR1MF8"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 4-->



 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM I\NORTON THEOREM.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">NORTON THEOREM</h4>
    <a href="#myModal5" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 5 -->

                               <div id="myModal5" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">NORTON THEOREM</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- NORTON THEOREM -->        <center><iframe id="Video5" width="750" height="520" src="https://www.youtube.com/embed/qw0QExrzoYg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 5-->




   <div class="col">
    <div class="card">
    <img src="images\ELECTRICAL VIDEOS\MID TERM I\THEVNINS THEOREM.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">THEVENINS THEOREM</h4>
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

                                                        <h4 class="modal-title">THEVENINS THEOREM</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!--THEVNINS THEOREM -->        <center><iframe id="Video6" width="750" height="520" src="https://www.youtube.com/embed/-jqmPMy8hHM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
  <img src="images\ELECTRICAL VIDEOS\MID TERM I\MAX POWER TRANSFER THEOREM.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">MAX POWER TRANSFER THEOREM</h4>
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

                                           <h4 class="modal-title">MAX POWER TRANSFER THEOREM</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MAX POWER TRANSFER THEOREM -->        <center><iframe id="Video7" width="750" height="520" src="https://www.youtube.com/embed/-jqmPMy8hHM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\SUPERPOSITION THEOREM.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">SUPERPOSITION THEOREM</h4>
  <a href="#myModal8" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 8 -->

                             <div id="myModal8" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">SUPERPOSITION THEOREM</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- SUPERPOSITION THEOREM-->        <center><iframe id="Video8" width="750" height="520" src="https://www.youtube.com/embed/mfFh3c-b07w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 8-->




 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM I\STAR AND DELTA CONNECTION.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">STAR AND DELTA CONNECTION</h4>
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

                                                      <h4 class="modal-title">STAR AND DELTA CONNECTION</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- STAR AND DELTA CONNECTION -->        <center><iframe id="Video9" width="750" height="520" src="https://www.youtube.com/embed/RRUL7vCHelo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ELECTRICAL VIDEOS\MID TERM I\THREE PHASE CIRCUIT(STAR CONNECTION).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">THREE PHASE CIRCUIT(STAR CONNECTION)</h4>
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

                                         <h4 class="modal-title">THREE PHASE CIRCUIT(STAR CONNECTION)</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- THREE PHASE CIRCUIT(STAR CONNECTION)-->        <center><iframe id="Video10" width="750" height="520" src="https://www.youtube.com/embed/P-mXM1Gvn4g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 10-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\THREE PHASE CIRCUIT(DELTA CONNECTION).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">THREE PHASE CIRCUIT(DELTA CONNECTION)</h4>
<a href="#myModal11" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 8 -->

                           <div id="myModal11" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">THREE PHASE CIRCUIT(DELTA CONNECTION)</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- THREE PHASE CIRCUIT(DELTA CONNECTION) -->        <center><iframe id="Video11" width="750" height="520" src="https://www.youtube.com/embed/jPFWb_4bf2s"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 11-->




<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\RMS AND AVG VALUE OF AC SIGNALS.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">RMS AND AVG VALUE OF AC SIGNALS</h4>
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

                                                    <h4 class="modal-title">RMS AND AVG VALUE OF AC SIGNALS</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- RMS AND AVG VALUE OF AC SIGNALS -->        <center><iframe id="Video12" width="750" height="520" src="https://www.youtube.com/embed/qDHsokTcgck"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ELECTRICAL VIDEOS\MID TERM I\PHASOR AND PHASOR DIAGRAM.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">PHASOR AND PHASOR DIAGRAM</h4>
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

                                         <h4 class="modal-title">PHASOR AND PHASOR DIAGRAM</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--PHASOR AND PHASOR DIAGRAM -->        <center><iframe id="Video13" width="750" height="520" src="https://www.youtube.com/embed/zlmwmvijn1Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 13-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\CONCEPT OF PHASOR DIAGRAM(BEST EXPLAINED).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">CONCEPT OF PHASOR DIAGRAM(BEST EXPLAINED)</h4>
<a href="#myModal14" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                           <div id="myModal14" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">CONCEPT OF PHASOR DIAGRAM(BEST EXPLAINED)</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- CONCEPT OF PHASOR DIAGRAM(BEST EXPLAINED)-->        <center><iframe id="Video14" width="750" height="520" src="https://www.youtube.com/embed/lWteL-v7bpw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 14-->




<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\PHASOR DIAGRAM(RL,RC AND RLC CIRCUIT).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">PHASOR DIAGRAM(RL,RC AND RLC CIRCUIT)</h4>
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

                                                    <h4 class="modal-title">PHASOR DIAGRAM(RL,RC AND RLC CIRCUIT)</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- PHASOR DIAGRAM(RL,RC AND RLC CIRCUIT) -->    <center><iframe id="Video15" width="750" height="520" src="https://www.youtube.com/embed/HaFrY0qQ-NU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 15-->


</div>  <!-- end of ROW 5 -->
<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM I\AC CIRCUIT ANALYSIS.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">AC CIRCUIT ANALYSIS</h4>
  <a href="#myModal16" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                         <div id="myModal16" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">AC CIRCUIT ANALYSIS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--AC CIRCUIT ANALYSIS -->        <center><iframe id="Video16" width="750" height="520" src="https://www.youtube.com/embed/FE9QNX6O6kk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 13-->



                     <div class="col">
                     <div class="card" style="display:none;">

                     </div>
                     </div>
                     <!-- end of COL1 ROW 5-->
                     <div class="col">
                     <div class="card" style="display:none;"  >

                     </div>
                     </div>
                     <!-- end of COL1 ROW 5-->

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
  <img src="images\ELECTRICAL VIDEOS\MID TERM II\GENERATION OF 3-PHASE SUPPLY.png" class="card-img-top">
   <div class="card-body">
     <h4 class="card-title">GENERATION OF 3-PHASE SUPPLY</h4>
    <a href="#myModal24" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                   <!-- end of first col-->

                    <!--Starting of the modal -->

                            <div id="myModal24" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">GENERATION OF 3-PHASE SUPPLY</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="Video24" width="750" height="520" src="https://www.youtube.com/embed/CbcU5xS-OS8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 24-->


<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\NEED OF 3-PHASE SUPPLY.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">NEED OF 3-PHASE SUPPLY</h4>
  <a href="#myModal25" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                     <!-- end of second col-->

                    <!--Starting of the modal 25-->

                            <div id="myModal25" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                            <div class="modal-header">

                                      <h4 class="modal-title">NEED OF 3-PHASE SUPPLY</h4>
                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- NEED OF 3-PHASE SUPPLY -->         <center><iframe id="Video25" width="750" height="520" src="https://www.youtube.com/embed/ZYfZYl2ssyE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 25-->


 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM II\DELTA TO STAR CONVERSION.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">DELTA TO STAR CONVERSION</h4>
    <a href="#myModal26" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                 <!-- end of third col-->


<!--Starting of the modal -->

                            <div id="myModal26" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">DELTA TO STAR CONVERSION</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DELTA TO STAR CONVERSION -->        <center><iframe id="Video26" width="750" height="520" src="https://www.youtube.com/embed/OV0qi7yzKAM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 26-->



</div>  <!-- end of row 1-->

<br>
<br>


  <!--Starting of row 2-->
 <div class="row">
   <!--Starting OF COL 1 ROW 2-->

   <div class="col">
    <div class="card">
    <img src="images\ELECTRICAL VIDEOS\MID TERM II\STAR TO DELTA CONNECTION.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">STAR TO DELTA CONNECTION</h4>
      <a href="#myModal27" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
 <!-- end of first col-->

 <!--Starting of modal 4 -->

                             <div id="myModal27" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">STAR TO DELTA CONNECTION</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- STAR TO DELTA CONNECTION -->        <center><iframe id="Video27" width="750" height="520" src="https://www.youtube.com/embed/9b17eqCT4-g"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 27-->



 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM II\LINE CURRENT,LINE VOLTAGE,PHASOR CURRENT AND PHASOR VOLTAGE.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">LINE CURRENT,LINE VOLTAGE,PHASOR CURRENT AND PHASOR VOLTAGE</h4>
    <a href="#myModal28" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 28-->

                               <div id="myModal28" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">LINE CURRENT,LINE VOLTAGE,PHASOR CURRENT AND PHASOR VOLTAGE</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- LINE CURRENT,LINE VOLTAGE,PHASOR CURRENT AND PHASOR VOLTAGE -->        <center><iframe id="Video28" width="750" height="520" src="https://www.youtube.com/embed/NDcCuvc8NLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 28-->




   <div class="col">
    <div class="card">
    <img src="images\ELECTRICAL VIDEOS\MID TERM II\RELATIONSHIP BETWEEN LINE AND PHASE QUANTITIES.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">RELATIONSHIP BETWEEN LINE AND PHASE QUANTITIES</h4>
      <a href="#myModal29" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
       <!-- end of COL3 ROW 2-->


            <!--Starting of modal 29 -->

                                        <div id="myModal29" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                        <h4 class="modal-title">RELATIONSHIP BETWEEN LINE AND PHASE QUANTITIES</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!-- RELATIONSHIP BETWEEN LINE AND PHASE QUANTITIES -->        <center><iframe id="Video29" width="750" height="520" src="https://www.youtube.com/embed/WmTqTLv3uvY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                              </center>
                                            </div>
                                            </div>
                                        </div>
                                    </div>                            <!--End of modal 29-->


</div>  <!-- end of 2st row -->
<br>
<br>


<!--Starting of row 3-->
<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM II\FARADEY'S LAW OF ELECTRO MAGNETIC INDUCTION.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">FARADAY'S LAW OF ELECTRO-MAGNETIC INDUCTION</h4>
    <a href="#myModal30" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                           <div id="myModal30" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">FARADAY'S LAW OF ELECTRO-MAGNETIC INDUCTION</h4>
                               </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- FARADEY'S LAW OF ELECTRO MAGNETIC INDUCTION -->        <center><iframe id="Video30" width="750" height="520" src="https://www.youtube.com/embed/lXenWgHznlE"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 30-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\LENZ LAW.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">LENZ LAW</h4>
  <a href="#myModal31" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 8 -->

                             <div id="myModal31" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                             <div class="modal-header">

                                                       <h4 class="modal-title">LENZ LAW</h4>
                                             </div>
<!-- LENZ LAW -->        <center><iframe id="Video31" width="750" height="520" src="https://www.youtube.com/embed/AhC-jocpPG4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal31-->




 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM II\Hysteresis Curve(B-H Characteristics).png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">Hysteresis Curve(B-H Characteristics)</h4>
    <a href="#myModal32" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 32 -->

                                      <div id="myModal32" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                      <div class="modal-header">

                                                                <h4 class="modal-title">Hysteresis Curve(B-H Characteristics)</h4>
                                                      </div>
        <!--Hysteresis Curve(B-H Characteristics) -->        <center><iframe id="Video32" width="750" height="520" src="https://www.youtube.com/embed/qNVWdI79FN4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 32-->


</div>  <!-- end of ROW 3 -->
<br>
<br>
<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\MAGNETIC CIRCUIT(PART-1).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">MAGNETIC CIRCUIT(PART-1)</h4>
  <a href="#myModal33" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 33 -->

                         <div id="myModal33" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                         <div class="modal-header">

                                                   <h4 class="modal-title">MAGNETIC CIRCUIT(PART-1)</h4>
                                         </div>
<!--MAGNETIC CIRCUIT(PART-1) -->        <center><iframe id="Video33" width="750" height="520" src="https://www.youtube.com/embed/2ZwQZgyYkIE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 33-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\Magnetic circuits(Part -2).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">MAGNETICS CIRCUIT(Part -2)</h4>
<a href="#myModal34" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 34 -->

                           <div id="myModal34" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <div class="modal-header">

                                                     <h4 class="modal-title">MAGNETICS CIRCUIT(Part -2)</h4>
                                           </div>
<!-- Magnetic circuits(Part -2) -->        <center><iframe id="Video34" width="750" height="520" src="https://www.youtube.com/embed/GcBg5jrXDM8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 34-->




<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\SINGLE PHASE TRANSFORMER.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">SINGLE PHASE TRANSFORMER</h4>
  <a href="#myModal35" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 35-->

                                    <div id="myModal35" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <div class="modal-header">

                                                              <h4 class="modal-title">SINGLE PHASE TRANSFORMER</h4>
                                                    </div>
      <!-- SINGLE PHASE TRANSFORMER -->        <center><iframe id="Video35" width="750" height="520" src="https://www.youtube.com/embed/mx3J9wdbJ30" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 35-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\BASIC PRINCIPLE OF SINGLE PHASE TRANSFORMER.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">BASIC PRINCIPLE OF SINGLE PHASE TRANSFORMER</h4>
  <a href="#myModal36" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 28-->

                         <div id="myModal36" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                         <div class="modal-header">

                                                   <h4 class="modal-title">BASIC PRINCIPLE OF SINGLE PHASE TRANSFORMER</h4>
                                         </div>
<!--BASIC PRINCIPLE OF SINGLE PHASE TRANSFORMER -->        <center><iframe id="Video36" width="750" height="520" src="https://www.youtube.com/embed/xuIADO0LJfM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 36-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\CONSTRUCTION OF SINGLE PHASE TRANSFORMER.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">CONSTRUCTION OF SINGLE PHASE TRANSFORMER</h4>
<a href="#myModal37" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 29 -->

                           <div id="myModal37" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <div class="modal-header">

                                                     <h4 class="modal-title">CONSTRUCTION OF SINGLE PHASE TRANSFORMER</h4>
                                           </div>

<!-- CONSTRUCTION OF SINGLE PHASE TRANSFORMER-->        <center><iframe id="Video37" width="750" height="520" class="embed-responsive-item" src="https://www.youtube.com/embed/-j3W_RpiWoo" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 37-->




<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM II\EMF EQUATION OF TRANSFORMER.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">EMF EQUATION OF TRANSFORMER</h4>
  <a href="#myModal38" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 5-->


        <!--Starting of modal 38 -->

                                    <div id="myModal38" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <div class="modal-header">

                                                              <h4 class="modal-title">EMF EQUATION OF TRANSFORMER</h4>
                                                    </div>
      <!-- EMF EQUATION OF TRANSFORMER -->    <center><iframe id="Video38" width="750" height="520" src="https://www.youtube.com/embed/BqetOHEhAGE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 38-->

                              </div>  <!-- end of ROW 5 -->
                              <br>
                              <br>

        <!--Starting of row 5-->
        <div class="row">
        <!--Starting OF COL 1 ROW 5-->

        <div class="col">
        <div class="card">
        <img src="images\ELECTRICAL VIDEOS\MID TERM II\EFFICIENCY OF TRANSFORMER.png" class="card-img-top">
          <div class="card-body">
           <h4 class="card-title">EFFICIENCY OF TRANSFORMER</h4>
          <a href="#myModal39" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
          </div>
        </div>
        </div>
        <!-- end of COL1 ROW 5-->

        <!--Starting of modal 39-->

                                 <div id="myModal39" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                 <div class="modal-header">

                                                           <h4 class="modal-title">EFFICIENCY OF TRANSFORMER</h4>
                                                 </div>
        <!--EFFICIENCY OF TRANSFORMER -->        <center><iframe id="Video39" width="750" height="520" src="https://www.youtube.com/embed/GgckE4H5AJE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                       </center>
                                     </div>
                                     </div>
                                 </div>
                             </div>                            <!--End of modal 39-->



        <div class="col">
        <div class="card">
        <img src="images\ELECTRICAL VIDEOS\MID TERM II\LOSSES OF TRANSFORMER.png" class="card-img-top">
        <div class="card-body">
         <h4 class="card-title">LOSSES OF TRANSFORMER</h4>
        <a href="#myModal40" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
        </div>
        </div>
        </div>              <!-- end of COL2 ROW5-->

        <!--Starting of modal 40 -->

                                   <div id="myModal40" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                                   <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                   <div class="modal-header">

                                                             <h4 class="modal-title">LOSSES OF TRANSFORMER</h4>
                                                   </div>

        <!-- LOSSES OF TRANSFORMER-->        <center><iframe id="Video40" width="750" height="520" src="https://www.youtube.com/embed/HBl2IIFtctI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                         </center>
                                       </div>
                                       </div>
                                   </div>
                               </div>                            <!--End of modal 40-->


      <!-- EXtra Card -->      <div class="col">
                                 <div class="card" style="display:none;">
                                 </div>
                               </div>

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
  <img src="images\ELECTRICAL VIDEOS\MID TERM III\DC MACHINE.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">DC MACHINE</h4>
    <a href="#myModal45" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                   <!-- end of first col-->

                    <!--Starting of the modal 45 -->

                            <div id="myModal45" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

<!--DC MACHINE-->    <h4 class="modal-title">DC MACHINE</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="Video45" width="750" height="520" src="https://www.youtube.com/embed/xsWNGcZ-jds" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 45-->


<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM III\PRINCIPLE OF OPERATION OF DC MOTOR.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">PRINCIPLE OF OPERATION OF DC MOTOR</h4>
  <a href="#myModal46" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                     <!-- end of second col-->

                    <!--Starting of the modal 32 -->

                            <div id="myModal46" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                            <div class="modal-header">

                                      <h4 class="modal-title">PRINCIPLE OF OPERATION OF DC MOTOR</h4>
                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--PRINCIPLE OF OPERATION OF DC MOTOR-->         <center><iframe id="Video46" width="750" height="520" src="https://www.youtube.com/embed/0gWJ8OqkpHM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal46-->


 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM III\EMF EQUATION OF DC MACHINES.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">EMF EQUATION OF DC MACHINES</h4>
    <a href="#myModal47" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>                 <!-- end of third col 47-->


<!--Starting of the modal -->

                            <div id="myModal47" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">EMF EQUATION OF DC MACHINES</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--EMF EQUATION OF DC MACHINES -->        <center><iframe id="Video47" width="750" height="520" src="https://www.youtube.com/embed/S8VIewhwqZs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 47-->



</div>  <!-- end of row 1-->

<br>
<br>


  <!--Starting of row 2-->
 <div class="row">
   <!--Starting OF COL 1 ROW 2-->

   <div class="col">
    <div class="card">
    <img src="images\ELECTRICAL VIDEOS\MID TERM III\TORQUE SLIP CHARACTERISTICS.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">TORQUE SLIP CHARACTERISTICS</h4>
      <a href="#myModal48" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
 <!-- end of first col-->

 <!--Starting of modal 48 -->

                             <div id="myModal48" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">TORQUE SLIP CHARACTERISTICS</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--TORQUE SLIP CHARACTERISTICS -->        <center><iframe id="Video48" width="750" height="520" src="https://www.youtube.com/embed/bqCmaRsl6fk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 48-->



 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM III\CONSTRUCTION OF 3-PHASE INDUCTION MOTOR.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">CONSTRUCTION OF 3-PHASE INDUCTION MOTOR</h4>
    <a href="#myModal49" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 49 -->

                               <div id="myModal49" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">CONSTRUCTION OF 3-PHASE INDUCTION MOTOR</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- CONSTRUCTION OF 3-PHASE INDUCTION MOTOR -->        <center><iframe id="Video49" width="750" height="520" src="https://www.youtube.com/embed/Mle-ZvYi8HA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 49-->




   <div class="col">
    <div class="card">
    <img src="images\ELECTRICAL VIDEOS\MID TERM III\SINGLE PHASE INDUCTION MOTOR.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">SINGLE PHASE INDUCTION MOTOR</h4>
      <a href="#myModal50" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
       <!-- end of COL3 ROW 2-->


            <!--Starting of modal 50 -->

                                        <div id="myModal50" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                        <h4 class="modal-title">SINGLE PHASE INDUCTION MOTOR</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!-- SINGLE PHASE INDUCTION MOTOR -->   <center><iframe id="Video50" width="750" height="520" src="https://www.youtube.com/embed/F4ld_IV0Qf4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                              </center>
                                            </div>
                                            </div>
                                        </div>
                                    </div>                            <!--End of modal 50-->


</div>  <!-- end of 2st row -->
<br>
<br>

<!--Starting of row 3-->
<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM III\NMR-SPECTROSCOPY.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">NMR-SPECTROSCOPY</h4>
    <a href="#myModal51" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 51 -->

                           <div id="myModal51" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">NMR-SPECTROSCOPY</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- NMR-SPECTROSCOPY -->        <center><iframe id="Video51" width="750" height="520" src="https://www.youtube.com/embed/H6_GgJN39vY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 51-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM III\WORKING OF INDUCTION MOTOR(VISUAL).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">WORKING OF INDUCTION MOTOR(VISUAL)</h4>
  <a href="#myModal52" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 52-->

                             <div id="myModal52" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-header">

                                               <h4 class="modal-title">WORKING OF INDUCTION MOTOR(VISUAL)</h4>
                                     </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- WORKING OF INDUCTION MOTOR(VISUAL) --> <center><iframe id="Video52" width="750" height="520" src="https://www.youtube.com/embed/AQqyGNOP_3o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 52-->




 <div class="col">
  <div class="card">
  <img src="images\ELECTRICAL VIDEOS\MID TERM III\DIFFERENCE BETWEEN INDUCTION AND SYNCHRONOUS MOTOR.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">DIFFERENCE BETWEEN INDUCTION AND SYNCHRONOUS MOTOR</h4>
    <a href="#myModal53" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 53 -->

                                      <div id="myModal53" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">

                                              <div class="modal-header">

                                                        <h4 class="modal-title">DIFFERENCE BETWEEN INDUCTION AND SYNCHRONOUS MOTOR</h4>
                                              </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- DIFFERENCE BETWEEN INDUCTION AND SYNCHRONOUS MOTOR -->        <center><iframe id="Video53" width="750" height="520" src="https://www.youtube.com/embed/OWsUXBsqGL4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 53-->


</div>  <!-- end of ROW 3 -->
<br>
<br>

<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM III\SYNCHRONOUE MOTOR WORKING(VISUAL).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">SYNCHRONOUS MOTOR WORKING(VISUAL)</h4>
  <a href="#myModal54" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal54" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">SYNCHRONOUS MOTOR WORKING(VISUAL)</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- SYNCHRONOUE MOTOR WORKING(VISUAL) -->        <center><iframe id="Video54" width="750" height="520" src="https://www.youtube.com/embed/Vk2jDXxZIhs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM III\SYNCHRONOUS MOTOR(TUTORIAL).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">SYNCHRONOUS MOTOR(TUTORIAL)</h4>
<a href="#myModal55" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 55 -->

                           <div id="myModal55" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">SYNCHRONOUS MOTOR(TUTORIAL)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--SYNCHRONOUS MOTOR(TUTORIAL) -->        <center><iframe id="Video55" width="750" height="520" src="https://www.youtube.com/embed/gSsblyU07Zg"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 55-->




<div class="col">
<div class="card">
<img src="images\ELECTRICAL VIDEOS\MID TERM III\Why does single phase induction motor does not self start.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">Why does single phase induction motor does not self start?</h4>
  <a href="#myModal56" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 56 -->

                                    <div id="myModal56" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">Why does single phase induction motor does not self start?</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- Why does single phase induction motor does not self  start?-->        <center><iframe id="Video56" width="750" height="520" src="https://www.youtube.com/embed/I_U3cA3owyQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 56-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

                              </div><!-- end of container -->
                              </div> <!-- end of div for id-->


<!-- ________________________________________________END OF MODULE-III________________________ -->
</div>


<?php include("footer.php") ?>

  </body>
  </html>

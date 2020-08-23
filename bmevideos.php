<!DOCTYPE html>
<html lang="en">
<head>
  <title>BME Lectures</title>
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
    <div class="container-fluid">
<center><h1 id="heading">BASIC MECHANICAL ENGINEERING</h1></center>
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
  <img src = "images\Saved Pictures\MID TERM I\BASICS OF THERMODYNAMICS
.png" class="card-img-top"/>  <div class="card-body">
     <h4 class="card-title">BASICS OF THERMODYNAMICS</h4>
    <a href="#myModal1" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                   <!-- end of first col-->

                    <!--Starting of the modal1 -->

                            <div id="myModal1" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">BASICS OF THERMODYNAMICS</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="Video1" width="750" height="520" src="https://www.youtube.com/embed/CiXDXpw9HyM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
        <img src = "images\Saved Pictures\MID TERM I\thermodynamics system.png" class="card-img-top"/>

  <div class="card-body">
   <h4 class="card-title">THERMODYNAMICS SYSTEM</h4>
  <a href="#myModal2" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                     <!-- end of second col-->

                    <!--Starting of the modal -->

                            <div id="myModal2" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                            <div class="modal-header">

                                      <h4 class="modal-title">THERMODYNAMICS SYSTEM</h4>
                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- THERMODYNAMICS SYSTEM-->         <center><iframe id="Video2" width="750" height="520" src="https://www.youtube.com/embed/s72u-N-4FNE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 2-->


 <div class="col">
  <div class="card">
          <img src = "images\Saved Pictures\MID TERM I\Thermodynamics Surroundings.png" class="card-img-top"/>

    <div class="card-body">
     <h4 class="card-title">THERMODYNAMICS SURROUNDINGS</h4>
    <a href="#myModal3" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                 <!-- end of third col-->


<!--Starting of the modal -->

                            <div id="myModal3" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">THERMODYNAMICS SURROUNDINGS</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- THERMODYNAMICS SURROUNDINGS -->  <center><iframe id="Video3" width="750" height="520" src="https://www.youtube.com/embed/wcRthycM6kg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    <img src = "images\Saved Pictures\MID TERM I\vai.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">MICROSCOPIC AND MACROSCOPIC POINT OF VIEW</h4>
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

                                             <h4 class="modal-title">MICROSCOPIC AND MACROSCOPIC POINT OF VIEW</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MICROSCOPIC AND MACROSCOPIC POINT OF VIEW-->        <center><iframe id="Video4" width="750" height="520" src="https://www.youtube.com/embed/ejjdqXXAu_8"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 4-->



 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM I\PROPERTY OF SYSTEM
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">PROPERTY OF SYSTEM</h4>
    <a href="#myModal5" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 5 -->

                               <div id="myModal5" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">PROPERTY OF SYSTEM</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- PROPERTY OF SYSTEM -->        <center><iframe id="Video5" width="750" height="520" src="https://www.youtube.com/embed/EEWU6TdyOCE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 5-->




   <div class="col">
    <div class="card">
      <img src = "images\Saved Pictures\MID TERM I\THERMODYNAMICS EQUILIBRIUM
.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">THERMODYNAMICS EQUILIBRIUM</h4>
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

                                                        <h4 class="modal-title">THERMODYNAMICS EQUILIBRIUM</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!--THERMODYNAMICS EQUILIBRIUM -->        <center><iframe id="Video6" width="750" height="520" src="https://www.youtube.com/embed/cEO8efOojPk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
  <img src = "images\Saved Pictures\MID TERM I\QUASI-STATIC PROCESS
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">QUASI-STATIC PROCESS</h4>
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

                                           <h4 class="modal-title">QUASI-STATIC PROCESS</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- QUASI-STATIC PROCESS -->        <center><iframe id="Video7" width="750" height="520" src="https://www.youtube.com/embed/W-SGenm9PZc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\TYPES OF THERMODYNAMICS PROCESS
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">TYPES OF THERMODYNAMICS PROCESS</h4>
  <a href="#myModal8" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 8 -->

                             <div id="myModal8" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">TYPES OF THERMODYNAMICS PROCESS</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- TYPES OF THERMODYNAMICS PROCESS-->        <center><iframe id="Video8" width="750" height="520" src="https://www.youtube.com/embed/LRDvrXTpwfo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 8-->




 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM I\PATH AND POINT FUNCTION
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">PATH AND POINT FUNCTION</h4>
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

                                                      <h4 class="modal-title">PATH AND POINT FUNCTION</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- PATH AND POINT FUNCTION -->        <center><iframe id="Video9" width="750" height="520" src="https://www.youtube.com/embed/9CjPDXujjBY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
 <img src = "images\Saved Pictures\MID TERM I\ZEROTH LAW OF THERMODYNAMICS
.png" class="card-img-top"/>
    <div class="card-body">
   <h4 class="card-title">ZEROTH LAW OF THERMODYNAMICS</h4>
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

                                         <h4 class="modal-title">ZEROTH LAW OF THERMODYNAMICS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--ZEROTH LAW OF THERMODYNAMICS-->        <center><iframe id="Video10" width="750" height="520" src="https://www.youtube.com/embed/u7odAbrUYHw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 10-->



<div class="col">
<div class="card">
 <img src = "images\Saved Pictures\MID TERM I\LIQUID IN GLASS THERMOMETER
.png" class="card-img-top"/>
<div class="card-body">
 <h4 class="card-title">LIQUID IN GLASS THERMOMETER</h4>
<a href="#myModal11" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 8 -->

                           <div id="myModal11" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">LIQUID IN GLASS THERMOMETER</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <center><iframe id="Video11" width="750" height="520" src="https://www.youtube.com/embed/6SbmWQORc0Q"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 11-->




<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\CONSTANT VOLUME GAS THERMOMETER
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">CONSTANT VOLUME GAS THERMOMETER</h4>
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

                                                    <h4 class="modal-title">CONNTANT VOLUME GAS THERMOMETER</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- RMS AND AVG VALUE OF AC SIGNALS -->        <center><iframe id="Video12" width="750" height="520" src="https://www.youtube.com/embed/UMkGwzrsYs0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src = "images\Saved Pictures\MID TERM I\THERMO COUPLE
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">THERMO COUPLE</h4>
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

                                         <h4 class="modal-title">THERMO COUPLE</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                          <center><iframe id="Video13" width="750" height="520" src="https://www.youtube.com/embed/7Sjn_QGduUs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 13-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\WORK AND HEAT TRANSFER
.png" class="card-img-top"/>
<div class="card-body">
 <h4 class="card-title">WORK AND HEAT TRANSFER</h4>
<a href="#myModal14" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                           <div id="myModal14" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">WORK AND HEAT TRANSFER</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <center><iframe id="Video14" width="750" height="520" src="https://www.youtube.com/embed/1qI7Ys1Of6o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 14-->




<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\DISPLACEMENT WORK
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">DISPLACEMENT WORK</h4>
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

                                                    <h4 class="modal-title">DISPLACEMENT WORK</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <center><iframe id="Video15" width="750" height="520" src="https://www.youtube.com/embed/l0USlOHJJDE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src = "images\Saved Pictures\MID TERM I\FIRST LAW OF THERMODYNAMICS
.png" class="card-img-top"/>
    <div class="card-body">
   <h4 class="card-title">FIRST LAW OF THERMODYNAMICS</h4>
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

                                         <h4 class="modal-title">FIRST LAW OF THERMODYNAMICS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                         <center><iframe id="Video16" width="750" height="520" src="https://www.youtube.com/embed/C6VVk7Imosw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 13-->



                     <div class="col">
                     <div class="card">
                     <img src = "images\Saved Pictures\MID TERM I\FIRST LAW OF THERMODYNAMICS ISOBARIC PROCESS
.png" class="card-img-top"/>
                         <div class="card-body">
                        <h4 class="card-title">FIRST LAW OF THERMODYNAMICS: ISOBARIC PROCESS</h4>
                       <a href="#myModal17" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                       </div>
                     </div>
                     </div>                     <!-- end of second col-->

                                         <!--Starting of the modal -->

                                                 <div id="myModal17" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                 <div class="modal-header">

                                                           <h4 class="modal-title">FIRST LAW OF THERMODYNAMICS: ISOBARIC PROCESS</h4>
                                                 </div>
                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                 <center><iframe id="Video17" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/MKm04FOwz38" allowfullscreen></iframe>
                                                       </center>
                                                     </div>
                                                     </div>
                                                 </div>
                                             </div>                            <!--End of modal 1-->


                      <div class="col">
                       <div class="card">
                       <img src = "images\Saved Pictures\MID TERM I\FIRST LAW OF THERMODYNAMICS ISOTHERMAL PROCESS
.png" class="card-img-top"/>
                         <div class="card-body">
                          <h4 class="card-title">FIRST LAW OF THERMODYNAMICS: ISOTHERMAL PROCESS</h4>
                         <a href="#myModal18" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                         </div>
                       </div>
                       </div>                 <!-- end of third col-->


                     <!--Starting of the modal -->

                                                 <div id="myModal18" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                       <div class="modal-header">

                                                                 <h4 class="modal-title">FIRST LAW OF THERMODYNAMICS: ISOTHERMAL PROCESS</h4>
                                                       </div>
                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                 <center><iframe id="Video18" width="750" height="580" src="https://www.youtube.com/embed/Nw_VJMTUU0o" class="embed-responsive-item"  allowfullscreen></iframe>
                                                       </center>
                                                     </div>
                                                     </div>
                                                 </div>
                                             </div>                            <!--End of modal 1-->





</div>  <!-- end of ROW 5 -->
<br>
<br>
<!--Starting of row 2-->
<div class="row">
 <!--Starting OF COL 1 ROW 2-->

 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM I\FIRST LAW OF THERMODYNAMICS ADIABATIC PROCESS
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">FIRST LAW OF THERMODYNAMICS: ADIABATIC PROCESS</h4>
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

                                           <h4 class="modal-title">FIRST LAW OF THERMODYNAMICS: ADIABATIC PROCESS</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <center><iframe id="Video19" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/8p6WwZ1OpFQ"src="https://www.youtube.com/embed/8p6WwZ1OpFQ" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 4-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\FLOW PROCESS
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">FLOW PROCESS</h4>
  <a href="#myModal20" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 5 -->

                             <div id="myModal20" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">FLOW PROCESS </h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                             <center><iframe id="Video20" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/kCG0WaW01-k" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 1-->




 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM I\ENERGY BALANCE IN STEADY FLOW PROCESS
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">ENERGY BALANCE IN STEADY FLOW PROCESS</h4>
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

                                                      <h4 class="modal-title">ENERGY BALANCE IN STEADY FLOW PROCESS</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- FRESNELS BIPRISM(EXP2) -->        <center><iframe id="Video21" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/EaHpii3VZBg" allowfullscreen></iframe>
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
  <img src = "images\Saved Pictures\MID TERM I\SFEE APPLICATIONS ON NOZZLES AND DIFFUSERS
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">SFEE APPLICATIONS ON NOZZLES AND DIFFUSERS</h4>
    <a href="#myModal22" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                           <div id="myModal22" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">SFEE APPLICATIONS ON NOZZLES AND DIFFUSERS</h4>
                               </div>

                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <center><iframe id="Video22" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/tgi1l2tYxv4" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM I\SFEE APPLICATIONS ON STEAM AND GAS TURBINES
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">SFEE APPLICATIONS ON STEAM AND GAS TURBINES</h4>
  <a href="#myModal23" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 8 -->

                             <div id="myModal23" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">SFEE APPLICATIONS ON STEAM AND GAS TURBINES</h4>
                                 </div>

                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                             <center><iframe id="Video23" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/3RK_QFHC00Q" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 8-->




 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM I\SFEE APPLICATIONS ON COMPRESSOR
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">SFEE APPLICATIONS ON COMPRESSOR</h4>
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

                                    <h4 class="modal-title">SFEE APPLICATIONS ON COMPRESSOR</h4>
                          </div>

                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="Video24" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/Ny_yuf5QsZY" allowfullscreen></iframe>
                            </center>
                          </div>
                          </div>
                      </div>
                  </div>                            <!--End of modal 24-->


</div>  <!-- end of ROW 3 -->
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
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\SECOND LAW OF THERMODYNAMICS
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">SECOND LAW OF THERMODYNAMICS</h4>
  <a href="#myModal25" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 25 -->

                         <div id="myModal25" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">SECOND LAW OF THERMODYNAMICS </h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <center><iframe id="Video25" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/D9KvIT47csY" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 25-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\HEAT ENGINE
.png" class="card-img-top"/>
<div class="card-body">
 <h4 class="card-title">HEAT ENGINE</h4>
<a href="#myModal26" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 26 -->

                           <div id="myModal26" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">HEAT ENGINE </h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                             <center><iframe id="Video26" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/tyr6vNII3Bk" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 26-->




<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\HEAT PUMP AND REFRIGERATOR
.png" class="card-img-top"/>
    <div class="card-body">
   <h4 class="card-title">HEAT PUMP AND REFRIGERATOR</h4>
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

                                                    <h4 class="modal-title">HEAT PUMP AND REFRIGERATOR</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                      <center><iframe id="Video27" width="750" height="580" class="embed-responsive-item" src="https://www.youtube.com/embed/uEErWdtkRUM" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 27-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<br>
<br>


  <!--Starting of row 2-->
 <div class="row">
   <!--Starting OF COL 1 ROW 2-->

   <div class="col">
    <div class="card">
    <img src = "images\Saved Pictures\MID TERM II\CARNOT CYCLE
.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">CARNOT CYCLE</h4>
      <a href="#myModal28" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
 <!-- end of first col-->

 <!--Starting of modal 4 -->

                             <div id="myModal28" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">CARNOT CYCLE</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--  -->        <center><iframe id="Video28" width="750" height="520" src="https://www.youtube.com/embed/77EIce2Nu8Y"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 27-->



 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM II\EFFICIENCY OF CARNOT ENGINE
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">EFFICIENCY OF CARNOT ENGINE</h4>
    <a href="#myModal29" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 28-->

                               <div id="myModal29" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">EFFICIENCY OF CARNOT ENGINE</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                 <center><iframe id="Video29" width="750" height="520" src="https://www.youtube.com/embed/zD2XDeBu8sI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 28-->




   <div class="col">
    <div class="card">
    <img src = "images\Saved Pictures\MID TERM II\KELVIN PLANK'S STATEMENT
.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">KELVIN PLANK'S STATEMENT</h4>
      <a href="#myModal30" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
       <!-- end of COL3 ROW 2-->


            <!--Starting of modal 30 -->

                                        <div id="myModal30" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                        <h4 class="modal-title">KELVIN PLANK'S STATEMENT</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!-- R                                           -->        <center><iframe id="Video30" width="750" height="520" src="https://www.youtube.com/embed/kNNwrp7tHPU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                              </center>
                                            </div>
                                            </div>
                                        </div>
                                    </div>                            <!--End of modal 30-->


</div>  <!-- end of 2st row -->
<br>
<br>


<!--Starting of row 3-->
<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM II\INTRODUCTION TO ENTROPY
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">INTRODUCTION TO ENTROPY</h4>
    <a href="#myModal31" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 7 -->

                           <div id="myModal31" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">INTRODUCTION TO ENTROPY</h4>
                               </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--                                         -->        <center><iframe id="Video31" width="750" height="520" src="https://www.youtube.com/embed/KOEJ4UvlnAc"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 30-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\ENTROPY AS A SYSTEM PROPERTY
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">ENTROPY AS A SYSTEM PROPERTY</h4>
  <a href="#myModal32" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 8 -->

                             <div id="myModal32" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                             <div class="modal-header">

                                                       <h4 class="modal-title">ENTROPY AS A SYSTEM PROPERTY</h4>
                                             </div>
                                             <center><iframe id="Video32" width="750" height="520" src="https://www.youtube.com/embed/vRuSgtNb-lE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal31-->




 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM II\CHANGE OF ENTROPY IN REVERSIBLE PROCESS
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">CHANGE OF ENTROPY IN REVERSIBLE PROCESS</h4>
    <a href="#myModal33" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 32 -->

                                      <div id="myModal33" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                      <div class="modal-header">

                                                                <h4 class="modal-title">CHANGE OF ENTROPY IN REVERSIBLE PROCESS</h4>
                                                      </div>
        <!-- -->        <center><iframe id="Video33" width="750" height="520" src="https://www.youtube.com/embed/aMfEfOma0z4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src = "images\Saved Pictures\MID TERM II\CLAUSIUS INEQUALITY
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">CLAUSIUS INEQUALITY</h4>
  <a href="#myModal34" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 33 -->

                         <div id="myModal34" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                         <div class="modal-header">

                                                   <h4 class="modal-title">CLAUSIUS INEQUALITY</h4>
                                         </div>
<!-- -->        <center><iframe id="Video34" width="750" height="520" src="https://www.youtube.com/embed/0Cn--CqXals" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 33-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\CLAUSIUS THEOREM
.png" class="card-img-top"/>
<div class="card-body">
 <h4 class="card-title">CLAUSIUS THEOREM</h4>
<a href="#myModal35" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 34 -->

                           <div id="myModal35" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                           <div class="modal-header">

                                                     <h4 class="modal-title">CLAUSIUS THEOREM</h4>
                                           </div>
<!-- Magnetic circuits(Part -2) -->        <center><iframe id="Video35" width="750" height="520" src="https://www.youtube.com/embed/tJAH_cgXc3Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 34-->




<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\ENTROPY CHANGE IN IRREVERSIBLE PROCESS
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">ENTROPY CHANGE IN IRREVERSIBLE PROCESS</h4>
  <a href="#myModal36" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 35-->

                                    <div id="myModal36" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <div class="modal-header">

                                                              <h4 class="modal-title">ENTROPY CHANGE IN IRREVERSIBLE PROCESS</h4>
                                                    </div>
      <!-- -->        <center><iframe id="Video36" width="750" height="520" src="https://www.youtube.com/embed/c2zfhbYj6YM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src = "images\Saved Pictures\MID TERM II\4 STROKE PETROL ENGINE
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">4 STROKE PETROL ENGINE</h4>
  <a href="#myModal37" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 28-->

                         <div id="myModal37" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                         <div class="modal-header">

                                                   <h4 class="modal-title">4 STROKE PETROL ENGINE</h4>
                                         </div>
<!-- -->        <center><iframe id="Video37" width="750" height="520" src="https://www.youtube.com/embed/ghk8F1aJgHY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 36-->



                     <div class="col">
                     <div class="card">
                     <img src = "images\Saved Pictures\MID TERM II\4 STROKE DIESEL ENGINE
.png" class="card-img-top"/>
                       <div class="card-body">
                        <h4 class="card-title">4 STROKE DIESEL ENGINE</h4>
                       <a href="#myModal38" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                       </div>
                     </div>
                     </div>
                     <!-- end of COL1 ROW 5-->

                     <!--Starting of modal 28-->

                                              <div id="myModal38" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                  <div class="modal-content">
                                                              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                              <div class="modal-header">

                                                                        <h4 class="modal-title">4 STROKE DIESEL ENGINE</h4>
                                                              </div>
                     <!-- -->        <center><iframe id="Video38" width="750" height="520" src="https://www.youtube.com/embed/auNsAzAh9qU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    </center>
                                                  </div>
                                                  </div>
                                              </div>
                                          </div>                            <!--End of modal 38-->




<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM II\CASTING AND GATING SYSTEM
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">CASTING AND GATING SYSTEM</h4>
  <a href="#myModal39" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 5-->


        <!--Starting of modal 38 -->

                                    <div id="myModal39" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <div class="modal-header">

                                                              <h4 class="modal-title">CASTING AND GATING SYSTEM</h4>
                                                    </div>
      <!--  -->    <center><iframe id="Video39" width="750" height="520" src="https://www.youtube.com/embed/BkYfrs6KxpU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 39-->

                              </div>  <!-- end of ROW 5 -->
                              <br>
                              <br>

        <!--Starting of row 5-->
        <div class="row">
        <!--Starting OF COL 1 ROW 5-->

        <div class="col">
        <div class="card">
        <img src = "images\Saved Pictures\MID TERM II\PATTERN ALLOWANCES IN CASTING PROCESS
.png" class="card-img-top"/>
          <div class="card-body">
           <h4 class="card-title">PATTERN ALLOWANCES IN CASTING PROCESS</h4>
          <a href="#myModal40" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
          </div>
        </div>
        </div>
        <!-- end of COL1 ROW 5-->

        <!--Starting of modal 39-->

                                 <div id="myModal40" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                 <div class="modal-header">

                                                           <h4 class="modal-title">PATTERN ALLOWANCES IN CASTING PROCESS</h4>
                                                 </div>
        <!-- -->        <center><iframe id="Video40" width="750" height="520" src="https://www.youtube.com/embed/Yf-71Yl_FPI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                       </center>
                                     </div>
                                     </div>
                                 </div>
                             </div>                            <!--End of modal409-->



        <div class="col">
        <div class="card">
        <img src = "images\Saved Pictures\MID TERM II\FORGING
.png" class="card-img-top"/>
        <div class="card-body">
         <h4 class="card-title">FORGING</h4>
        <a href="#myModal41" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
        </div>
        </div>
        </div>              <!-- end of COL2 ROW5-->

        <!--Starting of modal 40 -->

                                   <div id="myModal41" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                                   <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                   <div class="modal-header">

                                                             <h4 class="modal-title">FORGING</h4>
                                                   </div>

        <!-- -->        <center><iframe id="Video41" width="750" height="520" src="https://www.youtube.com/embed/DlCP4OD1R4A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                         </center>
                                       </div>
                                       </div>
                                   </div>
                               </div>                            <!--End of modal 40-->




             <!--Starting of the colums-->
             <div class="col">
              <div class="card">
              <img src = "images\Saved Pictures\MID TERM II\ROLLING
.png" class="card-img-top"/>
                <div class="card-body">
                 <h4 class="card-title">ROLLING</h4>
                <a href="#myModal42" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                </div>
              </div>
              </div>                   <!-- end of first col-->

                                <!--Starting of the modal 42 -->

                                        <div id="myModal42" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                  <h4 class="modal-title">ROLLING</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                  <center><iframe id="Video42" width="750" height="520" src="https://www.youtube.com/embed/ZD8gW_OzkCQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                              </center>
                                            </div>
                                            </div>
                                        </div>
                                    </div>                            <!--End of modal 42-->


                                      <div class="row">
                                        <div class="card" style="display:none;">
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="card" style="display:none;">
                                        </div>
                                      </div>
            </div>  <!-- end of row 1-->

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
 <img src = "images\Saved Pictures\MID TERM III\CONSTRUCTION OF LATHE MACHINE
.png" class="card-img-top"/>
   <div class="card-body">
    <h4 class="card-title">CONSTRUCTION OF LATHE MACHINE</h4>
   <a href="#myModal43" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
   </div>
 </div>
 </div>                     <!-- end of second col-->

                     <!--Starting of the modal 32 -->

                             <div id="myModal43" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">CONSTRUCTION OF LATHE MACHINE</h4>
                             </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- -->         <center><iframe id="Video43" width="750" height="520" src="https://www.youtube.com/embed/p_LgK0Ffg20" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal43-->


                        <div class="col">
                        <div class="card">
                       <img src = "images\Saved Pictures\MID TERM III\LATHE MACHINE OPERATIONS
.png" class="card-img-top"/>
                          <div class="card-body">
                           <h4 class="card-title">LATHE MACHINE OPERATIONS</h4>
                          <a href="#myModal44" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                          </div>
                        </div>
                        </div>                     <!-- end of second col-->

                                            <!--Starting of the modal 32 -->

                                                    <div id="myModal44" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                    <div class="modal-header">

                                                              <h4 class="modal-title">LATHE MACHINE OPERATIONS </h4>
                                                    </div>
                                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <!-- -->         <center><iframe id="Video44" width="750" height="520" src="https://www.youtube.com/embed/_pT-ToIS6KY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                          </center>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>                            <!--End of modal44-->


                         <div class="col">
                          <div class="card">
                          <img src = "images\Saved Pictures\MID TERM III\CONSTRUCTION OF DRILLING MACHINE
.png" class="card-img-top"/>
                            <div class="card-body">
                             <h4 class="card-title">CONSTRUCTION OF DRILLING MACHINE</h4>
                            <a href="#myModal45" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                            </div>
                          </div>
                        </div>                 <!-- end of third col 45-->


                        <!--Starting of the modal -->

                                                    <div id="myModal45" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">

                                                                    <h4 class="modal-title">CONSTRUCTION OF DRILLING MACHINE</h4>
                                                          </div>
                                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <!-- -->        <center><iframe id="Video45" width="750" height="520" src="https://www.youtube.com/embed/DvfmRV84Jus" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                          </center>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>                            <!--End of modal 45-->



</div>  <!-- end of row 1-->

<br>
<br>


  <!--Starting of row 2-->
 <div class="row">
   <!--Starting OF COL 1 ROW 2-->

   <div class="col">
    <div class="card">
    <img src = "images\Saved Pictures\MID TERM III\48.WORKING OF DRILLING MACHINE (DEMONSTRATION)
.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">WORKING OF DRILLING MACHINE (DEMONSTRATION)</h4>
      <a href="#myModal46" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
 <!-- end of first col-->

 <!--Starting of modal 48 -->

                             <div id="myModal46" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">WORKING OF DRILLING MACHINE (DEMONSTRATION)</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!---->        <center><iframe id="Video46" width="750" height="520" src="https://www.youtube.com/embed/zf9rgvzjkpY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 46-->



 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM III\GRINDING OPERATION
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">GRINDING OPERATION</h4>
    <a href="#myModal47" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 49 -->

                               <div id="myModal47" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">GRINDING OPERATION</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!--  -->        <center><iframe id="Video47" width="750" height="520" src="https://www.youtube.com/embed/4esH9MEbDLk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 47-->




   <div class="col">
    <div class="card">
    <img src = "images\Saved Pictures\MID TERM III\WELDING OPERATION
.png" class="card-img-top"/>
      <div class="card-body">
       <h4 class="card-title">WELDING OPERATION</h4>
      <a href="#myModal48" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
       <!-- end of COL3 ROW 2-->


            <!--Starting of modal 50 -->

                                        <div id="myModal48" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                        <h4 class="modal-title">WELDING OPERATION</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!-- -->   <center><iframe id="Video48" width="750" height="520" src="https://www.youtube.com/embed/4iPF0pMjKjA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                              </center>
                                            </div>
                               /             </div>
                                        </div>
                                    </div>                            <!--End of modal 48-->


</div>  <!-- end of 2st row -->
<br>
<br>

<!--Starting of row 3-->
<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM III\CLASSIFICATION,DEFECTS AND HEAT AFFECTED ZONE IN WELDING
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">CLASSIFICATION,DEFECTS AND HEAT AFFECTED ZONE IN WELDING</h4>
    <a href="#myModal49" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 51 -->

                           <div id="myModal49" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">CLASSIFICATION,DEFECTS AND HEAT AFFECTED ZONE IN WELDING</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- NMR-SPECTROSCOPY -->        <center><iframe id="Video49" width="750" height="520" src="https://www.youtube.com/embed/jP6eGTBc-Kc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 51-->



<div class="col">
<div class="card">
<img src = "images\Saved Pictures\MID TERM III\SHAPER MACHINE
.png" class="card-img-top"/>
  <div class="card-body">
   <h4 class="card-title">SHAPER MACHINE</h4>
  <a href="#myModal50" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 52-->

                             <div id="myModal50" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-header">

                                               <h4 class="modal-title">SHAPER MACHINE</h4>
                                     </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- --> <center><iframe id="Video50" width="750" height="520" src="https://www.youtube.com/embed/8EmuFlW5t1Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 52-->




 <div class="col">
  <div class="card">
  <img src = "images\Saved Pictures\MID TERM III\DIFFERENCE BETWEEN SOLDERING AND BRAZING
.png" class="card-img-top"/>
    <div class="card-body">
     <h4 class="card-title">DIFFERENCE BETWEEN SOLDERING AND BRAZING</h4>
    <a href="#myModal51" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 53 -->

                                      <div id="myModal51" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">

                                              <div class="modal-header">

                                                        <h4 class="modal-title">DIFFERENCE BETWEEN SOLDERING AND BRAZING</h4>
                                              </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- -->        <center><iframe id="Video51" width="750" height="520" src="https://www.youtube.com/embed/g6uGtIe2OQA"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </center>
                                          </div>
                                          </div>
                                      </div>
                                  </div>                            <!--End of modal 51-->


</div>  <!-- end of ROW 3 -->
<br>
<br>


                              </div><!-- end of container -->
                              </div> <!-- end of div for id-->


<!-- ________________________________________________END OF MODULE-III________________________ -->
</div>
<?php include("footer.php") ?>
  </body>
  </html>

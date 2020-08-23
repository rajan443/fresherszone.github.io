<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electronics Lectures</title>
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


        $("#mid-I").attr('class', changecolor);
        $("#mid-II").attr('class', originalcolor);
        $("#mid-III").attr('class', originalcolor);



});
</script>

</head>
<body>
  <?php include("header.php") ?>
  <div class="container-fluid">
<center><h1 id="heading">ELECTRONICS AND COMMUNICATION ENGINEERING<br> VIDEO LECTURES:</h1></center>
<hr id="hrc">
<br>

<!--button for selecting the terms -->
<div id="button-group">
<center>
<p>
<button class="btn btn-danger btn-lg mb-1" id="mid-I">MID-TERM I&nbsp&nbsp</button>
<a href="ecevideos_mid2.php"><button class="btn btn-primary btn-lg mb-1" id="mid-II">MID-TERM II&nbsp</button></a>
<a href="ecevideos_mid3.php"><button class="btn btn-primary btn-lg mb-1" id="mid-III">MID-TERM III</button></a>
</p>
</center>
</div>
<br>

<!-- ........................................MODAL START FROM HERE .................................................................-->



<h3 style="margin-left:600px"> MODULE I </h3>
<hr width="1100px" height="2px" style="background-color:tomato">
<div class="container">
<br>
<!-- Starting of the first row-->

<div class="row">
<!--Starting of the colums-->
<div class="col">
<div class="card">
<img src="images\ece\Capture.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">SEMICONDUCTOR MATERIALS</h4>
  <a href="#myModal1" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                   <!-- end of first col-->

                  <!--Starting of the modal1 -->

                          <div id="myModal1" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">SEMICONDUCTOR MATERIALS</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <center><iframe id="Video1" width="750" height="520" src="https://www.youtube.com/embed/7jaa1rlW7Ak" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
<img src="images\ece\2.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTRENSIC AND EXTRENSIC SEMICONDUCTOR</h4>
<a href="#myModal2" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>                     <!-- end of second col-->

                  <!--Starting of the modal -->

                          <div id="myModal2" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                          <div class="modal-header">

                                    <h4 class="modal-title">INTRENSIC AND EXTRENSIC SEMICONDUCTOR</h4>
                          </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- INTRENSIC AND EXTRENSIC SEMICONDUCTOR -->         <center><iframe id="Video2" width="750" height="520" src="https://www.youtube.com/embed/z3MlkNUuq9w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 2-->


<div class="col">
<div class="card">
<img src="images\ece\mass action law.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">MASS ACTION LAW</h4>
  <a href="#myModal3" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                 <!-- end of third col-->


<!--Starting of the modal -->

                          <div id="myModal3" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">MASS ACTION LAW</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MASS ACTION LAW -->  <center><iframe id="Video3" width="750" height="520" src="https://www.youtube.com/embed/yu8xvHHTij0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
  <img src="images\ece\drift and diffusion currents.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">DRIFT AND DIFFUSION CURRENT</h4>
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

                                           <h4 class="modal-title">DRIFT AND DIFFUSION CURRENT</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- DRIFT AND DIFFUSION CURRENT-->        <center><iframe id="Video4" width="750" height="520" src="https://www.youtube.com/embed/jhZiEon3nx4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 4-->



<div class="col">
<div class="card">
<img src="images\ece\pn junction diode.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">PN JUNCTION DIODE</h4>
  <a href="#myModal5" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 5 -->

                             <div id="myModal5" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">PN JUNCTION DIODED</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- PN JUNCTION DIODED -->        <center><iframe id="Video5" width="750" height="520" src="https://www.youtube.com/embed/cAu_Qv6rsM8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 5-->




 <div class="col">
  <div class="card">
  <img src="images\ece\barrier potential.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">BARRIER POTENTIAL</h4>
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

                                                      <h4 class="modal-title">BARRIER POTENTIAL</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!--BARRIER POTENTIAL -->        <center><iframe id=Video6 width="560" height="315" src="https://www.youtube.com/embed/itL2MQqZtqA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\width of depletion region.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">WIDTH OF DEPLETION LAYER</h4>
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

                                         <h4 class="modal-title">WIDTH OF DEPLETION LAYER</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- WIDTH OF DEPLETION LAYER -->        <center><iframe id="Video7" width="750" height="520" src="https://www.youtube.com/embed/d3VIDO0S7xk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src="images\ece\pn junction(forward bias).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">PN JUNCTION DIODE(FORWARD BIASED CONDITION)</h4>
<a href="#myModal8" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW3-->

<!--Starting of modal 8 -->

                           <div id="myModal8" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">PN JUNCTION DIODE(FORWARD BIASED CONDITION)</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- PN JUNCTION DIODE(FORWARD BIASED CONDITION)-->        <center><iframe id="Video8" width="750" height="520" src="https://www.youtube.com/embed/yvH4tgqqu2U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 8-->




<div class="col">
<div class="card">
<img src="images\ece\pn junction(reverse bias).png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">PN JUNCTION DIODE(REVERSED BIASED CONDITION)</h4>
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

                                                    <h4 class="modal-title">PN JUNCTION DIODE(REVERSED BIASED CONDITION)</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- PN JUNCTION DIODE(REVERSED BIASED CONDITION) -->        <center><iframe id="Video9" width="750" height="520" src="https://www.youtube.com/embed/QJnzpNgIu08" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\vi characteristics of pn.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">VI CHARACTERSTICS OF PN JUNCTION DIODE</h4>
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

                                       <h4 class="modal-title">VI CHARACTERSTICS OF PN JUNCTION DIODE</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- VI CHARACTERSTICS OF PN JUNCTION DIODE-->        <center><iframe id="Video10" width="750" height="520" src="https://www.youtube.com/embed/_vKeaPHXF9U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 10-->



<div class="col">
<div class="card">
<img src="images\ece\effects of temperature on vi.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">EFFECT OF TEMP ON V-I CHARACTERSTICS</h4>
<a href="#myModal11" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 8 -->

                         <div id="myModal11" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">EFFECT OF TEMP ON V-I CHARACTERSTICS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- EFFECT OF TEMP ON V-I CHARACTERSTICS -->        <center><iframe id="Video11" width="750" height="520" src="https://www.youtube.com/embed/ApFMXUzc7OM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 11-->




<div class="col">
<div class="card">
<img src="images\ece\ideal vs practical.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">IDEAL VS PRACTICAL DIODE</h4>
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

                                                  <h4 class="modal-title">IDEAL VS PRACTICAL DIODE</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- IDEAL VS PRACTICAL DIODE -->        <center><iframe id="Video12" width="750" height="520" src="https://www.youtube.com/embed/WX0xQWRTPjs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\introduction to zener diode.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">INTRODUCTION TO ZENER DIODE</h4>
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

                                       <h4 class="modal-title">INTRODUCTION TO ZENER DIODE</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--INTRODUCTION TO ZENER DIODE -->        <center><iframe id="Video13" width="750" height="520" src="https://www.youtube.com/embed/JdL3DnnFHXw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->



<div class="col">
<div class="card">
<img src="images\ece\zener diode as voltage regulator.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-1)</h4>
<a href="#myModal14" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                         <div id="myModal14" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-1)</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- ZENER DIODE AS A VOLTAGE REGULATOR(PART-1)-->        <center><iframe id="Video14" width="750" height="520" src="https://www.youtube.com/embed/6xGCOrPBL4s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 14-->




<div class="col">
<div class="card">
<img src="images\ece\14.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-2)</h4>
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

                                                  <h4 class="modal-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-2)</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- ZENER DIODE AS A VOLTAGE REGULATOR(PART-2) -->    <center><iframe id="Video15" width="750" height="520" src="https://www.youtube.com/embed/LtWMuoQKMIc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\15.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-3)</h4>
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

                                       <h4 class="modal-title">ZENER DIODE AS A VOLTAGE REGULATOR(PART-3)</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--ZENER DIODE AS A VOLTAGE REGULATOR(PART-3) -->        <center><iframe id="Video16" width="750" height="520" src="https://www.youtube.com/embed/HBaddgGeIrM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\16.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">P-N JUNCTION DIODE(REVERSE BREAKDOWN)</h4>
                     <a href="#myModal17" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal17" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">P-N JUNCTION DIODE(REVERSE BREAKDOWN)</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--P-N JUNCTION DIODE(REVERSE BREAKDOWN) -->        <center><iframe id="Video17" width="750" height="520" src="https://www.youtube.com/embed/TLgALezzVFI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




                                        <!--Starting OF COL 1 ROW 5-->

                                        <div class="col">
                                        <div class="card">
                                        <img src="images\ece\17.png" class="card-img-top">
                                          <div class="card-body">
                                           <h4 class="card-title">DC OR STATIC RESISTANCE OF DIODE</h4>
                                          <a href="#myModal18" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                                          </div>
                                        </div>
                                        </div>
                                        <!-- end of COL1 ROW 5-->

                                        <!--Starting of modal 13 -->

                                                                 <div id="myModal18" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                   <div class="modal-dialog modal-lg">
                                                                     <div class="modal-content">
                                                                       <div class="modal-header">

                                                                                 <h4 class="modal-title">DC OR STATIC RESISTANCE OF DIODE</h4>
                                                                       </div>
                                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <!--DC OR STATIC RESISTANCE OF DIODE -->        <center><iframe id="Video18" width="750" height="520" src="https://www.youtube.com/embed/-oiAFHI6SWg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                       </center>
                                                                     </div>
                                                                     </div>
                                                                 </div>
                                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\18.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">AC OR DYNAMIC RESISTANCE OF DIODE</h4>
<a href="#myModal19" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal19" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">AC OR DYNAMIC RESISTANCE OF DIODE</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--AC OR DYNAMIC RESISTANCE OF DIODE -->        <center><iframe id="Video19" width="750" height="520" src="https://www.youtube.com/embed/6QlFxif-JfQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\19.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">PHOTODIODE</h4>
                     <a href="#myModal20" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal20" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">PHOTODIODE</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--PHOTODIODE -->        <center><iframe id="Video20" width="750" height="520" src="https://www.youtube.com/embed/lg1AKT8hp3E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




                                        <!--Starting OF COL 1 ROW 5-->

                                        <div class="col">
                                        <div class="card">
                                        <img src="images\ece\led.png" class="card-img-top">
                                          <div class="card-body">
                                           <h4 class="card-title">LED</h4>
                                          <a href="#myModal21" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                                          </div>
                                        </div>
                                        </div>
                                        <!-- end of COL1 ROW 5-->

                                        <!--Starting of modal 13 -->

                                                                 <div id="myModal21" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                   <div class="modal-dialog modal-lg">
                                                                     <div class="modal-content">
                                                                       <div class="modal-header">

                                                                                 <h4 class="modal-title">LED</h4>
                                                                       </div>
                                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <!--LED -->        <center><iframe id="Video21" width="750" height="520" src="https://www.youtube.com/embed/eWu6yWhMYeE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                       </center>
                                                                     </div>
                                                                     </div>
                                                                 </div>
                                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\20.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">RECTIFIER-HALF AND FULL WAVE RECTIFIER</h4>
<a href="#myModal22" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal22" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">RECTIFIER-HALF AND FULL WAVE RECTIFIER</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--RECTIFIER-HALF AND FULL WAVE RECTIFIER -->        <center><iframe id="Video22" width="750" height="520" src="https://www.youtube.com/embed/yaUMBKjkOjg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\21.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">FULL WAVE CENTER TAPPED RECTIFIER</h4>
                     <a href="#myModal23" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal23" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">FULL WAVE CENTER TAPPED RECTIFIER</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--FULL WAVE CENTER TAPPED RECTIFIER -->        <center><iframe id="Video23" width="750" height="520" src="https://www.youtube.com/embed/CGZ0yHaAmjs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




                                        <!--Starting OF COL 1 ROW 5-->

                                        <div class="col">
                                        <div class="card">
                                        <img src="images\ece\140.png" class="card-img-top">
                                          <div class="card-body">
                                           <h4 class="card-title">FULL WAVE BRIDGE RECTIFIER</h4>
                                          <a href="#myModal24" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                                          </div>
                                        </div>
                                        </div>
                                        <!-- end of COL1 ROW 5-->

                                        <!--Starting of modal 13 -->

                                                                 <div id="myModal24" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                   <div class="modal-dialog modal-lg">
                                                                     <div class="modal-content">
                                                                       <div class="modal-header">

                                                                                 <h4 class="modal-title">FULL WAVE BRIDGE RECTIFIER</h4>
                                                                       </div>
                                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <!--FULL WAVE BRIDGE RECTIFIER -->        <center><iframe id="Video24" width="750" height="520"  src="https://www.youtube.com/embed/Kl8IOESVWlM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                       </center>
                                                                     </div>
                                                                     </div>
                                                                 </div>
                                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\22.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">FILTERS</h4>
<a href="#myModal25" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal25" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">FILTERS</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--FILTERS -->        <center><iframe id="Video25" width="750" height="520" src="https://www.youtube.com/embed/GgZ1nJH7hWU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\23.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">INTRODUCTION TO CLAMPERS</h4>
                     <a href="#myModal26" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal26" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">INTRODUCTION TO CLAMPERS</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--INTRODUCTION TO CLAMPERS -->        <center><iframe id="Video26" width="750" height="520" src="https://www.youtube.com/embed/LA7c7jenkd0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




                                        <!--Starting OF COL 1 ROW 5-->

                                        <div class="col">
                                        <div class="card">
                                        <img src="images\ece\24.png" class="card-img-top">
                                          <div class="card-body">
                                           <h4 class="card-title">POSITIVE AND NEGATIVE CLAMPERS CIRCUIT</h4>
                                          <a href="#myModal27" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                                          </div>
                                        </div>
                                        </div>
                                        <!-- end of COL1 ROW 5-->

                                        <!--Starting of modal 13 -->

                                                                 <div id="myModal27" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                   <div class="modal-dialog modal-lg">
                                                                     <div class="modal-content">
                                                                       <div class="modal-header">

                                                                                 <h4 class="modal-title">POSITIVE AND NEGATIVE CLAMPERS CIRCUIT</h4>
                                                                       </div>
                                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <!--POSITIVE AND NEGATIVE CLAMPERS CIRCUIT -->        <center><iframe id="Video27" width="750" height="520" src="https://www.youtube.com/embed/zFdy23F-pEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                       </center>
                                                                     </div>
                                                                     </div>
                                                                 </div>
                                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\25.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">BIASED CLAMPER</h4>
<a href="#myModal28" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal28" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">BIASED CLAMPER</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BIASED CLAMPER -->        <center><iframe id="Video28" width="750" height="520" src="https://www.youtube.com/embed/kLRuU3VcXPA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




   <!--Starting OF COL 1 ROW 5-->

   <div class="col">
   <div class="card">
   <img src="images\ece\26.png" class="card-img-top">
     <div class="card-body">
      <h4 class="card-title">INTRODUCTION TO CLIPPERRS</h4>
     <a href="#myModal29" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
     </div>
   </div>
   </div>
   <!-- end of COL1 ROW 5-->

   <!--Starting of modal 13 -->

                            <div id="myModal29" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">INTRODUCTION TO CLIPPERRS</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
   <!--INTRODUCTION TO CLIPPERRS -->        <center><iframe id="Video29" width="750" height="520" src="https://www.youtube.com/embed/ttSxAdPM5XU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 13-->




                        <!--Starting OF COL 1 ROW 5-->

                        <div class="col">
                        <div class="card">
                        <img src="images\ece\27.png" class="card-img-top">
                          <div class="card-body">
                           <h4 class="card-title">UNBIASED SERIES CLIPPER</h4>
                          <a href="#myModal30" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                          </div>
                        </div>
                        </div>
                        <!-- end of COL1 ROW 5-->

                        <!--Starting of modal 13 -->

                                                 <div id="myModal30" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                       <div class="modal-header">

                                                                 <h4 class="modal-title">UNBIASED SERIES CLIPPER</h4>
                                                       </div>
                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <!--UNBIASED SERIES CLIPPER -->        <center><iframe id="Video30" width="750" height="520" src="https://www.youtube.com/embed/lTTbcCADOIY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                       </center>
                                                     </div>
                                                     </div>
                                                 </div>
                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\141.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">BIASED SERIES CLIPPERS</h4>
<a href="#myModal31" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal31" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">BIASED SERIES CLIPPERS</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BIASED SERIES CLIPPERS -->        <center><iframe id="Video31" width="750" height="520" src="https://www.youtube.com/embed/pieY6wUEGbU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




   <!--Starting OF COL 1 ROW 5-->

   <div class="col">
   <div class="card">
   <img src="images\ece\28.png" class="card-img-top">
     <div class="card-body">
      <h4 class="card-title">UNBIASED PARALLEL CLIPPER</h4>
     <a href="#myModal32" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
     </div>
   </div>
   </div>
   <!-- end of COL1 ROW 5-->

   <!--Starting of modal 13 -->

                            <div id="myModal32" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">UNBIASED PARALLEL CLIPPER</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
   <!--UNBIASED PARALLEL CLIPPER -->        <center><iframe id="Video32" width="750" height="520" src="https://www.youtube.com/embed/foafJEF0rw4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 13-->




                        <!--Starting OF COL 1 ROW 5-->

                        <div class="col">
                        <div class="card">
                        <img src="images\ece\29.png" class="card-img-top">
                          <div class="card-body">
                           <h4 class="card-title">BIASED PARALLEL CLIPPER</h4>
                          <a href="#video33" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                          </div>
                        </div>
                        </div>
                        <!-- end of COL1 ROW 5-->

                        <!--Starting of modal 13 -->

                                                 <div id="video33" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                       <div class="modal-header">

                                                                 <h4 class="modal-title">BIASED PARALLEL CLIPPER</h4>
                                                       </div>
                                                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <!--BIASED PARALLEL CLIPPER -->        <center><iframe id="Video33" width="750" height="520" src="https://www.youtube.com/embed/RkPGtBhayUg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                       </center>
                                                     </div>
                                                     </div>
                                                 </div>
                                             </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>


<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\30.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">COMBINATION CLIPPER</h4>
<a href="#myModal34" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal34" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">COMBINATION CLIPPER</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--COMBINATION CLIPPER -->        <center><iframe id="Video34" width="750" height="520" src="https://www.youtube.com/embed/Mvmfqg28ZnY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\31.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">VOLTAGE MULTIPLIER CIRCUIT(HALF WAVE VOLTAGE DOUBLER)</h4>
                     <a href="#myModal35" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal35" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">VOLTAGE MULTIPLIER CIRCUIT(HALF WAVE VOLTAGE DOUBLER)</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--VOLTAGE MULTIPLIER CIRCUIT(HALF WAVE VOLTAGE DOUBLER) -->        <center><iframe id="Video35" width="750" height="520" src="https://www.youtube.com/embed/r-295fIw0mI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




              <!--Starting OF COL 1 ROW 5-->

              <div class="col">
              <div class="card">
              <img src="images\ece\32.png" class="card-img-top">
                <div class="card-body">
                 <h4 class="card-title">VOLTAGE MULTIPLIER CIRCUIT(FULL WAVE VOLTAGE DOUBLER)</h4>
                <a href="#myModal36" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                </div>
              </div>
              </div>
              <!-- end of COL1 ROW 5-->

              <!--Starting of modal 13 -->

                                       <div id="myModal36" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-lg">
                                           <div class="modal-content">
                                             <div class="modal-header">

                                                       <h4 class="modal-title">VOLTAGE MULTIPLIER CIRCUIT(FULL WAVE VOLTAGE DOUBLER)</h4>
                                             </div>
                                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <!--VOLTAGE MULTIPLIER CIRCUIT(FULL WAVE VOLTAGE DOUBLER) -->        <center><iframe id="Video36" width="750" height="520"  src="https://www.youtube.com/embed/u9UlkmEPgqA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                             </center>
                                           </div>
                                           </div>
                                       </div>
                                   </div>                            <!--End of modal 13-->


</div>  <!-- end of ROW 5 -->
<br>
<br>



<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images\ece\33.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">VOLTAGE MULTIPLIER(VOLTAGE TRIPLER AND QUADRUPLER)</h4>
<a href="#myModal37" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 13 -->

                       <div id="myModal37" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">VOLTAGE MULTIPLIER(VOLTAGE TRIPLER AND QUADRUPLER)</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--VOLTAGE MULTIPLIER(VOLTAGE TRIPLER AND QUADRUPLER) -->        <center><iframe id="Video37" width="750" height="520" src="https://www.youtube.com/embed/JTJXdTTM8iU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->




                   <!--Starting OF COL 1 ROW 5-->

                   <div class="col">
                   <div class="card">
                   <img src="images\ece\34.png" class="card-img-top">
                     <div class="card-body">
                      <h4 class="card-title">REGULATED POWER SUPPLY</h4>
                     <a href="#myModal38" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
                     </div>
                   </div>
                   </div>
                   <!-- end of COL1 ROW 5-->

                   <!--Starting of modal 13 -->

                                            <div id="myModal38" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">

                                                            <h4 class="modal-title">REGULATED POWER SUPPLY</h4>
                                                  </div>
                                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                   <!--REGULATED POWER SUPPLY -->        <center><iframe id="Video38" width="750" height="520" src="https://www.youtube.com/embed/KE5QJtU6ZA8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                  </center>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                            <!--End of modal 13-->




                                        <!--Starting OF COL 1 ROW 5-->

                                        <div class="col">
                                        <div class="card" style="display:none;">
                                        </div>
                                        </div>
                                        <!-- end of COL1 ROW 5-->



</div>  <!-- end of ROW 5 -->
<br>
<br>

</div><!-- end of container -->
<?php include("footer.php") ?>


</body>
</html>

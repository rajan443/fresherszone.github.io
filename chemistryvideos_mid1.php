
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chemistry Lectures</title>
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
  <?php include("header.php");
  ?>
  <div class="container-fluid">
<br>
<br>
<center><h1 id="heading">ENGINEERING CHEMISTRY VIDEO LECTURES:</h1></center>
<hr id="hrc">
<br>

<!--button for selecting the terms -->
<div id="button-group">
<center>
<p>
<button class="btn btn-danger btn-lg mb-1" id="mid-I">MID-TERM I&nbsp&nbsp</button>
<a href="chemistryvideos_mid2.php"><button class="btn btn-primary btn-lg mb-1" id="mid-II">MID-TERM II&nbsp</button></a>
<a href="chemistryvideos_mid3.php"><button class="btn btn-primary btn-lg mb-1" id="mid-III">MID-TERM III</button></a>
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
<img src="images/chemistry/chemical bonding.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">CHEMICAL BONDING</h4>
  <a href="#myModal1" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                   <!-- end of first col-->

                  <!--Starting of the modal1 -->

                          <div id="myModal1" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">CHEMICAL BONDING</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <center><iframe id="Video1" width="750" height="520" src="https://www.youtube.com/embed/OhMLKSg9KBQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 1-->


<div class="col">
<div class="card">
<img src="images/chemistry/mot.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">MOLECULAR ORBITAL THEORY</h4>
<a href="#myModal2" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>                     <!-- end of second col-->

                  <!--Starting of the modal -->

                          <div id="myModal2" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                          <div class="modal-header">

                                    <h4 class="modal-title">MOLECULAR ORBITAL THEORY</h4>
                          </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MOLECULAR ORBITAL THEORY-->         <center><iframe id="Video2" width="750" height="520" src="https://www.youtube.com/embed/_vtMsnIeeZw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </center>
                              </div>
                              </div>
                          </div>
                      </div>                            <!--End of modal 2-->


<div class="col">
<div class="card">
<img src="images/chemistry/tata.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">MOLECULAR ORBITAL THEORY(HOMO ATOMIC MOLECULE)</h4>
  <a href="#myModal3" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                 <!-- end of third col-->


<!--Starting of the modal -->

                          <div id="myModal3" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">

                                          <h4 class="modal-title">MOLECULAR ORBITAL THEORY(HOMO ATOMIC MOLECULE)</h4>
                                </div>
                                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MOLECULAR ORBITAL THEORY(HOMO ATOMIC MOLECLE) -->  <center><iframe id="Video3" width="750" height="520" src="https://www.youtube.com/embed/H3QPImW9dpE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
  <img src="images/chemistry/two.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">MOLECULAR ORBITAL THEORY(HETERO ATOMIC MOLECULE)</h4>
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

                                           <h4 class="modal-title">MOLECULAR ORBITAL THEORY(HETERO ATOMIC MOLECULE)</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- MOLECULAR ORBITAL THEORY(HETRO ATOMIC MOLECULE)-->        <center><iframe id="Video4" width="750" height="520" src="https://www.youtube.com/embed/iYvT3PNsOfo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 4-->



<div class="col">
<div class="card">
<img src="images/chemistry/please.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">HYDROGEN BONDING</h4>
  <a href="#myModal5" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW2-->

 <!--Starting of modal 5 -->

                             <div id="myModal5" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">HYDROGEN BONDING</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- HYDROGEN BONDING -->        <center><iframe id="Video5" width="750" height="520" src="https://www.youtube.com/embed/fobLjk-Mfvg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 1-->




 <div class="col">
  <div class="card">
  <img src="images/chemistry/deep.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">METALLIC BONDING</h4>
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

                                                      <h4 class="modal-title">METALLIC BONDING</h4>
                                            </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!--METALLIC BONDING -->        <center><iframe id="Video6" width="750" height="520" src="https://www.youtube.com/embed/-Euc6SOAu8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\chemistry/semiconductor.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">SEMICONDUCTORS</h4>
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

                                         <h4 class="modal-title">SEMICONDUCTORS</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- SEMICONDUCTORS-->        <center><iframe id="Video7" width="750" height="520" src="https://www.youtube.com/embed/5ZNeDxfgYAE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 7-->



<div class="col">
<div class="card">
<img src="images\chemistry/REACTION INTERMEDIATE.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">REACTION INTERMEDIATE</h4>
<a href="#myModal8" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW3-->

<!--Starting of modal 8 -->

                           <div id="myModal8" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                 <div class="modal-header">

                                           <h4 class="modal-title">REACTION INTERMEDIATE</h4>
                                 </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- REACTION INTERMEDIATE-->        <center><iframe id="Video8" width="750" height="520" src="https://www.youtube.com/embed/zUlPXky1GcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 8-->




<div class="col">
<div class="card">
<img src="images\chemistry/isomerism.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">ISOMERISM</h4>
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

                                                    <h4 class="modal-title">ISOMERISM</h4>
                                          </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- ISOMERISM -->        <center><iframe id="Video9" width="750" height="520" src="https://www.youtube.com/embed/ZTT5dKrdCP8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\chemistry/optical isomerism.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">OPTICAL ISOMERISM</h4>
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

                                       <h4 class="modal-title">OPTICAL ISOMERISM</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- OTICAL ISOMERISM-->        <center><iframe id="Video10" width="750" height="520" src="https://www.youtube.com/embed/7dEXbZSs4tc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 10-->



<div class="col">
<div class="card">
<img src="images\chemistry/geometrical isomeerism.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">GEOMETRICAL ISOMERISM</h4>
<a href="#myModal11" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 8 -->

                         <div id="myModal11" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">GEOMETRICAL ISOMERISM</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- GEOMETRICAL ISOMERSM -->        <center><iframe id="Video11" width="750" height="520" src="https://www.youtube.com/embed/9DlutZBQWVk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 11-->




<div class="col">
<div class="card">
<img src="images\chemistry/chirality1.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">CHIRALITY</h4>
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

                                                  <h4 class="modal-title">CHIRALITY</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- CHIRALITY -->        <center><iframe id="Video12" width="750" height="520" src="https://www.youtube.com/embed/0IA794o_BqI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\chemistry/ro.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">RS CONFIGURATION</h4>
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

                                       <h4 class="modal-title"> RS CONFIGURATION</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--RS CONFIGURATION -->        <center><iframe id="Video13" width="750" height="520" src="https://www.youtube.com/embed/cY44Rwb0IhA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 13-->



<div class="col">
<div class="card">
<img src="images\chemistry/eo.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">EZ CONFIGURATION</h4>
<a href="#myModal14" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                         <div id="myModal14" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">  EZ CONFIGURATION</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- EZ CONFIGURATION-->        <center><iframe id="Video14" width="750" height="520" src="https://www.youtube.com/embed/qGeMpxRe2yc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 14-->




<div class="col">
<div class="card">
<img src="images\chemistry/DIASTEROMER.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">ENANTIOMERS AND DIASTEREOMERS</h4>
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

                                                  <h4 class="modal-title">DIASTEREOMER</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- DIASTEROMER -->    <center><iframe id="Video15" width="750" height="520" src="https://www.youtube.com/embed/onR5Xgz7eKc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\chemistry/bomb.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">BOMB CALORIE METER</h4>
<a href="#myModal16" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 19 -->

                       <div id="myModal16" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title">BOMB CALORIE METER</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BOMB CALORIE METER -->        <center><iframe id="Video16" width="750" height="520" src="https://www.youtube.com/embed/9suiA6EWQ18" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 19-->



<div class="col">
<div class="card">
<img src="images\chemistry/syn.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">SYNTHETIC PETROL</h4>
<a href="#myModal17" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 20 -->

                         <div id="myModal17" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">SYNTHETIC PETROL</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--SYNTHETIC PETROL-->        <center><iframe id="Video17" width="750" height="520" src="https://www.youtube.com/embed/-I_UtU7zYs0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 20-->




<div class="col">
<div class="card">
<img src="images\chemistry/lub.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">LUBRICANTS</h4>
<a href="#myModal18" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 5-->


      <!--Starting of modal 21 -->

                                  <div id="myModal18" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">LUBRICANTS</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- LUBRICANTS -->    <center><iframe id="Video18" width="750" height="520" src="https://www.youtube.com/embed/CLMdkexbt3E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 21-->


</div>  <!-- end of ROW 5 -->
<br>
<br>

<!--Starting of row 5-->
<div class="row">
<!--Starting OF COL 1 ROW 5-->

<div class="col">
<div class="card">
<img src="images/chemistry/ben.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">FUELS</h4>
<a href="#myModal19" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
<!-- end of COL1 ROW 5-->

<!--Starting of modal 21 -->

                       <div id="myModal19" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">

                                       <h4 class="modal-title"> FUELS</h4>
                             </div>
                                       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--FUELS -->        <center><iframe id="Video19" width="750" height="520" src="https://www.youtube.com/embed/jRVg4ue-_lc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                             </center>
                           </div>
                           </div>
                       </div>
                   </div>                            <!--End of modal 21-->



<div class="col">
<div class="card">
<img src="images\chemistry/bomb2.png" class="card-img-top">
<div class="card-body">
<h4 class="card-title">CALORIFIC VALUE</h4>
<a href="#myModal20" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW5-->

<!--Starting of modal 14 -->

                         <div id="myModal20" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header">

                                         <h4 class="modal-title">CALORIFIC VALUE</h4>
                               </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--CALORIFIC VALUE-->        <center><iframe id="Video20" width="750" height="520" src="https://www.youtube.com/embed/UfzS7djnj4M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 22-->




<div class="col">
<div class="card">
<img src="images\chemistry/CALORIFIC VALUE(NUMERICAL).png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">CALORIFIC VALUE(NUMERICAL)</h4>
<a href="#myModal21" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>
 <!-- end of COL3 ROW 5-->


      <!--Starting of modal 23 -->

                                  <div id="myModal21" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">

                                                  <h4 class="modal-title">CALORIFIC VALUE(NUMERICAL)</h4>
                                        </div>
                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <!-- CALORIFIC VALUE(NUMERICAL) -->    <center><iframe id="Video21" width="750" height="520" src="https://www.youtube.com/embed/Unn_GRLrs_A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </center>
                                      </div>
                                      </div>
                                  </div>
                              </div>                            <!--End of modal 23-->


</div>  <!-- end of ROW 5 -->
<br>
<br>

</div><!-- end of container -->
</div> <!-- end of div for id-->






</div>
</div>

<?php include("footer.php");
?>
</body>
</html>

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



  <script>
  $(document).ready(function(){
    var originalcolor = $("#mid-III").attr('class');
    var changecolor="btn btn-danger btn-lg";


          $("#mid-III").attr('class', changecolor);
          $("#mid-I").attr('class', originalcolor);
          $("#mid-II").attr('class', originalcolor);



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
<a href="ecevideos_mid1.php"><button class="btn btn-danger btn-lg mb-1" id="mid-I">MID-TERM I&nbsp&nbsp</button></a>
<a href="ecevideos_mid2.php"><button class="btn btn-primary btn-lg mb-1" id="mid-II">MID-TERM II&nbsp</button></a>
<button class="btn btn-primary btn-lg mb-1" id="mid-III">MID-TERM III</button>
</p>
</center>
</div>
<br>


<!-- _________________________________________________-MODULE-III____________________________________ -->


<h3 style="margin-left:600px"> MODULE III </h3>
<hr width="1100px" height="2px" style="background-color:tomato">
<div class="container">
  <br>
<!-- Starting of the first row-->

<div class="row">
 <!--Starting of the colums-->
 <div class="col">
  <div class="card">
  <img src="images\ece\55.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">INTRODUCTION TO NUMBER SYSTEM</h4>
    <a href="#myModal61" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>                   <!-- end of first col-->

                    <!--Starting of the modal 45 -->

                            <div id="myModal61" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

<!--INTRODUCTION TO NUMBER SYSTEM-->    <h4 class="modal-title">INTRODUCTION TO NUMBER SYSTEM</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                      <center><iframe id="video61" width="750" height="520" src="https://www.youtube.com/embed/crSGS1uBSNQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal 45-->


<div class="col">
<div class="card">
<img src="images\ece\56.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">BINARY NUMBER SYSTEM</h4>
  <a href="#myModal62" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>                     <!-- end of second col-->

                    <!--Starting of the modal 32 -->

                            <div id="myModal62" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                            <div class="modal-header">

                                      <h4 class="modal-title">BINARY NUMBER SYSTEM</h4>
                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BINARY NUMBER SYSTEM-->         <center><iframe id="video62" width="750" height="520" src="https://www.youtube.com/embed/w7ZLvYAi6pY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </center>
                                </div>
                                </div>
                            </div>
                        </div>                            <!--End of modal46-->


 <div class="col">
  <div class="card">
  <img src="images\ece\57.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">BINARY ADDITION</h4>
    <a href="#myModal63" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>                 <!-- end of third col 47-->


<!--Starting of the modal -->

                            <div id="myModal63" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">

                                            <h4 class="modal-title">BINARY ADDITION</h4>
                                  </div>
                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BINARY ADDITION -->        <center><iframe id="video63" width="750" height="520" src="https://www.youtube.com/embed/Ri0VhKhw7dY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    <img src="images\ece\sanchit.png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">BINARY SUBTRACTION</h4>+

      <a href="#myModal64" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
 <!-- end of first col-->

 <!--Starting of modal 48 -->

                             <div id="myModal64" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                   <div class="modal-header">

                                             <h4 class="modal-title">BINARY SUBTRACTION</h4>
                                   </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--BINARY SUBTRACTION -->        <center><iframe id="video64" width="750" height="520" src="https://www.youtube.com/embed/31N9tjaWZbs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 48-->



 <div class="col">
  <div class="card">
  <img src="images\ece\yash.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">INTRODUCTION TO BOOLEAN ALZEBRA(PART-1)</h4>
    <a href="#myModal65" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
</div>              <!-- end of COL2 ROW2-->

   <!--Starting of modal 49 -->

                               <div id="myModal65" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     <div class="modal-header">

                                               <h4 class="modal-title">INTRODUCTION TO BOOLEAN ALZEBRA(PART-1)</h4>
                                     </div>
                                               <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
 <!-- INTRODUCTION TO BOOLEAN ALZEBRA(PART-1) -->        <center><iframe id="video65" width="750" height="520" src="https://www.youtube.com/embed/WW-NPtIzHwk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </center>
                                   </div>
                                   </div>
                               </div>
                           </div>                            <!--End of modal 49-->




   <div class="col">
    <div class="card">
    <img src="images\ece\boolean algebra(part-2).png" class="card-img-top">
      <div class="card-body">
       <h4 class="card-title">INTRODUCTION TO BOOLEAN ALZEBRA(PART-2)</h4>
      <a href="#myModal122" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
      </div>
    </div>
    </div>
       <!-- end of COL3 ROW 2-->


            <!--Starting of modal 50 -->

                                        <div id="myModal122" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                        <h4 class="modal-title">INTRODUCTION TO BOOLEAN ALZEBRA(PART-2)</h4>
                                              </div>
                                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <!-- INTRODUCTION TO BOOLEAN ALZEBRA(PART-2) -->   <center><iframe id="Video122" width="750" height="520" src="https://www.youtube.com/embed/OjWmVCG8PLA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
  <img src="images\ece\62.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">1's AND 2's COMPLEMENT</h4>
    <a href="#myModal66" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 51 -->

                           <div id="myModal66" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">1's AND 2's COMPLEMENT</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- 1's AND 2's COMPLEMENT -->        <center><iframe id="Video66" width="750" height="520" src="https://www.youtube.com/embed/S_fPMrrIA30" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 51-->



<div class="col">
<div class="card">
<img src="images\ece\63.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">BINARY SUBTRACTION USING 2's COMPLEMENT</h4>
  <a href="#myModal67" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 52-->

                             <div id="myModal67" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-header">

                                               <h4 class="modal-title">BINARY SUBTRACTION USING 2's COMPLEMENT</h4>
                                     </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- BINARY SUBTRACTION USING 2's COMPLEMENT --> <center><iframe id="Video67" width="750" height="520" src="https://www.youtube.com/embed/L_m7jBvtzpQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 52-->




 <div class="col">
  <div class="card">
  <img src="images\ece\64.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">LOGIC GATES(PART-1)</h4>
    <a href="#myModal68" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 53 -->

                                      <div id="myModal68" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">

                                              <div class="modal-header">

                                                        <h4 class="modal-title">LOGIC GATES(PART-1)</h4>
                                              </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- LOGIC GATES(PART-1) -->        <center><iframe id="Video68" width="750" height="520" src="https://www.youtube.com/embed/xDARFvArIpc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\65.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">LOGIC GATES(PART-2)</h4>
  <a href="#myModal69" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal69" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">LOGIC GATES(PART-2)</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- LOGIC GATES(PART-2) -->        <center><iframe id="Video69" width="750" height="520" src="https://www.youtube.com/embed/iogRGu7nbJw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card">
<img src="images\ece\66.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">LOGIC GATES(PART-3)</h4>
<a href="#myModal70" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 55 -->

                           <div id="myModal70" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">LOGIC GATES(PART-3)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--LOGIC GATES(PART-3) -->        <center><iframe id="Video70" width="750" height="520" src="https://www.youtube.com/embed/TbV2lVIdfEM"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 55-->




<div class="col">
<div class="card">
<img src="images\ece\67.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">LOGIC GATES(PART-4)</h4>
  <a href="#myModal71" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 56 -->

                                    <div id="myModal71" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">LOGIC GATES(PART-4)</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- LOGIC GATES(PART-4)-->        <center><iframe id="Video71" width="750" height="520" src="https://www.youtube.com/embed/1kLbY1-f4rs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 56-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src="images\ece\71.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">LOGIC GATES(PART-5)</h4>
    <a href="#myModal72" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 51 -->

                           <div id="myModal72" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">LOGIC GATES(PART-5)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- LOGIC GATES(PART-5) -->        <center><iframe id="Video72" width="750" height="520" src="https://www.youtube.com/embed/9VKHu3V4wEE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 51-->



<div class="col">
<div class="card">
<img src="images\ece\72.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">LOGIC GATES(PART-6)</h4>
  <a href="#myModal73" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 52-->

                             <div id="myModal73" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-header">

                                               <h4 class="modal-title">LOGIC GATES(PART-6)</h4>
                                     </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- LOGIC GATES(PART-6) --> <center><iframe id="Video73" width="750" height="520" src="https://www.youtube.com/embed/bd16TkFCDjM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 52-->




 <div class="col">
  <div class="card">
  <img src="images\ece\74.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">NAND GATE AS A UNIVERSAL GATE(PART-1)</h4>
    <a href="#myModal74" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 53 -->

                                      <div id="myModal74" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">

                                              <div class="modal-header">

                                                        <h4 class="modal-title">NAND GATE AS A UNIVERSAL GATE(PART-1)</h4>
                                              </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- NAND GATE AS A UNIVERSAL GATE(PART-1) -->        <center><iframe id="Video74" width="750" height="520" src="https://www.youtube.com/embed/ChtmE09BSy0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\75.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">NAND GATE AS A UNIVERSAL GATE(PART-2)</h4>
  <a href="#myModal75" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal75" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">NAND GATE AS A UNIVERSAL GATE(PART-2)</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- NAND GATE AS A UNIVERSAL GATE(PART-2) -->        <center><iframe id="Video75" width="750" height="520" src="https://www.youtube.com/embed/MZ_Pd40F4MU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card">
<img src="images\ece\76.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">NOR GATE AS A UNIVERSAL GATE</h4>
<a href="#myModal76" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 55 -->

                           <div id="myModal76" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">NOR GATE AS A UNIVERSAL GATE</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--NOR GATE AS A UNIVERSAL GATE -->        <center><iframe id="Video76" width="750" height="520" src="https://www.youtube.com/embed/Z6Nds10n7rs"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 55-->




<div class="col">
<div class="card">
<img src="images\ece\77.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">CANONICAL FORM-SUM OF PRODUCT(PART-1)</h4>
  <a href="#myModal77" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 56 -->

                                    <div id="myModal77" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">CANONICAL FORM-SUM OF PRODUCT(PART-1)</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- CANONICAL FORM-SUM OF PRODUCT(PART-1)-->        <center><iframe id="Video77" width="750" height="520" src="https://www.youtube.com/embed/xnLBbOYYnHM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 56-->


</div>  <!-- end of ROW 4 -->
<br>
<br>

<!--Starting of row 3-->
<div class="row">
 <!--Starting OF COL 1 ROW 3-->

 <div class="col">
  <div class="card">
  <img src="images\ece\78.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">CANONICAL FORM-SUM OF PRODUCT(PART-2)</h4>
    <a href="#myModal78" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
<!-- end of COL1 ROW 3-->

<!--Starting of modal 51 -->

                           <div id="myModal78" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">CANONICAL FORM-SUM OF PRODUCT(PART-2)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- CANONICAL FORM-SUM OF PRODUCT(PART-2) -->        <center><iframe id="Video78" width="750" height="520" src="https://www.youtube.com/embed/NGgNoa0_zns" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 51-->



<div class="col">
<div class="card">
<img src="images\ece\79.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">CANONICAL FORM-PRODUCT OF SUM(PART-1)</h4>
  <a href="#myModal79" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>              <!-- end of COL2 ROW3-->

 <!--Starting of modal 52-->

                             <div id="myModal79" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-header">

                                               <h4 class="modal-title">CANONICAL FORM-PRODUCT OF SUM(PART-1)</h4>
                                     </div>
                                             <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- CANONICAL FORM-PRODUCT OF SUM(PART-1) --> <center><iframe id="Video79" width="750" height="520" src="https://www.youtube.com/embed/nXsiLPJfDZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                   </center>
                                 </div>
                                 </div>
                             </div>
                         </div>                            <!--End of modal 52-->




 <div class="col">
  <div class="card">
  <img src="images\ece\80.png" class="card-img-top">
    <div class="card-body">
     <h4 class="card-title">CANONICAL FORM-PRODUCT OF SUM(PART-2)</h4>
    <a href="#myModal80" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
    </div>
  </div>
  </div>
     <!-- end of COL3 ROW 3-->


          <!--Starting of modal 53 -->

                                      <div id="myModal80" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">

                                              <div class="modal-header">

                                                        <h4 class="modal-title">CANONICAL FORM-PRODUCT OF SUM(PART-2)</h4>
                                              </div>
                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <!-- CANONICAL FORM-PRODUCT OF SUM(PART-2) -->        <center><iframe id="Video80" width="750" height="520" src="https://www.youtube.com/embed/ihTH1C6qCYI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
<img src="images\ece\81.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">BOOLEAN ALGEBRA AND SIMPLIFICATION</h4>
  <a href="#myModal81" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal81" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">BOOLEAN ALGEBRA AND SIMPLIFICATION</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- BOOLEAN ALZEBRA AND SIMPLIFICATION -->        <center><iframe id="Video81" width="750" height="520" src="https://www.youtube.com/embed/AnQsznjccUw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card">
<img src="images\ece\82.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">K-MAP(SOP,POS AND DONT CARE BIT)</h4>
<a href="#myModal82" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 55 -->

                           <div id="myModal82" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">K-MAP(SOP,POS AND DONT CARE BIT)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--K-MAP(SOP,POS AND DONT CARE BIT) -->        <center><iframe id="Video82" width="750" height="520" src="https://www.youtube.com/embed/CCmf8wdc8cU"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 55-->




<div class="col">
<div class="card">
<img src="images\ece\83.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">OPERATIONAL AMPLIFIER</h4>
  <a href="#myModal83" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 56 -->

                                    <div id="myModal83" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">OPERATIONAL AMPLIFIER</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- OPERATIONAL AMPLIFIER-->        <center><iframe id="Video83" width="750" height="520" src="https://www.youtube.com/embed/kiiA6WTCQn0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 56-->


</div>  <!-- end of ROW 4 -->
<br>
<br>


<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\ece\84.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">BLOCK DIAGRAM AND DISCRIPTION OF OPERATIONAL AMPLIFIER</h4>
  <a href="#myModal84" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal84" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">BLOCK DIAGRAM AND DISCRIPTION OF OPERATIONAL AMPLIFIER</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- BLOCK DIAGRAM AND DISCRIPTION OF OPERATIONAL AMPLIFIER -->        <center><iframe id="Video84" width="750" height="520" src="https://www.youtube.com/embed/c5XDuaNSIMs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card">
<img src="images\ece\op.png" class="card-img-top">
<div class="card-body">
 <h4 class="card-title">OPERATIONAL AMPLIFIER(OPEN LOOP,INVERTING,NON-INVERTING & DIFFERENTIAL MODE)</h4>
<a href="#myModal85" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
</div>
</div>
</div>              <!-- end of COL2 ROW4-->

<!--Starting of modal 55 -->

                           <div id="myModal85" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">

                                   <div class="modal-header">

                                             <h4 class="modal-title">OPERATIONAL AMPLIFIER(OPEN LOOP,INVERTING,NON-INVERTING & DIFFERENTIAL MODE)</h4>
                                   </div>
                                           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!--OPERATIONAL AMPLIFIER(OPEN LOOP,INVERTING,NON-INVERTING & DIFFERENTIAL MODE) -->        <center><iframe id="Video85" width="750" height="520" src="https://www.youtube.com/embed/TVpHXnPL1hg"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </center>
                               </div>
                               </div>
                           </div>
                       </div>                            <!--End of modal 55-->




<div class="col">
<div class="card">
<img src="images\ece\85.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">OPERATIONAL AMPLIFIER INTEGRATOR CIRCUIT</h4>
  <a href="#myModal86" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
   <!-- end of COL3 ROW 4-->


        <!--Starting of modal 56 -->

                                    <div id="myModal86" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                      <h4 class="modal-title">OPERATIONAL AMPLIFIER INTEGRATOR CIRCUIT</h4>
                                            </div>
                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
      <!-- OPERATIONAL AMPLIFIER INTEGRATOR CIRCUIT-->        <center><iframe id="Video86" width="750" height="520" src="https://www.youtube.com/embed/GVEIk0B3ky0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </center>
                                        </div>
                                        </div>
                                    </div>
                                </div>                            <!--End of modal 56-->


</div>  <!-- end of ROW 4 -->
<br>
<br>



<!--Starting of row 4-->
<div class="row">
<!--Starting OF COL 1 ROW 4-->

<div class="col">
<div class="card">
<img src="images\ece\86.png" class="card-img-top">
  <div class="card-body">
   <h4 class="card-title">OPERATIONAL AMPLIFIER DIFFERENTIATOR CIRCUIT</h4>
  <a href="#myModal87" class="btn btn-lg btn-danger" data-toggle="modal">&nbsp&nbsp&nbsp&nbsp&nbspPLAY&nbsp&nbsp&nbsp&nbsp</a>
  </div>
</div>
</div>
<!-- end of COL1 ROW 4-->

<!--Starting of modal 54 -->

                         <div id="myModal87" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">

                                 <div class="modal-header">

                                           <h4 class="modal-title">OPERATIONAL AMPLIFIER DIFFERENTIATOR CIRCUIT</h4>
                                 </div>
                                         <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<!-- OPERATIONAL AMPLIFIER DIFFERENTIATOR CIRCUIT -->        <center><iframe id="Video87" width="750" height="520" src="https://www.youtube.com/embed/Yx6e_70NBnY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                               </center>
                             </div>
                             </div>
                         </div>
                     </div>                            <!--End of modal 54-->



<div class="col">
<div class="card" style="display:none;">
</div>
</div>              <!-- end of COL2 ROW4-->

<div class="col">
<div class="card"  style="display:none;">
</div>
</div>
</div>  <!-- end of ROW 4 -->
<br>
<br>
</div>

<?php include("footer.php") ?>
</body>
</html>

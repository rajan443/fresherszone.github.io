
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <!-- Material Design for Bootstrap fonts and icons -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

      <!-- Material Design for Bootstrap CSS -->
      <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">


  <!-- custom CSS -->
    <link href="css/dropdown.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/electrical.css">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

      <!-- Bootstrap css -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Material Design Bootstrap -->
      <link href="css/mdb.min.css" rel="stylesheet">



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


<title>First Year Content</title>
<link rel="stylesheet" type="text/css" href="css/first.css">
<style>
.col-centered{
    padding-right: 0;
    padding-left: 0;
    float: none;
    padding: 0;
    margin: 0 auto;
}
.row
{

  margin-top: 20px;
  margin-left: 10px;


}
.button{
  border-radius: 15px;
  background: #f35c70;
}
#hrc{
  width: 500px;
  height: 2px;
  background-color: #590000;
  align: right;

}
</style>
</head>
<body >
  <?php include("header.php");
  ?>
  <section class="intro">
    <center>
      <table>
        <tr>
          <td><a href="#theory"><button class="buttonup" style="vertical-align:middle"><span>Theory Subjects</span></button></a></td></tr><tr>
          <td><a href="#practical"><button class="buttonup" style="vertical-align:middle"><span>Practical Subjects</span></button></a></td>
        </tr>
    </table>
</center>
  </section>
  <br>

    <h3 style="margin-right:250px"><a id="theory"> Theory Subjects</a></h3>
    <hr  id="hrc">
<section class="container">

  <div>
    <div class="row" >
      <div class="col-sm-3"><button id="construction" class="button button2 data-toggle="modal" data-target="#myModal"">MATHEMATICS I</button></a></div><br>
      <div class="col-sm-3"><a href="physics.php"><button class="button button2">PHYSICS</button></a></div>
      <div class="col-sm-3"><a href="chemistry.php"><button class="button button2">CHEMISTRY</button></a></div>
    </div>
      <div class="row">
          <div class="col-sm-3"><a href="#"><button id="construction" class="button button2">COMPUTER PROGRAMMING</button></a></div>
          <div class="col-sm-3"><a href="mechanical.php"><button class="button button2">MECHANICAL</button></a></div>
          <div class="col-sm-3"><a href="mechanics.php"><button class="button button2">APPLIED MECHANICS</button></a></div>
      </div>
      <div class="row">
      <div class="col-sm-3"><a href="electrical.php"><button class="button button2">ELECTRICAL</button></a></div>
      <div class="col-sm-3"><a href="electronics.php"><button class="button button2">ELECTRONICS</button></a></div>
      <div class="col-sm-3"><a href="#english.php"><button class="button button2">ENGLISH I</button></a></div>
    </div>
  </div>
  </section>
  <br>


  <h3 style="margin-right:250px"><a id="practical">Practical Subjects</a></h3>
  <hr id="hrc">
<section class="container">
  <div class="row">
    <div class="col-sm-3"><button class="button button2" data-toggle="modal" data-target="#myModal">ENGLISH LAB</button></div>

    <div class="col-sm-3"><button class="button button2" data-toggle="modal" data-target="#myModal">MECHANICAL WORKSHOP</button></div>


      <div class="col-sm-3"><a href="physics_lab.php"><button class="button button2">PHYSICS LAB</button></a></div>
</div>
  <div class="row">
        <div class="col-sm-3"><a href="chemistry_lab.php"><button class="button button2">CHEMISTRY LAB</button></a></div>
         <div class="col-sm-3"><button class="button button2" data-toggle="modal" data-target="#myModal">PROGRAMMING LAB</button></div>
         <div class="col-sm-3"><a href="electrical_lab.php"><button class="button button2">ELECTRICAL LAB</button></a></div>

  </div>

      <div class="row"><div class="col-sm-3"><a href="mechanics_lab.php"><button class="button button2">MECHANICS LAB</button></a></div>


</section>

<div id="myModal" class="modal fade bd-example-modal-md container-fluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

      <div class="modal-body">
          <img src="images/coming_soon.jpg" class="img-responsive">

    </div>
</div>
</div>

<br>
<?php include("footer.php");
?>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
  <title>Alarm Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <!-- Custom CSS -->
  <!-- <link rel="stylesheet" href="css/navbar.css"> -->
  <link rel="stylesheet" href="../css/alarmlandingpage.css">

</head>

<body>

  <nav class="navbar navbar-expand navbar-light ">
    <a class="navbar-brand" href="#">
  <img src="../img/logo.jpg" width="140" height="50" alt="">
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class=>
          <a class="nav-link" href="alarmlandingpage.php"><p>Alarm List</p><span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="alarm.php"><p>Alarm Details</p></a>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button type="reset" onclick="location.href='../index.php'" class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </div>
  </nav>

  <!-- main container -->
  <div class="container fluid" style="background:#DFE6ED; padding:20px; ">



    <!-- alarm top info -->
    <div class="container alarmtop">
      <div class="row">
        <div class="col">
          <p>Client</p>
        </div>
        <div class="col">
          <p>Alarm Type</p>
        </div>
        <div class="col">
          <p>Time </p>
        </div>
        <div class="col">
          <p>Value</p>
        </div>
        <div class="col">
          <p>Status</p>
        </div>
      </div>
    </div>

    <!-- alarm list -->
    <div class="alarmList">

      <!-- alarm list end -->
    </div>

    <!-- main container end   -->
  </div>


  <!-- Optional JavaScript -->
  <script src="../js/addalarm.js" type="text/javascript"></script>
  <!-- jQuery first, tden Popper.js, tden Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>

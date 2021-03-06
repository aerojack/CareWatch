<html lang="en">

<head>
  <title>Care watch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://weloveiconfonts.com/api/?family=fontawesome' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/alarm.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>
  <?php
    include_once("classes/alarm.php");
    $alarmId = $_GET['id'];
    $geta = Alarm::Instance($_GET['id']);
    $getj = json_encode($geta);
    $gstate = $geta->state;
    // $galarmid = $geta->id;
    if ($gstate === '1') {
      // $geta->state = 2;
      $geta->state = '2';
      $geta->update_db();
    }
    if (isset($_GET['setstate'])) {
      $newstate = $_GET['setstate'];
      $geta->state = $newstate;
      $geta->update_db();
    }
   ?>


  <div id="wrapper">

    <header>
      <img src="../img/logo.jpg" alt="logo" style="width: 15%; float: left; margin-top: -2%; position: relative; margin-left: -11%;" ;>
      <nav class="headernav">
        <ul class="main-nav">
          <li><a href="alarmlandingpage.php">Alarm List</a></li>
          <li><a href="#">Alarm Details</a>
          </li>
        </ul>
      </nav>

      <a href="../index.php">
        <center><input type="submit" name="logout_submit" value="Logout" /></center></a>

    </header>
  </div>

  <div class="content">

    <aside>
      <a>Body temperature</a>

      <p>
        <div id="bodytemp">
          <span> <div id="temperature">
            </div></span>
        </div>
      </p>

      <h3>Client Photo</h3>
      <b><img src="../img/oma2.jpg" width="100%" height="100%" alt="Client Photo"></b>

      <h4>Client information</h4>
      <g><em><big>Name:Mrs. A.Brown</br>
        Address: 5th Avenue, 5645</br>
        WSA 4565 New York</br>
        Tel. 054-34 66 890</br>
        Date of birth: 05/04/1944</br></br>
        Category: living alone</br></br>
        Heart patient, diabetes,</br>
        wheelchair</big></em></g>

      <h5>Heartbeat Graph</h5>
      <s><div id="heartbeat">
          <span> <div id="chart_div">
          </div></span>
      </div></s>

    </aside>

    <div class="container">
      <div class="led-box">
        <div class="led-green"></div>
        <p>PHONE RINGS</p>
      </div>
      <div class="led-box">
        <div class="led-yellow"></div>
        <p>WARNING</p>
      </div>
      <div class="led-box">
        <div class="led-red"></div>
        <p>ALARM</p>
      </div>
      <div class="led-box">

      </div>
    </div>
  </div>

<div class="buttonPart">



  <div class="container-buttons">
    <div class="tooltip">Alarm <br> History
      <span class="tooltiptext"><h2>Alarm history</h2>
    <div id="text">
<p> 25/01/17/17:55  Smoke Alarm 2<br>
    27/01/17/18:08  Smoke alarm 2<br>
    16/02/17/11:09  Alarm button<br>
    23/03/17/12:35  Fall alarm<br>
    24/04/17/22:14  Hartbeat alarm<br>
    26/04/17/19:34  Body temp alarm</p>
  </div></span>
    </div>

    <div class="tooltip">Reminder<br> List
      <span class="tooltiptext"><h2>Reminder list</h2>
    <div id="text">
  <p> 9:00 everyday textreminder medicines<br>
    9:00 everyday   vibrations reminder medicines<br>
    17:00 everyday  textreminder medicines<br>
    17:00 everyday  vibrations reminder medicines<br>
    25/06/17/14 hours: textreminder physician<br>
    25/06/17/14 hours: vibrations reminder physician<br>
  </div></span>
    </div>

    <div class="tooltip">Contacts <br> List
      <span class="tooltiptext"><h3>Contact list</h2>
        <div id="text">
          <p> Contact neighbour 1:  Mrs. S.Turner (056-2345-4321)<br>
            Contact neighbour 2:  Mr. G.Armstrong (088-5676-4378)<br>
            Family member 1: Mrs. J. Brown (daughter) distance 12 kms (067-4572-4309)<br>
            Family member 2: Mrs. S.Fletcher (sister) distance 20 kms (069-5387-1273)<br>
            Physician: Dr. A.Lincoln (054-5456-6732)<br>
            Hospital: St.Peters Hospital (045-3243-6518)<br>
</div></span></div>
  </div>

  <div class="boxright">
    <button class="btn success">TALK</button>
    <button class="btn info">LISTEN</button>
    <button class="btn warning">MESSAGE</button>
    <button class="btn danger">VIBRATION</button>
    <button class="btn progress" onclick="location.href='alarm.php?id=<?php echo $alarmId;?>&setstate=3';">In Progress</button>
    <button class="btn solved"   onclick="location.href='alarm.php?id=<?php echo $alarmId;?>&setstate=4';">Solved</button>
  </div>
</div>
  <script>
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {
      'packages': ['line']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChartHB);
    // id 5 is heartbeat id 6 is temperatrure  for demo purposes
    function drawChartHB() {
      var jsonData = $.ajax({
        url: "https://carew.oudgenoeg.nl/php/chartdata.php?id=5",
        dataType: "json",
        async: false
      }).responseText;
      var jsonClean = JSON.parse(jsonData);
      var jsonDataPoints = jsonClean.datapoints;
      if (jsonDataPoints.length > 100) {
        var last100 = jsonDataPoints.length - 100;
      } else {
        last100 = jsonDataPoints.length;
        //show last max 100
      }
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable();
      data.addColumn('string', '');
      data.addColumn('number', jsonClean.type);

      for (var i = last100; i < jsonDataPoints.length; i++) {
        data.addRow([jsonDataPoints[i].time.substr(0, 5), parseFloat(jsonDataPoints[i].value)]);
      }
      var options = {
        chart: {
          // title: 'Sensor ' + jsonClean.type + ' data',
          // subtitle: 'if more than 100 then show last 100'
        },
        width: 600,
        height: 333,
        axes: {
          x: {
            0: {
              side: 'bottom'
            }
          }
        }
      };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.charts.Line(document.getElementById('chart_div'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
  <script>
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {
      'packages': ['line']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);
    // id 5 is heartbeat id 6 is temperatrure  for demo purposes
    function drawChart() {
      var jsonData = $.ajax({
        url: "https://carew.oudgenoeg.nl/php/chartdata.php?id=6",
        dataType: "json",
        async: false
      }).responseText;
      var jsonClean = JSON.parse(jsonData);
      var jsonDataPoints = jsonClean.datapoints;
      if (jsonDataPoints.length > 100) {
        var last100 = jsonDataPoints.length - 100;
      } else {
        last100 = jsonDataPoints.length;
        //show last max 100
      }
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable();
      data.addColumn('string', '');
      data.addColumn('number', jsonClean.type);

      for (var i = last100; i < jsonDataPoints.length; i++) {
        data.addRow([jsonDataPoints[i].time.substr(0, 6), parseFloat(jsonDataPoints[i].value)]);
      }
      var options = {
        chart: {
          // title: 'Sensor ' + jsonClean.type + ' data',
          // subtitle: 'if more than 100 then show last 100'
        },
        width: 600,
        height: 333,
        axes: {
          x: {
            0: {
              side: 'bottom'
            }
          }
        }
      };


      // Instantiate and draw our chart, passing in some options.
      var chart = new google.charts.Line(document.getElementById('temperature'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

</body>

</html>

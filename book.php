
<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="MainCtrl" ng-cloak>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Maanyag Pension House and Spa; Mandaue City, Cebu">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/png" href="img/fav.png"/>

  <title>Home - Maanyag Pension House and Spa</title>

  <!-- Bootstrap Core CSS -->
  <link href="dist/css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="dist/css/carousel.css" rel="stylesheet">
  <link href="dist/css/bootstrap-social.css" rel="stylesheet">
  <link href="dist/css/font-awesome.css" rel="stylesheet">
  <link href="dist/css/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700|Dancing+Script|Noto+Serif' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

      <body>
       <!-- Fixed navbar -->
       <nav class="navbar nav-eff navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <div class="logo-bg">
                <img class="logo" src="img/maanyagmainsmall.png" alt="Maanyag Pension House and Spa">
                <center><p class="sub-title">Pension House and Spa</p></center>
              </div>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

<!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-md-12">
        <b style="font-family: 'Dancing Script', cursive;font-size:30px;"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp; Book - {{selected_data.room_name}}</b>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="col-md-12">
          <a href="#" class="thumbnail" data-toggle="modal" data-target="#booking">
            <img src="{{selected_data.file_path}}" alt="{{selected_data.room_name}}"/>
          </a>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row" style="border-bottom: 1px solid gray;">
                <div class="col-md-6 col-sm-6">
                  <b style="font-family: 'Dancing Script', cursive;font-size:30px;">{{selected_data.room_name}}</b>     
                </div>
                <div class="col-md-6 col-sm-6">
                  <p class="pull-right" style="font-size:20px">Rate/Day <br /> <b>{{selected_data.room_rate | currency : '&#8369;'}}</b></p>     
                </div>
              </div>
              <b>Includes :</b>
              <table class="table table-hover table-condensed">
                <tr>
                  <td>No. of bed(s)</td>
                  <td>Aircon</td>
                  <td>Room Service</td>
                  <td>Comfort and Bath Room</td>
                </tr>
                <tr>
                  <td><label class="label label-default">{{selected_data.num_bed}}</label></td>
                  <td><span class="glyphicon glyphicon-{{selected_data.aircon == 1 ? 'ok' : 'remove'}}"></span></td>
                  <td><span class="glyphicon glyphicon-{{selected_data.room_serv == 1 ? 'ok' : 'remove'}}"></span></td>
                  <td><span class="glyphicon glyphicon-{{selected_data.cr_bath == 1 ? 'ok' : 'remove'}}"></span></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="col-md-12">
            <b style="font-family: 'Dancing Script', cursive; font-size: 25px;">Please Enter Your Information</b>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>From</label>
              <input type="date" class="form-control"></input>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>To</label>
              <input type="date" class="form-control"></input>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" placeholder="First Name" class="form-control"></input>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" placeholder="Last Name" class="form-control"></input>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" placeholder="Email Address" class="form-control"></input>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>Room Type</label>
                <select class="form-control" ng-model="room_name" ng-change="selectedRoom(room_name)">
                  <option ng-repeat="r in rooms">{{r.room_name}}</option>
                </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 pull-right">
            <button class="btn btn-info">Book</button>
            <button class="btn btn-warning">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#" class="btn btn-social-icon btn-facebook btn-xs">
        <span class="fa fa-facebook"></span>
      </a> 
      <a href="#" class="btn btn-social-icon btn-twitter btn-xs">
        <span class="fa fa-twitter"></span>
      </a> 
      / <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  maanyag.online@yahoo.com 
      <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <b>232-6220</b> | <b>232-3699</b> | <b>236-1505</b>
    </p>
    <p>&copy; Maanyag Pension House and Spa 2016</p>
  </footer>


  <!-- Modal for BOOKING -->
  <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <a href="#" class="thumbnail">
            <img src="{{selected_data.file_path}}" />
          </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.container -->

<!-- jQuery -->
<script src="dist/js/jquery-1.11.0.min.js"></script>
<script src="dist/js/script.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="dist/js/bootstrap.min.js"></script>

<!-- Angular -->
<script src="dist/js/angular.js"></script>
<script src="dist/js/angular-module.js"></script>
<script src="dist/js/Services/dataService.js"></script>
<script src="dist/js/Controllers/MainCtrl.js"></script>

</body>

</html>

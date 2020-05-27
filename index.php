<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
      <link rel="stylesheet" href="styling.css">
      <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet"> 
     <title>Distance Between cities</title>
  </head>
  <body>
  <div class="jumbotron">
          <div class="container-fluid">
              <h1>Distance between cities App.</h1>
              <p>Our app will help you calculate travelling distances.</p>
              <form class="form-horizontal">
                  <div class="form-group">
                      <label for="from" class="col-xs-2 control-label">From:</label>
                      <div class="col-xs-10">
                          <input type="text" id="from" placeholder="Origin" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="to" class="col-xs-2 control-label">To:</label>
                      <div class="col-xs-10">
                          <input type="text" id="to" placeholder="Destination" class="form-control">
                      </div>
                  </div>
              </form>
              
              <div class="col-xs-offset-2 col-xs-10">
              <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
              </div>
          </div>
          <div class="container-fluid">
              <div id="googleMap">
              
              </div>
              <div id="output">
              
              </div>
          </div>
      
      </div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwFWfBmSEw8khD1lMFU1jPV0qPFmXlnac&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  </body>
</html>
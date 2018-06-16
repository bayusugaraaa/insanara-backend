
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>insanara - backend</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
  </head>

  <body>

    <div class="absolute text-center">
      <img src="img/bukafest-logo.png" class="img40">
    </div>

    <main role="main" class="separate">
        
      <div class="container backwhite pad10">

        <form method="post" action="addimage.php" target="_self">

<!--          <div class="form-group">
            <label for="exampleFormControlInputID">ID</label>
            <input type="text" class="form-control" id="idImage" placeholder="ID">
          </div>-->

          <div class="form-group">
            <label for="exampleFormControlInputUsername">Image Name</label>
            <input type="text" class="form-control" id="nameImage" name="nameImage" placeholder="Image Name">
          </div>
            
          <div class="separate"></div>
          
          <div class="row">
              <div class="form-group col-6">
                    <button type="submit" name="submitImage" id="submitImage" class="btn btn-newred btn-lg btn-block">Save</button>
                </div>
              <div class="form-group col-6">
                    <button onclick="doBack()" class="btn btn-newred btn-lg btn-block">Cancel</button>
                </div>
          </div>
          
          
        </form>

      </div>

      <div class="separate"></div>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
            function doBack(){
                location.href="index-image.php";
            }
    </script>
  </body>
</html>

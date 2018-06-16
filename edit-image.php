<?php 
include "librari/koneksi.php";

$idImage = $_REQUEST['id'];

if ($idImage != ""){
    $sqlUpdate=mysql_query("SELECT * FROM image WHERE id = '$idImage'") or die("SQL ERROR".mysql_error());
    $data=mysql_fetch_array($sqlUpdate);
    $id = $data['id'];
    $nameImage = $data['nameImage'];
}
?>
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

        <form method="post" action="editImage.php" target="_self">

            <div class="form-group" style="display:none;">
            <label for="exampleFormControlInputID">ID</label>
            <input type="text" class="form-control" id="imageID" name="imageID"  placeholder="ID" value="<?php echo $id ?>">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInputUsername">Image Name</label>
            <input type="text" class="form-control" id="nameImage" name="nameImage" placeholder="Image Name" value="<?php echo $nameImage ?>">
          </div>
            
          <div class="separate"></div>

          <div class="form-group">
              <button type="submit" name="submitImage" id="submitImage" class="btn btn-newred btn-lg btn-block">Edit</button>
<!--            <a href="index.html"><button type="button" class="btn btn-newred btn-lg btn-block">Save</button></a>-->
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
  </body>
</html>

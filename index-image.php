<?php 
include "librari/koneksi.php";
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
        
        
        
        
      <div class="container">
          
          <div class="form-group">
    <!--              <button type="submit" name="submitImage" id="submitImage" class="btn btn-newred btn-lg btn-block">Edit</button>-->
                 <button onclick="goToAdd()" class="btn btn-addred btn-lg btn-block">Add Image</button>
       </div>
          
        <div class="table-responsive">
          <table class="table tablenopadtop backwhite">
            <thead class="thead-red">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Game Name</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
    //            $p = new Paging;
    //            $batas = 5;
    //            $posisi = $p->cariPosisi($batas);
                $no=0;
                $result = mysql_query("SELECT * FROM image WHERE rowstatus = 1 ORDER BY createDate DESC");
                if($result === FALSE) { 
                    die(mysql_error()); // TODO: better error handling
                }
                while($data = mysql_fetch_array($result)){

//               while($data = mysql_fetch_array($qlog)){
                $no++;
               ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['nameImage']; ?></td>
                  <td><?php echo $data['createDate']; ?></td>
                  <td><a href="edit-image.php?id=<?php echo $data['id']; ?>" class="glyphicon glyphicon-edit" aria-hidden="true"><img src="img/pencil.svg" class="img16"></a> | 
                      <a href="delete-image.php?id=<?php echo $data['id']; ?>" class="glyphicon glyphicon-trash" aria-hidden="true" onClick="return confirm('Apakah Anda yakin image ini dihapus?')"><img src="img/trash.svg" class="img16"> </a> | 
                      <a href="#" class="glyphicon glyphicon-trash" aria-hidden="true" onClick="doScanBarcode(<?php echo $data['id']; ?>)"><img src="img/trash.svg" class="img16"></td>
                </tr>
                <?php
                }
                ?>
            
<!--              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td> <a href="edit.php"><img src="img/pencil.svg" class="img16"></a> | <img src="img/trash.svg" class="img16"> </td>
              </tr>-->
            </tbody>
          </table>
        </div>
          

      </div>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function goToAdd(){
            location.href="add-image.php";
        }

        function doScanBarcode(id){
          alert("scan barcode"+id);
          var links = "https://api.qrserver.com/v1/create-qr-code/?data="+id+"&amp;size=300x300";
          window.open( links , '_blank' );
        }
    </script>
  </body>
</html>

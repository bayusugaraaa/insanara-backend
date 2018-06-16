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
          
        <div class="table-responsive">
          <table class="table tablenopadtop backwhite">
            <thead class="thead-red">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
               <!--  <th scope="col">Poin 1</th>
                <th scope="col">Poin 2</th>
                <th scope="col">Poin 3</th>
                <th scope="col">Poin 4</th> -->
                <th scope="col">Total Poin</th>
                <th scope="col">Sisa Poin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                $halaman = 10;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $no=0;
                $result = mysql_query("SELECT rsg.*, pnt.userPoint AS totalPoint FROM register rsg  INNER JOIN masterpoint pnt ON rsg.id = pnt.idUser WHERE rsg.rowstatus = 1 ORDER BY rsg.id ASC LIMIT 10");
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
                  <td><?php echo $data['userName']; ?></td>
                  <td><?php echo $data['fullName']; ?></td>
                  <td><?php echo $data['mobile']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['createDate']; ?></td>
                  <td><?php echo $data['totalPoint']; ?></td>
                  <td>0</td>
                  <td><a href="edit-image.php?id=<?php echo $data['id']; ?>" class="glyphicon glyphicon-edit" aria-hidden="true"><img src="img/pencil.svg" class="img16"></a> | 
                      <a href="delete-image.php?id=<?php echo $data['id']; ?>" class="glyphicon glyphicon-trash" aria-hidden="true" onClick="return confirm('Apakah Anda yakin image ini dihapus?')"><img src="img/trash.svg" class="img16"> </a></td>
                </tr>
                <?php
                }
                ?>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td> <a href="edit.php"><img src="img/pencil.svg" class="img16"></a> | <img src="img/trash.svg" class="img16"> </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td> <a href="edit.php"><img src="img/pencil.svg" class="img16"></a> | <img src="img/trash.svg" class="img16"> </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td> <a href="edit.php"><img src="img/pencil.svg" class="img16"></a> | <img src="img/trash.svg" class="img16"> </td>
              </tr> -->
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
  </body>
</html>

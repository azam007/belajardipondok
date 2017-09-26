<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=PATH_GLOBALS?>/assets/css/bootstrap.min.css">
  <script src="<?=PATH_GLOBALS?>/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?=PATH_GLOBALS?>/assets/js/bootstrap.min.js"></script>
</head>
<body>  

<div class="container">
  <h2>Data Nama</h2>
  <p><a href="<?=PATH_GLOBALS?>home/" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a></p>            
  <div class="row">
    <div class="col-md-12">
     <form action="" method="POST">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
     </form>       
    </div>
      
  </div>

      <?php
      if(isset($data)){
        foreach ($data['alert'] as $alert => $value) {
          echo '<div class="alert alert-'.$alert.'">'.$value.'</div>';
        }
      }  
      ?>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=PATH_GLOBALS?>assets/css/bootstrap.min.css">
  <script src="<?=PATH_GLOBALS?>assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?=PATH_GLOBALS?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Nama</h2>
  <p><a href="<?=PATH_GLOBALS?>home/tambah" class="btn btn-primary pull-right">Tambah Data</a></p>
  <?php
  if (isset($_SESSION['message'])) {
    foreach ($_SESSION['message'] as $key => $value) {
  ?>
  <div class="alert alert-<?=$key?>"><?=$value?></div>
  <?php
    }
    unset($_SESSION['message']);
  }
  ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['users'] as $data) :?>
      <tr>
        <td><?=$data['firstname']?></td>
        <td><?=$data['lastname']?></td>
        <td><?=$data['email']?>
          <div class="pull-right">
            <a href="<?=PATH_GLOBALS?>home/edit/<?=$data['id']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            <span style="color:#ddd">|</span>
            <a href="<?=PATH_GLOBALS?>home/delete/<?=$data['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
          </div>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Error 404</title>
    <link rel="stylesheet" href="<?=PATH_GLOBALS?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PATH_GLOBALS?>/assets/css/bootstrap-theme.min.css">
    <script src="<?=PATH_GLOBALS?>/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?=PATH_GLOBALS?>/assets/js/popper.min.js"></script>
    <script src="<?=PATH_GLOBALS?>/assets/js/bootstrap.min.js"></script>
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top:12px">
                <div class="panel panel-warning">
                    <div class="panel-heading">Error 404</div>
                    <div class="panel-body">Oops! The Page you requested <strong><u><?=$_SERVER['REQUEST_URI']?></u></strong> not found!</div>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>
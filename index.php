<?php 
require_once 'koneksi.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="UTF-8"> -->
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS PWL</title>
        <?php include_once 'include_css.php'; ?>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- HEADER -->
                    <?php include_once 'header.php'; ?>

                    <div class="row">
                        <div class="col-md-8 border-right">
                            <!-- MAIN -->
                            <?php include_once 'main.php'; ?>
                        </div>
                        <div class="col-md-4">
                            <!-- SIDEBAR -->
                            <?php include_once 'sidebar.php'; ?>
                        </div>
                    </div>
                    <div class="row">
                        <!-- FOOTER -->
                        <?php include_once 'footer.php'; ?>
                    </div>
            </div>
        </div>
    </div>

    <?php include_once 'include_js.php'; ?>
</body>
</html>
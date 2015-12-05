<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog-Senai</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container-fluid" style="width: 1024px;">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand active" href="index.php">Blog-Senai</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        require './include/menu.php';
                        if (isset($_GET['pagina'])) {
                            require "./pagina/{$_GET['pagina']}.php";
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>
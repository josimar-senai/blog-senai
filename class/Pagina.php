<?php

/**
 * Description of Pagina
 *
 * @author josimar_souza1
 */
abstract class Pagina {

    private $titulo;
    
    final public function __construct() {
        $this->configura();
        $this->renderiza();
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    final protected function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    abstract protected function conteudo();
    abstract protected function configura();
    
    protected function getMenu() {
        require './include/menu.php';
    }
    
    private function renderiza() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <title><?=  $this->getTitulo() ?></title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="css/bootstrap.css">
                <link rel="stylesheet" href="css/jquery-ui.min.css">
                <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
                <script src="js/jquery-1.11.3.min.js"></script>
                <script src="js/jquery-ui.min.js"></script>
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
                                $this->getMenu();
                                $this->conteudo();
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </body>
        </html>
        <?php
    }

}

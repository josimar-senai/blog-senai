<?php

class Tecnologias extends Pagina {

    protected function configura() {
        $this->setTitulo("Tecnologias");
    }

    protected function conteudo() {
        ?>



        <!-- Page Content -->
        <div class="container" style="margin-top: 10px;">

            <!-- Heading Row -->
            <div class="row">


                <div class="col-md-6">
                    <img class="img-responsive img-rounded" src="./css/images/tecnologia.jpg" alt=""/>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <h1>Tecnologias</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary btn-lg" href="#">Ler mais</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <hr>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-3">
                    <h3>Institutos de Inovação e Tecnologia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">Ler Mais</a>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3">
                    <h3>Soluções em Gestão</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">Ler Mais</a>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3">
                    <h3>Inovação</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">Ler Mais</a>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <?php
    }

}

<?php

/**
 * classe responsavel por mostrar o conteudo da pagina
 *
 * @author josimar_souza1
 */
//estanciar a superclasse pagina
class previsaotempo extends Pagina {

    //metodo abstrato obrigatorio
    //aki vai as configurações da pagina
    protected function configura() {
        //seta o titulo da pagina que aparece na aba do navegador
        $this->setTitulo("Previsão do Tempo");
    }

    //metodo abstrato obrigatorio
    //aki fica o conteudo da pagina
    protected function conteudo() {
        //o HTML puro que vai aparecer no corpo do documento
        ?>
        <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->

        <div class="blog-header">
            <h1 class="blog-title">Previsão do tempo</h1>
            <p class="lead blog-description">Confira a previsão do tempo nos principais sites</p>
        </div>



        <div class="row ">
            <div class="col-md-4 ">
                <p class="lead blog-description ">Tempo Agora</p>
                <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="200" src="http://www.tempoagora.com.br/ta-widgets?cidades=,RiodoSul-SC&amp;tipo=horizontal"></iframe>
            </div>

            <div class=" col-md-3">
                <p class="lead blog-descriptio"> CPTEC</p>
                <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=4388&w=h&c=767676&f=ffffff" width="300" height="300"></iframe>
                <noscript>Previs&atilde;o de <a href="http://www.cptec.inpe.br/cidades/tempo/4388">Rio do Sul/SC</a> oferecido por <a href="http://www.cptec.inpe.br">CPTEC/INPE</a>
                </noscript>
            </div>

            <div class=" col-md-3">
                <p class="lead blog-description ">ClimaTempo</p>
                <iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="300" height="200" src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=792&SKIN=preto"></iframe>
            </div>
        </div>
        <?php

    }

}


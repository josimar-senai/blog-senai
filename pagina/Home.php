<?php

/**
 * Description of Home
 *
 * @author josimar_souza1
 */
class Home extends Pagina {
    
    protected function configura() {
        $this->setTitulo("Pagina inicial do sistema");
    }
    
    protected function conteudo() {
        ?>
        <div class="container">
            <img src="http://www.cursosgratuitossenai.net/wp-content/uploads/2014/10/Senai-Mato-Grosso.jpg" width="932px"/>
        </div>

        <?php
    }

}

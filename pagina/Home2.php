<?php

/**
 * classe responsavel por mostrar o conteudo da pagina
 *
 * @author josimar_souza1
 */

//estanciar a superclasse pagina
class Home2 extends Pagina {
    //metodo abstrato obrigatorio
    //aki vai as configurações da pagina
    protected function configura() {
        //seta o titulo da pagina que aparece na aba do navegador
        $this->setTitulo("Página inicial do site");
    }
    
    //metodo abstrato obrigatorio
    //aki fica o conteudo da pagina
    protected function conteudo() {
        //o HTML puro que vai aparecer no corpo do documento
        ?>
        <h1>Calendário escolar - <?= date('Y') ?></h1>
        <br>
        <div id="calendario"></div>
        <script>
            $("#calendario").datepicker({
                inline: true,
                autoSize: true,
                onSelect: function(data) {
                    var oData = new Date(data);
                    alert('Hoje é dia: ' + oData.getDay() + ' - ' + data);
                }
            });
        </script>
        <br>
        <?php
    }

}

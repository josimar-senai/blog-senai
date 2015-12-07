<?php

/**
 * Description of Calendario
 *
 * @author josimar_souza1
 */
class Calendario extends Pagina {
    
    protected function configura() {
        $this->setTitulo("Calendario escolar " . date('Y'));
    }
    
    protected function conteudo() {
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

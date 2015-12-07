<?php

/**
 * classe responsavel por mostrar o conteudo da pagina
 *
 * @author fernanda_rosa
 */

//estanciar a superclasse pagina
class download extends Pagina {
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
        <form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Download</legend>

        <!-- File Button --> 
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Upload de Arquivos</label>
            <div class="col-md-4">
                <input id="filebutton" name="filebutton" class="input-file" type="file">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id">Baixar arquivo</label>
            <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success">Baixar PDF</button>
                <button id="button2id" name="button2id" class="btn btn-danger">Baixar .rar</button>
            </div>
        </div>

    </fieldset>
</form>

        <?php
    }

}


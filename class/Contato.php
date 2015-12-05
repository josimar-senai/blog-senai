
<form class="form-horizontal">
<fieldset>
<?php
    require_once '../index.php';
?>
<!-- Form Name -->
<legend>Entre em Contato</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome:</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Sobrenome:</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Sobrenome" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email:</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="example@dominio.com" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Mensagem:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Digite aqui sua Mensagem!</textarea>
  </div>
</div>

</fieldset>
</form>

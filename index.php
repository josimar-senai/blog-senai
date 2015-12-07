<?php
if (isset($_GET['pagina'])) {
    $classname = ucfirst($_GET['pagina']);
    require "./class/Pagina.php";
    require "./pagina/{$classname}.php";
    try {
        if(!class_exists($classname, false)){
            throw new Exception('O arquivo ' . $_GET['pagina'] . '.php' . ' Não é uma subclasse que herda da superclasse Pagina!');
        }
        new $classname();
    } catch (Exception $exc) {
        echo 'não foi possivel inicial a classe: ' . $classname, '<br>';
        echo $exc->getMessage();
    }
}else{
    header('location:index.php?pagina=home', null, 302);
    exit;
}

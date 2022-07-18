<?php
class vistas{
    static public function vistaPrincipal($nombreVista){
        $vista = VIEWS.$nombreVista.".php";
        if (!is_file($vista)) {
            die("La vista no existe");
        }
        require_once $vista;

    }
}

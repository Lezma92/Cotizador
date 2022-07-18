<?php 
    // para saber si estamos en un servidor local
    define("IS_LOCAL",in_array($_SERVER["REMOTE_ADDR"],["127.0.0.1","::1"]));
    define("URL", (IS_LOCAL ? "htpp://127.0.0.1/cotizador": "URL DE INTERNET"));

    //RUTAS DE CARPETA
    define("DS",DIRECTORY_SEPARATOR);
    define("ROOT",getcwd().DS);
    define("APP",ROOT."app".DS);
    define("ASSETS",ROOT."assets".DS);
    define("TEMPLATES",ROOT."template".DS);
    define("INCLUDES",TEMPLATES."includes".DS);
    define("MODULES",TEMPLATES."modules".DS);
    define("VIEWS",TEMPLATES."views".DS);
    define("UPLOADS",ROOT."uploads".DS);


    ///archivos para iniciar en headers

    define("CSS", URL."assets/css/");
    define("IMG", URL."assets/img/");
    define("JS", URL."assets/js/");
?>

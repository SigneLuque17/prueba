<?php
    if(isset($_POST["nombre"])){
        $archivo = fopen("usuarios/usuarios.json", "a+");
        fwrite($archivo, json_encode($_POST)."\n");
        fclose($archivo);
    }
    echo '{"codigo":"1"}';

?>
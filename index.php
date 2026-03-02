<?php
    // Array con los mensajes
    $mensajes = [
        "Hola Mundo",
        "Adiós Mundo",
        "Hola de nuevo",
        "Último saludo"
    ];

    // Bucle for para recorrer y mostrar cada mensaje
    for ($i = 0; $i < count($mensajes); $i++) {
        echo($mensajes[$i] . "<br>");
    }
?>

<?php

function conectar() {
    $cnn = new mysqli("127.0.0.1", "root", "", "data_contacto",3306);
    return $cnn;
}




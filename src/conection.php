<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "BaseDatosNomina"
) or die(mysqli_erro($mysqli));

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


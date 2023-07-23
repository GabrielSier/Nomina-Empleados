<?php
include('conection.php');
include('nomEmpleado.php');
        $host = "localhost";
        $dbname = 'BaseDatosNomina';
        $username = 'root';
        $password = '';

$name = $_POST['nombre'];
$hrJob = (int) $_POST['horas'];
$hrValue = (float) $_POST['valorHora'];
$nomEmpleado = new nomEmpleado($name, $hrJob, $hrValue);

$salarioBasico = $nomEmpleado->calcBasicSalary();
$subsidio = $nomEmpleado->calcSubsidy();
$retencionFunte = $nomEmpleado->wholdSource();
$seguroSocial = $nomEmpleado->sSecurity();
$horasExtras = $nomEmpleado->extHour();
$salarioNeto = $nomEmpleado->netIncome();

$sql = "INSERT INTO nominaEmpleado(nombre, hrsTrabajadas, valorHora, salBasico, subsidio, retFuente, horasExtras, salNeto, seguridadSocial) VALUES ('$name','$hrJob','$hrValue','$salarioBasico','$subsidio','$retencionFunte','$horasExtras','$salarioNeto', '$seguroSocial')";
$conn->query($sql);
header("Location: index.php");
$conn->close();
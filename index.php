<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('persona.php');
include_once('lavoro.php');
$persona = new Persona();
$persona2 = new Persona();
$persona3 = new Persona();
$lavoro = new Lavoro();
$wd = 11;
$wde = 10;
$a = 13;

$web_developer = ($wd * 6) * 5;
$web_designers = ($wde * 6) * 5;
$analista = ($a * 6) * 5;
$stipendio1 = $web_developer;
$stipendio2 = $web_designers;
$stipendio3 = $analista;

$persona->mansione ='web_developer';
$persona->nome ='mario';
$persona->cognome ='rossi';
$persona->stipendio = $stipendio1;
$persona->verificaStipendio();
$persona2->nome ='alberto';
$persona2->cognome ='bianchi';
$persona2->mansione ='web_designers';
$persona2->stipendio = $stipendio2;
$persona2->verificaStipendio();
$persona3->nome ='alessandro';
$persona3->cognome ='muti';
$persona3->mansione ='analista';
$persona3->stipendio = $stipendio3;
$persona3->verificaStipendio();

echo "<pre>";
var_dump($persona);
var_dump($persona2);
var_dump($persona3);
echo "</pre>";
?>

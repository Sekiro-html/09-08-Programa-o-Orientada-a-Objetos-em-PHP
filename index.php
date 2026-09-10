<?php
require_once "classes.php";

$planta1 = new Plantas("Jiboia", "Araceae", "Epipremnum aureum", "Perenne", "2 anos", 0.5, 3, 120, "minutos", 500, "ml");
$planta1->Cuidados(120, 500);
$planta1->checagem();
$planta1->crescer();
$planta1->CrescerFolhas();


$Elemento1 = new Elemento("Hélio", "He", 2, 4.0026, 18, 1, "Gasoso", 1);
$Elemento1->menosQuantidade(1);
$Elemento1->aumentarQuantidade(5);
$Elemento1->mostrarElemento();

$Bicicleta1 = new Bicicleta("Caloi", "Two Niner", "Preta", 0.0, 21, 1, 29);
$Bicicleta1->acelerar(50);
$Bicicleta1->frear(20);
$Bicicleta1->Trocardemarcha(5);

$Planeta1 = new Planeta("Marte", "Rochoso", -63.0, 3.71, 2, 227.9, 24.07);
$Planeta1->AumentarTemperatura(40);
$Planeta1->DiminuirTemperatura(15);
$Planeta1->AumentarTemperatura(60);
?>
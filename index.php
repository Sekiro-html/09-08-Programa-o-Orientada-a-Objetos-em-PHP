<?php
require_once "classes.php";

$planta1 = new Plantas("Jiboia", "Araceae", "Epipremnum aureum", "Perenne", 2, 0.5, 3, 120, "minutos", 500, "ml");
$planta1->Cuidados(120, 500);
$planta1->checagem();
$planta1->crescer();
$planta1->CrescerFolhas();

echo '<hr>';
$animal1 = new Animais("Oguri Cap", "Cavalo", "preto", 5, 300, "feno", 25,0,"g", 0, "ml", 0, 0);
$animal1->ReabastecerAlimentos(2000, 3000);
$animal1->comer(100);
$animal1->tomar_agua(50);
$animal1->GanhaPeso();

echo "<hr>";
$Elemento1 = new Elemento("Hélio", "He", 2, 4.0026, 18, 1, "Gasoso", 1);
$Elemento1->menosQuantidade(1);
$Elemento1->aumentarQuantidade(5);
$Elemento1->mostrarElemento();
echo "<hr>";

$Bicicleta1 = new Bicicleta("Caloi", "Two Niner", "Preta", 0.0, 21, 1, 29);
$Bicicleta1->acelerar(50);
$Bicicleta1->frear(20);
$Bicicleta1->Trocardemarcha(5);
echo "<hr>";

$Planeta1 = new Planeta("Marte", "Rochoso", -63.0, 3.71, 2, 227.9, 24.07);
$Planeta1->AumentarTemperatura(40);
$Planeta1->DiminuirTemperatura(15);
$Planeta1->AumentarTemperatura(60);
?>
<?php
require_once "classes.php";

$planta1 = new Plantas("Jiboia", "Araceae", "Epipremnum aureum", "Perenne", "2 anos", 0.5, 3, 120, "minutos", 500, "ml");
$planta1->Cuidados(120, 500);
$planta1->checagem();
$planta1->crescer();
$planta1->CrescerFolhas();
?>
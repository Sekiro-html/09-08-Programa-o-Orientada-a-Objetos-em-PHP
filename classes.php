<?php
class Plantas {
    public string $Nome;
    public string $especie;
    public string $Familia;
    public string $ciclo;
    public string $idade;
    public float $altura;
    public int $folhas;
    public float $temposol;
    public string $UnidadeSol;
    public float $agua;
    public string $UnidadeAgua;

    public function __construct(string $Nome, string $especie, string $Familia, string $ciclo, string $idade, string $altura, int $folhas, string $temposol, string $UnidadeSol ,string $agua, string $UnidadeAgua)
    {
        $this->Nome = $Nome;
        $this->Familia = $Familia;
        $this->especie = $especie;
        $this->ciclo = $ciclo;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->folhas = $folhas;
        $this->temposol = $temposol;
        $this->UnidadeSol = $UnidadeSol;
        $this->agua = $agua;
        $this->UnidadeAgua = $UnidadeAgua;
    }

    public function Cuidados($tempomin, $aguaml){ 
        if ($tempomin >= 60) {
            $tempomin = $tempomin / 60;
            $this->temposol = $tempomin;
            $this->UnidadeSol = "horas";
            echo "A $this->Nome ficou $this->temposol horas tomando sol <br>";
        } else {
            $this->temposol = $tempomin;
            $this->UnidadeSol = "minutos";
            echo "A $this->Nome ficou $this->temposol minutos tomando sol <br>";
        }

        if ($aguaml >= 1000) {
            $aguaml = $aguaml / 1000;
            $this->agua = $aguaml;
            $this->UnidadeAgua = "L";
            echo "A $this->Nome recebeu $this->agua L de água <br>";
        } else {
            $this->agua = $aguaml;
            $this->UnidadeAgua = "ml";
            echo "A $this->Nome recebeu $this->agua ml de água <br>";
        }
    }

    public function checagem() {
        echo "A planta $this->Nome tem $this->temposol $this->UnidadeSol de sol e $this->agua $this->UnidadeAgua de água absorvidos pela planta<br>";
    }

    public function crescer() {
        if($this->UnidadeSol == "horas"){
            $this->altura = 6 * $this->temposol;
        } else {
            $this->altura = $this->temposol / 10;
        }
        if ($this->UnidadeAgua == "L") {
            $this->altura = 1 * $this->temposol;
        } else {
            $this->altura = $this->agua / 10;
        }
        echo "A planta cresceu para $this->altura cm<br>";
        $this->agua = 0;
        $this->temposol = 0;
        $this->UnidadeAgua = "ml";
        $this->UnidadeSol = "minutos";
    }

    public function CrescerFolhas() {
        if($this->UnidadeSol == "horas"){
            $this->folhas = 12 * $this->temposol;
        } else {
            $this->altura = $this->temposol / 5;
        }
        if ($this->UnidadeAgua == "L") {
            $this->altura = 12 * $this->temposol;
        } else {
            $this->altura = $this->agua / 5;
        }
        echo "A planta está com $this->folhas folhas.<br>";
        $this->agua = 0;
        $this->temposol = 0;
        $this->UnidadeAgua = "ml";
        $this->UnidadeSol = "minutos";
    }
}

class Animais {
    public string $nome;
}
?>
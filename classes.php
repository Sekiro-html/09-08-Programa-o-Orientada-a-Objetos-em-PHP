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

class Elemento {
    public string $nome;
    public string $simbolo;
    public int $numeroAtomico;
    public float $massaAtomica;
    public string $grupo;
    public string $periodo;
    public string $estadoFisico;
    public int $quantidade;

    public function __construct(string $nome, string $simbolo, int $numeroAtomico, float $massaAtomica, string $grupo, string $periodo, string $estadoFisico, int $quantidade)
    {
        $this->nome = $nome;
        $this->simbolo = $simbolo;
        $this->numeroAtomico = $numeroAtomico;
        $this->massaAtomica = $massaAtomica;
        $this->grupo = $grupo;
        $this->periodo = $periodo;
        $this->estadoFisico = $estadoFisico;
        $this->quantidade = $quantidade;
    }

    public function aumentarQuantidade($maisquantidade){
        $this->quantidade = $this->quantidade + $maisquantidade;    
        echo "Quantidade aumentada para o exercicio para $this->quantidade.<br>";
    }

    public function menosQuantidade($menosquantidade){
        $this->quantidade = $this->quantidade + $menosquantidade;    
        echo "Quantidade aumentada do elemento $this->nome para o exercicio para $this->quantidade.<br>";
    }

    public function mostrarElemento() {
        echo "<ul?>";
            echo "<li>$this->nome</li>";
            echo "<li>$this->simbolo</li>";
            echo "<li>$this->numeroAtomico</li>";
            echo "<li>$this->massaAtomica</li>";
            echo "<li>$this->grupo</li>";
            echo "<li>$this->periodo</li>";
            echo "<li>$this->estadoFisico</li>";
        echo "</ul> <br>";
    }
}

class Bicicleta {
    public string $marca;
    public string $modelo;
    public string $cor;
    public float $velocidade;
    public int $marchas;
    public int $marchaAtual;
    public int $roda;

    public function __construct(string $marca, string $modelo, string $cor, float $velocidade, int $marchas, int $marchaAtual, int $roda)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->velocidade = $velocidade;
        $this->marchas = $marchas;
        $this->marchaAtual = $marchaAtual;
        $this->roda = $roda;
    }

    public function acelerar($aumento) {
        $this->velocidade = $this->velocidade + $aumento;
        echo "Você aumento a velocidade para $this->velocidade km/h<br>";
    }

    public function frear($diminuir){
        $this->velocidade = $this->velocidade - $diminuir;
        echo "Você diminuiu a velocidade para $this->velocidade km/h<br>";
    }

    public function Trocardemarcha($marcha){
        $this->marchaAtual = $marcha;
        echo "Marcha tocada para $this->marchaAtual";
    }
}

class Planeta {
    public string $nome;
    public string $tipo;
    public float $temperatura;
    public float $gravidade;
    public int $luas;
    public float $distanciaSol;
    public float $velocidade;

    public function __construct(string $nome, string $tipo, float $temperatura, float $gravidade, int $luas, float $distanciaSol, float $velocidade)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->temperatura = $temperatura;
        $this->gravidade = $gravidade;
        $this->luas = $luas;
        $this->distanciaSol = $distanciaSol;
        $this->velocidade = $velocidade;
    }

    public function AumentarTemperatura($graus){
        $this->temperatura = $this->temperatura + $graus;
        echo "Temperatura do planeta foi aumentada para $this->temperatura<br>";
    }

    public function DiminuirTemperatura($graus){
        $this->temperatura = $this->temperatura - $graus;
        echo "Temperatura do planeta foi aumentada para $this->temperatura<br>";
    }

    public function alterarVelocidade($velocidade) {
        $this->velocidade = $velocidade;
        echo "A velocidade do planeta foi alterada para $this->velocidade<br>";
    }
}
?>
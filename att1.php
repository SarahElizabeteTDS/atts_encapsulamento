<?php

class Carros
{
    //atributos
    private $modelo;
    private $marca;
    private $anoFab;
    private $veloMax;

    //gets e sets
    
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFab()
    {
        return $this->anoFab;
    }

    public function setAnoFab($anoFab): self
    {
        $this->anoFab = $anoFab;

        return $this;
    }

    public function getVeloMax()
    {
        return $this->veloMax;
    }

    public function setVeloMax($veloMax): self
    {
        $this->veloMax = $veloMax;

        return $this;
    }
}

//programa principal

function pedirDados($var)
{
    $var->setModelo(readline("Informe o modelo do veículo: \n"));
    $var->setMarca(readline("Informe a marca do veículo: \n"));
    $var->setAnoFab(readline("Informe o ano de fabricacao do veículo: \n"));
    $var->setVeloMax(readline("Informe a velocidade máxima do veículo: \n\n"));
}

function dadosRapido($var)
{
    print "O carro mais rápido é: ". $var->getModelo() . "-" . $var->getMarca() . ", fabricado em ". $var->getAnoFab() .", com velocidade máxima de " . $var->getVeloMax() . "km/h.\n";
}

function dadosLento($var)
{
    print "O carro mais lento é: ". $var->getModelo() . "-" . $var->getMarca() . ", fabricado em ". $var->getAnoFab() .", com velocidade máxima de " . $var->getVeloMax() . "km/h.\n"; 
}

$carro0 = new Carros;
pedirDados($carro0);

$carro1 = new Carros;
pedirDados($carro1);

$carro2 = new Carros;
pedirDados($carro2);

if ($carro0->getVeloMax() > $carro1->getVeloMax() && $carro0->getVeloMax() > $carro2->getVeloMax()) 
{
    dadosRapido($carros0);
    if ($carro1->getVeloMax() > $carro2->getVeloMax()) 
    {
        dadosLento($carro2);
    }
    else
    {
        dadosLento($carro1);
    }
}
elseif($carro1->getVeloMax() > $carro0->getVeloMax() && $carro1->getVeloMax() > $carro2->getVeloMax())
{
    dadosRapido($carro1);
    if ($carro0->getVeloMax() > $carro2->getVeloMax()) 
    {
        dadosLento($carro2);
    }
    else
    {
        dadosLento($carro0);
    }
}
else
{
    dadosRapido($carro2);
    if ($carro0->getVeloMax() > $carro1->getVeloMax()) 
    {
        dadosLento($carro1);
    }
    else
    {
        dadosLento($carro0);
    }
}

<?php

class Calculadora
{
    //atributos classe
    private $numA;
    private $numB;

    //metodos
    public function soma($numA, $numB)
    {
        $soma = $numA + $numB;
        return $soma;
    }

    public function subtracao($numA, $numB)
    {
        $subtracao = $numA - $numB;
        return $subtracao;
    }

    public function multiplicacao($numA, $numB)
    {
        $multiplicacao = $numA * $numB;
        return $multiplicacao;
    }

    public function divisao($numA, $numB)
    {
        $divisao = $numA / $numB;
        return $divisao;
    }

    public function resto($numA, $numB)
    {
        $resto = $numA % $numB;
        return $resto;
    }

    //gets e sets

    public function getNumA()
    {
        return $this->numA;
    }

    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB()
    {
        return $this->numB;
    }

    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

//programa principal
$calculadora = new Calculadora;
$calculadora->setNumA(readline("Insira o primeiro número: \n"));
$calculadora->setNumB(readline("Insira o segundo número: \n"));

print "Soma: " . $calculadora->soma($calculadora->getNumA(), $calculadora->getNumB()) . "\nSubtração: " . $calculadora->subtracao($calculadora->getNumA(), $calculadora->getNumB()) . "\nMultiplicação: " . $calculadora->multiplicacao($calculadora->getNumA(), $calculadora->getNumB()) . "\nDivisão: " . $calculadora->divisao($calculadora->getNumA(), $calculadora->getNumB()) . "\nResto: " . $calculadora->resto($calculadora->getNumA(), $calculadora->getNumB());

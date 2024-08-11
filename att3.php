<?php

class Veiculos
{
    //atributos 
    private $capacidade;
    private $passagensVendidas;

    //metodos
    public function capacidadeVeiculo()
    {
        return $this->capacidade - $this->passagensVendidas;
    }
    public function venderPassagem($quantidade):bool
    {
        if ($this->capacidadeVeiculo() > $quantidade) 
        {
            return true;
        }else{
            return false;
        }
    }

    //gets e sets

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

//programa principal

$veiculo = new Veiculos;
$veiculo->setCapacidade(readline("Qual a capacidade do carro? \n"));
$quantidade = readline("Quantas passagens você deseja comprar?\n");
if ($quantidade <= 0) 
{
    die;
}else{
    if ($veiculo->venderPassagem($quantidade)) 
    {
        print "Você comprou sua(s) passagem(ns) com sucesso!";
    }else{
        print "O veículo não tem capacidade suficiente";
    }
}

<?php

require_once("Cliente.php");


class ClientePF extends Cliente
{


    private String $nomeCompleto;
    private string $cpf;



    public function getnome()
    {
        return $this->nomeCompleto;
    }


    public function getNroDoc()
    {
        return $this->cpf;
    }

    public function getTipo()
    {
        return "Pessoa Física";
    }


    
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function setNomeCompleto( $nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }
}

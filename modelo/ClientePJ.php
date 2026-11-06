<?php

require_once("Cliente.php");

class  ClientePJ extends Cliente{

private string $razaoSocial;
private string $cnpj;





    public function getnome()
    {
        return $this->razaoSocial;
    }


    public function getNroDoc()
    {
        return $this->cnpj;
    }

    public function getTipo()
    {
        return "pessoa juridica";
    }
    

public function getRazaoSocial()
{
return $this->razaoSocial;
}

public function setRazaoSocial( $razaoSocial)
{
$this->razaoSocial = $razaoSocial;

return $this;
}

public function getCnpj()
{
return $this->cnpj;
}

public function setCnpj( $cnpj)
{
$this->cnpj = $cnpj;

return $this;
}
}
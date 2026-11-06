<?php

abstract class cliente{

protected int $id;
protected string $nome;
protected string $email;


public abstract function getnome();
public abstract function getNroDoc();
public abstract function getTipo();




public function getId()
{
return $this->id;
}

public function setId( $id)
{
$this->id = $id;

return $this;
}

public function getNome()
{
return $this->nome;
}

public function setNome( $nome)
{
$this->nome = $nome;

return $this;
}

public function getEmail()
{
return $this->email;
}

public function setEmail( $email)
{
$this->email = $email;

return $this;
}
}
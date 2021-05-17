<?php 

class User{
  private $nome;
  private $cognome;
  private $metodo_pagamento;

  public function __construct($nome, $cognome, $metodo_pagamento){
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this-> metodo_pagamento = $metodo_pagamento;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNome(){
    return $this->nome;
  }

  public function setCognome($cognome){
    $this->cognome = $cognome;
  }

  public function getCognome(){
    return $this->cognome;
  }

  public function setMetodoPagamento($metodo_pagamento){
    $this->metodo_pagamento = $metodo_pagamento;
  }
  
  public function getMetodoPagamento(){
    return $this->metodo_pagamento;
  }

}

$Gino = new User('Gino', 'Pilotino', 'Mastercard');

var_dump($Gino);

?>
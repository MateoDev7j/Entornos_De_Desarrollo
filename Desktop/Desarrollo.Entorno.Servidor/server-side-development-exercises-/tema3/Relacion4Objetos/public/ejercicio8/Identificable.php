<?php
trait Identificable{
    
    public function generarId(){
        $numero = random_int(1000,9999);
        return $this->getPrefijoId() . $numero;
    }
    //Cada clase tiene que definir su propio metodo getPrefijo
    abstract protected function getPrefijoId(): string;
    
}
?>
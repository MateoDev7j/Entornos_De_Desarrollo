<?php
class Carta{
    const array PALOS=["ESPADAS","OROS","COPAS","BASTOS"];
    const array VALORES=[
        1=>'as',2=>'dos',3=>'tres',4=>'cuatro',5=>'cinco'
        ,6=>'seis',7=>'siete',8=>'ocho',9=>'nueve',10=>'sota'
        ,11=>'caballo',12=>'rey'
    ];

    public function __construct(private string $valor,
                                private string $palo)
    {
        
        //throw new Exception('');
        
    }
    public static function verificarPalo(string $palo):bool{
        $palo=strtoupper($palo);
        return true;
    }
    public static function verificarValor($valor){
        foreach(VALORES as $valor){
            
        }
    }
}
//function array_key_exit
?>
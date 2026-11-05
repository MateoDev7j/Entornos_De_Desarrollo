<?php
require_once 'Identificable';
class Usuario {
    use Identificable;
    private string $prefijoId;
    public function __construct(string $prefijoId){
        $this->prefijoId=$prefijoId;
    }
    
    protected function getPrefijoId(): string{
        return 'USR';
    }

}

?>
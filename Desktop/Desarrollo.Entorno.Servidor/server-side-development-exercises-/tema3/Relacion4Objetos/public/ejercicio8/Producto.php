<?php
require_once 'Identificable';
class Producto {
    use Identificable;
    private string $prefijoId;
    public function __construct(string $prefijoId){
        $this->prefijoId=$prefijoId;
    }
    #[Override]
    protected function getPrefijoId(): string{
            return 'PRD';
    }
}
<?php
declare(strict_types=1);
namespace Models;
class Producto{
    
    public function __construct(
        private string $id, private string $nombre, 
        private int $precio, private int $stock
        ){}
        const float IVA = 0.21;
        /**
         * Get the value of id
         */ 
        public function getId():string
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre():string
        {
                return $this->nombre;
        }
        /**
         * Get the value of precio
         */ 
        public function getPrecio():int 
        {
                return $this->precio;
        }
        /**
         * Get the value of stock
         */ 
        public function getStock():int
        {
                return $this->stock;
        }
        public function getPrecioConIva(): float{
            return $this->precio*IVA;
        }


}
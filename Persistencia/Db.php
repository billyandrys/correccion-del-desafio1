<?php

namespace Persistencia;

class Db
{
    private $_manejador;
    
    public function __construct( ManejadorDbInterface $manejador)
    {
        $this->_manejador = $manejador;
    }
    
    
    public function getData()
    {
        
        $this->_manejador->connect();
        
        $data = $this->_manejador->getData($sql);
        
        $this->_manejador->disconect();
        
    }
            
    
}

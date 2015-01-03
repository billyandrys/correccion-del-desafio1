<?php
namespace Persistencia;

interface ManejadorDbInterface
{
    public function connect();
    
    public function disconect();
    
    public function getData();
    
}


<?php

namespace Persistencia;

const USER = 'ROOT';

const PASS = "";

const BASE = 'surforce';

const SERVIDOR = 'localhost';

abstract class Fachada
{
    public static function getUsuario()
    {
        return Usuario::loadAll();        
    }
    
    
}
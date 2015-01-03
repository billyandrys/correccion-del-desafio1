<?php
namespace Persistencia;

class Usuario implements PersistenciaInterface
{
    public static function loadAll()
    {
        $db = new Db(new MySQL());
        
        $data = $db->getData('SELECT * FROM  usuario');
        
        return $data;
    }
    
}
    
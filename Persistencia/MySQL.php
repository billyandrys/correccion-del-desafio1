<?php
namespace Persistencia;

class MySQL implements ManejadorDbInterface
{
    
    private $_conn;
    
    public function connect()
    {
        $this->_conn = mysql_connect(\Persistencia\SERVIDOR,
                                      \Persistencia\USER,
                                       \Persistencia\PASS);
        
        
        if(!$this->_conn){
            throw new Exception("ERROR DE CONEXION");
        }
        
        $db_selected = mysql_select_db(\Persistencia\BASE, $this->_conn);
        
        if (!$db_selected){
            throw new \Exception("Error al intentar acceder" . \Persistencia\BASE );
        }
        
        
    }
    
    
   public function disconect()
   {
       mysql_close($this->_conn);
   }
        
}
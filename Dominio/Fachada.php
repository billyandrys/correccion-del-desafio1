<?php

namespace Dominio;

use \Persistencia\Fachada as Persistencia;

abstract class Fachada
{
    public static function getUsauarios()
    {
      $usuarios = Persistencia::getUsuarios();
      
      $ret = array();
      
      foreach ($usuarios as $usuario){
          $ret[] =  new Usuario($usuarios['id'], $usuarios['nombre']);
      }
      
      return $ret;
    }
}
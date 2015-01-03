<?php
namespace Presentacion;
use \Dominio\Fachada as Dominio;
use \Tool\Fachada as Tool;

abstract class Fachada
{
    private static function _getHeader()
    {
        return "<!DOCTYPE HTML>
            <html>
                <head>
                    <meta charset=\"UTF-8\">
                    <title>TEST</title>
                </head>
                <body>";
    }
    
    
    private static function coleccion2lista(array $arr)
    {
        $ret = '<UL>';
        foreach ($arr as $item) {
            $ret .= '<li>' . $item . '</li>';
        }
        $ret .= '</UL>';
        return $ret;
    }
    
    public static function listadoUsuarios()
    {
        $ret = self::_getHeader();
        
        try{
            $usuario = Dominio::getUsuario();
            $ret .= self::coleccion2lista($usuarios);
            
        } catch(Exception $e) {
            
            $ret .= 'Error al intetar mostrar el listado de usuarios';
            Tool ::errorLog($ret);
        }
        
        $ret .= self::_getFooter();
        echo $ret;
    }
    
    
    
    private static function _getFooter()
    {
        return  "</body></html>";
    }
}
<?php 
namespace Tool;

const FILE_LOG = 'error.log';

abstract class Fachada
{
    public static function errorLog($msg)
    {
        Log::errorLog($msg);
    }
}
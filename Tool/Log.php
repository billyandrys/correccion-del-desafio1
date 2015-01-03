<?php
namespace Tool;
abstract class Log
{
    public static function errorLog($smg)
    {
        file_put_contents(\Tool\FILE_LOG, $smg, FILE_APPEND | LOCK_EX);
    }
}
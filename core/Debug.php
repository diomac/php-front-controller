<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 12:50
 */

class Debug
{
    public static function d($any): void
    {
        echo '<br><pre>';
        print_r($any);
        echo '</pre>';
    }
    public static function dd($any): void
    {
        self::d($any);
        exit;
    }
}

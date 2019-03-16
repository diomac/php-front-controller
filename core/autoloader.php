<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 12:35
 */

define(
    'ROOT_CLASS',
    serialize(
        [
            'AppConfig' => 'config/',
            'SystemConfig' => 'config/',
            'Auth' => 'core/',
            'Curl' => 'core/',
            'Debug' => 'core/',
            'System' => 'core/'
        ]
    )
);

/**
 * @param string $className
 */
function autoload(string $className): void
{
    $root_class = unserialize(ROOT_CLASS);
    $path = str_replace(['\\'], DIRECTORY_SEPARATOR, $className);

    if (isset($root_class[$className])) {
        $file = ROOT_DIR . $root_class[$className] . $path . '.php';
    } else {
        $sysConfig = SystemConfig::sysConfig();
        $projectName = $sysConfig->getProjectName();
        $path = str_replace($projectName . '/', '', $path);
        $file = ROOT_DIR . $path . '.php';
    }

    if (file_exists($file)) {
        include $file;
    }
}

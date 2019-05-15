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
            'AppConfig' => 'core/config/',
            'SystemConfig' => 'config/',
            'Auth' => 'core/authentication',
            'Curl' => 'core/',
            'Debug' => 'core/',
            'Server' => 'core/'
        ]
    )
);

/**
 * @param string $className
 */
function autoload(string $className): void
{
    $sysConfig = SystemConfig::sysConfig();
    $projectName = $sysConfig->getProjectName();

    $len = strlen($projectName);
    if (strncmp($projectName, $className, $len) !== 0) {
        return;
    }

    $root_class = unserialize(ROOT_CLASS);
    $path = str_replace(['\\'], DIRECTORY_SEPARATOR, $className);

    if (isset($root_class[$className])) {
        $file = ROOT_DIR . $root_class[$className] . $path . '.php';
    } else {
        $path = str_replace($projectName . '/', '', $path);
        $file = ROOT_DIR . $path . '.php';
    }

    if (file_exists($file)) {
        /** @noinspection PhpIncludeInspection */
        require $file;
    }
}

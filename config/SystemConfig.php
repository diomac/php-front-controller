<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 13:34
 */

class SystemConfig extends AppConfig
{
    const PROJECT_NAME = 'FrontController';

    /**
     * @var string $projectName
     */
    private $projectName;

    /**
     * SystemConfig constructor.
     */
    public function __construct()
    {
        $this->projectName = self::PROJECT_NAME;
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName(string $projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @description Returns a configuration for initialize a specific application part
     * @param string $environment
     * @return AppConfig
     */
    public static function config(string $environment = null): AppConfig
    {
        $config = new SystemConfig();
        return $config;
    }

    /**
     * @return SystemConfig
     */
    public static function sysConfig(): SystemConfig
    {
        $config = new SystemConfig();
        return $config;
    }
}

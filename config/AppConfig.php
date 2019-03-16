<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 12:23
 */

abstract class AppConfig
{
    /**
     * @var string $environment
     */
    protected $environment;

    /**
     * @description Returns a configuration for initialize a specific application part
     * @param string $environment
     * @return AppConfig
     */
    public abstract static function config(string $environment): AppConfig;

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment = null): void
    {
        $this->environment = $environment;
    }
}

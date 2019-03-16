<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado - https://github.com/diomac
 * Date: 02/03/2019
 * Time: 13:00
 */

namespace FrontController\config;

use AppConfig;

class ExampleConfig extends AppConfig
{
    const DEV_SERVER = 'dev-server';
    const PROD_SERVER = 'prod-server';

    /**
     * @var string $server
     */
    private $server;
    /**
     * @var string $user
     */
    private $user;
    /**
     * @var string $password
     */
    private $password;
    /**
     * @var string $schema
     */
    private $schema;

    /**
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * @param string $server
     */
    public function setServer(string $server): void
    {
        $this->server = $server;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }

    /**
     * @param string $schema
     */
    public function setSchema(string $schema): void
    {
        $this->schema = $schema;
    }

    /**
     * @description Returns a configuration for initialize a specific application part
     * @param string $environment
     * @return AppConfig
     * @throws \Exception
     */
    public static function config(string $environment): AppConfig
    {
        $config = new ExampleConfig();
        $config->setEnvironment($environment);

        switch ($environment) {
            case 'Dev':
                $config->setServer(self::DEV_SERVER);
                $config->setUser('front-controller');
                $config->setPassword('123456');
                $config->setSchema('front-controller-db');
                break;
            case 'Prod':
                $config->setServer(self::PROD_SERVER);
                $config->setUser('front-controller');
                $config->setPassword('123456');
                $config->setSchema('front-controller-db');
                break;
            default:
                throw new \Exception('Environment not configured.');
        }

        return $config;
    }
}

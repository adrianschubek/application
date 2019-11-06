<?php
/**
 * Copyright (c) 2019. Adrian Schubek.
 * https://framework.adriansoftware.de
 */

namespace adrianschubek\Core;

use Psr\Container\ContainerInterface;

class Application implements ApplicationInterface
{
    /**
     * DI Container
     * @var ContainerInterface
     */
    protected static $container;

    public static function getContainer()
    {
        return self::$container;
    }

    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }

    public function send($response = null)
    {
        if ($response) { // Custom response returned
            return $response->send();
        }
        Response::send();
    }
}
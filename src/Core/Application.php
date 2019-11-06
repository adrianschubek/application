<?php
/**
 * Copyright (c) 2019 Adrian Schubek
 * https://adriansoftware.de
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

}
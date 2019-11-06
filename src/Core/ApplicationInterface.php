<?php
/**
 * Copyright (c) 2019 Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Core;

use Psr\Container\ContainerInterface;

interface ApplicationInterface
{
    static function getContainer();

    static function setContainer(ContainerInterface $container);
}
<?php
/**
 * Copyright (c) 2019 Adrian Schubek
 * https://adriansoftware.de
 */

namespace Framework\Core;


use Framework\Http\ResponseInterface;
use Psr\Container\ContainerInterface;

interface ApplicationInterface
{
    static function getContainer();

    static function setContainer(ContainerInterface $container);

    function send($response);
}
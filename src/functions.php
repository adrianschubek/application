<?php
/**
 * Copyright (c) 2019 Adrian Schubek
 * https://adriansoftware.de
 */

use adrianschubek\Core\Application;

if (!function_exists("app")) {
    function app(string $name = null)
    {
        if ($name === null) {
            return Application::getContainer();
        }
        return Application::getContainer()->get($name);
    }
}


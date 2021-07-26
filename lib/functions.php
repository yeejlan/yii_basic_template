<?php

use Illuminate\Container\Container;

function env($varname, $defaultValue = '') : string
{
    if(isset($_ENV[$varname])) {
        return $_ENV[$varname];
    }
    return $defaultValue;
}

function envBool($varname, $defaultValue = false) : bool
{
    if(isset($_ENV[$varname]) && strtolower($_ENV[$varname]) == 'true') {
        return true;
    }
    return $defaultValue;
}

function envInt($varname, $defaultValue = 0) : int
{
    if(isset($_ENV[$varname])) {
        return (int)$_ENV[$varname];
    }
    return $defaultValue;
}

function appEnv() : string
{
    return env('app_env');
}

function isDev() : bool
{
    return env('app_env') === 'dev';
}

function isDebug() : bool
{
    return envBool('app_debug');
}

function container() : Container {
    return Container::getInstance();
}
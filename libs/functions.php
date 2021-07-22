<?php

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

function isConsole() : bool
{
    if(defined('APP_RUN_IN_CONSOLE') && APP_RUN_IN_CONSOLE === true) {
        return true;
    }
    return false;
}

function isWeb() : bool
{
    if(defined('APP_RUN_IN_WEB') && APP_RUN_IN_WEB === true) {
        return true;
    }
    return false;
}


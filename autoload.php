<?php

/**
 * File Autoload
 * 
 * PHP version 7.4.5
 * 
 * @category SecuCli
 * @package  SecuCli
 * @author   Christian Shungu <christianshungu@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/silex100
 * @version: 1
 * @date     10/10/2020
 * @file     autoload.php
 */

spl_autoload_register(function ($class) {
    $class_path = str_replace('SecuCli\\', ' ', $class);
    $class_path = trim($class_path);
    $path       = SECU_CLI_ROOT.'/src/'.$class_path.'.php';
    if (!file_exists($path)) {
        trigger_error('Le chemin de la Classe '.$class_path.' est Inexistant', E_USER_ERROR);
    }
    include_once $path;
});

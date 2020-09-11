
<?php

/**
 * File
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
 * @file     functions.php
 */
use SecuCli\Service\Secu;
/**
 * Methode l()
 * 
 * @return void
 */
function l()
{
    printf("\040\040Entrez votre  numéro de sécurite sociale : ");
    fscanf(STDIN, "%s", $num_securite);
    fflush(STDIN);
    if (strlen($num_securite) == 15) {
        $securite = $num_securite ?? "";
        $secu = new Secu($securite);
        $secu->getInfo();

        printf("\tVoulais-vous  connaitre  la  clé de sécurité  [y/n]  : ");
        fscanf(STDIN, "%s", $question);
        if ($question =="y") {
            echo "\tClé secret est : ".$secu->getCle().PHP_EOL;
        }
    } else {
        echo "Le numéro saisie n'exist pas";
    }
}
/**
 * Function isCli
 * 
 * @return bool
 */
function isCli() {
    return (PHP_SAPI === 'cli') ?? false; 
}
/**
 * Echo
 * 
 * @return void
 */
function e()
{
    echo "C'est un programe qui s'execute sur console";
}
/**
 * Boootsrap
 * 
 * @return void
 */
function bootstrap()
{
    if (!isCli()) {
        e();
    } else {
        l();
    }
}
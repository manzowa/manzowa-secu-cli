@echo off
chcp 65001> nul
echo.
:: DEBUT APPLICATION
mode con cols=75 lines=25
color 0A
setlocal 
title APPLICATION SECU_CLI
cls
echo   ╔══════════════════════════════════════════════════════════════════════╗
echo   ║           Information sur le numéro de sécurite social               ║
echo   ╚══════════════════════════════════════════════════════════════════════╝
echo.                          
php app.php -f
timeout /T -1
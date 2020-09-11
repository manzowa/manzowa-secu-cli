#! /bin/bash
@echo off
chcp 65001> nul
echo.
:: DEBUT APPLICATION
mode con cols=75 lines=25
printf `\033[2J`
clear
echo   ╔══════════════════════════════════════════════════════════════════════╗
echo   ║           Information sur le numéro de sécurite social               ║
echo   ╚══════════════════════════════════════════════════════════════════════╝
echo.                          
php app.php -f
timeout /T -1
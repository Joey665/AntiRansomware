@echo off
title AntiRansomware
echo AntiRansomware
echo created by Joseph bright
:start
echo enter your file name
set /p name=
echo the name you have entered of file is %name%
if EXIST %name% goto infected
if NOT EXIST %name% goto clean
cd D:
:infected
echo WARNING RANSOMWARE DETECTED !!!
DEL %name%
pause
goto start
:clean
echo Sytem Secure!!!
pause
exit
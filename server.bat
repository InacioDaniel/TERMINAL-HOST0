@echo off
cls
color 0a
start http://127.0.0.2:5050
Echo Servidor PHP iniciado!
C:\wamp64\bin\php\php8.2.18\php -S 127.0.0.2:5050 
color 04
echo Conexao terminada
pause > nul
echo ....
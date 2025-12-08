@echo off
REM Скрипт автоматического деплоя (обертка для PowerShell)
REM Использование: deploy.bat [комментарий] [ветка]

setlocal

set COMMIT_MSG=%1
if "%COMMIT_MSG%"=="" set COMMIT_MSG=Auto deploy

set BRANCH=%2
if "%BRANCH%"=="" set BRANCH=bethday

powershell.exe -ExecutionPolicy Bypass -File "%~dp0deploy.ps1" -CommitMessage "%COMMIT_MSG%" -Branch "%BRANCH%"

endlocal


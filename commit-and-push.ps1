# Скрипт для коммита и отправки изменений в Git

Write-Host "Проверка статуса Git..." -ForegroundColor Yellow
git status

Write-Host "`nДобавление всех изменений..." -ForegroundColor Yellow
git add -A

Write-Host "`nСоздание коммита..." -ForegroundColor Yellow
git commit -m "feat: добавлены пользовательские поля, синхронизация новостей, фильтры по тегам

- Создан плагин segezha-user-sync для синхронизации пользователей
- Добавлены дополнительные поля пользователя (организация, подразделение, должность и т.д.)
- Реализован вывод новостей из WordPress в sidebar-main.php и sidebar-post.php
- Добавлена фильтрация новостей по тегам организаций
- Обновлен sidebar-lk.php для отображения данных пользователя
- Добавлена возможность загрузки аватара в личном кабинете"

Write-Host "`nОтправка в репозиторий..." -ForegroundColor Yellow
git push origin addnews

Write-Host "`nГотово!" -ForegroundColor Green


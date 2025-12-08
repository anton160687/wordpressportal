# Упрощенный скрипт деплоя (без SSH, только git операции)
# Использование: .\deploy-simple.ps1 [комментарий] [ветка]

param(
    [string]$CommitMessage = "Auto deploy",
    [string]$Branch = "bethday"
)

Write-Host "==========================================" -ForegroundColor Green
Write-Host "  Автоматический деплой" -ForegroundColor Green
Write-Host "==========================================" -ForegroundColor Green
Write-Host ""

# Проверка изменений
Write-Host "Проверка изменений..." -ForegroundColor Yellow
$status = git status --porcelain
if ([string]::IsNullOrWhiteSpace($status)) {
    Write-Host "Нет изменений для коммита!" -ForegroundColor Red
    exit 1
}

git status --short
Write-Host ""

# Добавление
Write-Host "Добавление файлов..." -ForegroundColor Yellow
git add -A
if ($LASTEXITCODE -ne 0) {
    Write-Host "Ошибка!" -ForegroundColor Red
    exit 1
}

# Коммит
Write-Host "Создание коммита..." -ForegroundColor Yellow
git commit -m $CommitMessage
if ($LASTEXITCODE -ne 0) {
    Write-Host "Ошибка!" -ForegroundColor Red
    exit 1
}

# Проверка ветки
$currentBranch = git branch --show-current
if ($currentBranch -ne $Branch) {
    Write-Host "Переключение на ветку $Branch..." -ForegroundColor Yellow
    git checkout $Branch 2>$null
    if ($LASTEXITCODE -ne 0) {
        git checkout -b $Branch
    }
}

# Push
Write-Host "Отправка в GitHub..." -ForegroundColor Yellow
git push -u origin $Branch
if ($LASTEXITCODE -ne 0) {
    Write-Host "Ошибка при push!" -ForegroundColor Red
    exit 1
}

Write-Host ""
Write-Host "✓ Изменения отправлены в GitHub" -ForegroundColor Green
Write-Host ""
Write-Host "Для обновления на сервере выполните:" -ForegroundColor Yellow
Write-Host "ssh root@217.26.24.243 'cd /var/www/wordpress && git pull origin $Branch'" -ForegroundColor Cyan
Write-Host ""


# Скрипт автоматического деплоя на сервер
# Использование: .\deploy.ps1 [комментарий к коммиту] [ветка]

param(
    [string]$CommitMessage = "Auto deploy",
    [string]$Branch = "bethday",
    [string]$ServerIP = "217.26.24.243",
    [string]$ServerUser = "root",
    [string]$ServerPath = "/var/www/wordpress"
)

# Цвета для вывода
function Write-ColorOutput($ForegroundColor) {
    $fc = $host.UI.RawUI.ForegroundColor
    $host.UI.RawUI.ForegroundColor = $ForegroundColor
    if ($args) {
        Write-Output $args
    }
    $host.UI.RawUI.ForegroundColor = $fc
}

Write-ColorOutput Green "=========================================="
Write-ColorOutput Green "  Автоматический деплой на сервер"
Write-ColorOutput Green "=========================================="
Write-Output ""

# Шаг 1: Проверка статуса git
Write-ColorOutput Yellow "Шаг 1: Проверка статуса git..."
$status = git status --porcelain
if ([string]::IsNullOrWhiteSpace($status)) {
    Write-ColorOutput Red "Нет изменений для коммита!"
    exit 1
}

Write-ColorOutput Green "Найдены изменения:"
git status --short
Write-Output ""

# Шаг 2: Добавление всех изменений
Write-ColorOutput Yellow "Шаг 2: Добавление изменений в индекс..."
git add -A
if ($LASTEXITCODE -ne 0) {
    Write-ColorOutput Red "Ошибка при добавлении файлов!"
    exit 1
}
Write-ColorOutput Green "✓ Файлы добавлены"
Write-Output ""

# Шаг 3: Коммит
Write-ColorOutput Yellow "Шаг 3: Создание коммита..."
git commit -m $CommitMessage
if ($LASTEXITCODE -ne 0) {
    Write-ColorOutput Red "Ошибка при создании коммита!"
    exit 1
}
Write-ColorOutput Green "✓ Коммит создан: $CommitMessage"
Write-Output ""

# Шаг 4: Переключение на нужную ветку (если не на ней)
Write-ColorOutput Yellow "Шаг 4: Проверка текущей ветки..."
$currentBranch = git branch --show-current
if ($currentBranch -ne $Branch) {
    Write-ColorOutput Yellow "Переключение на ветку $Branch..."
    git checkout $Branch
    if ($LASTEXITCODE -ne 0) {
        Write-ColorOutput Yellow "Ветка $Branch не существует, создаем..."
        git checkout -b $Branch
    }
}
Write-ColorOutput Green "✓ Текущая ветка: $Branch"
Write-Output ""

# Шаг 5: Push в GitHub
Write-ColorOutput Yellow "Шаг 5: Отправка изменений в GitHub..."
git push -u origin $Branch
if ($LASTEXITCODE -ne 0) {
    Write-ColorOutput Red "Ошибка при отправке в GitHub!"
    Write-ColorOutput Yellow "Попытка принудительной отправки..."
    $confirm = Read-Host "Выполнить force push? (y/n)"
    if ($confirm -eq "y") {
        git push -u origin $Branch --force
        if ($LASTEXITCODE -ne 0) {
            Write-ColorOutput Red "Ошибка при force push!"
            exit 1
        }
    } else {
        exit 1
    }
}
Write-ColorOutput Green "✓ Изменения отправлены в GitHub"
Write-Output ""

# Шаг 6: Подключение к серверу и обновление
Write-ColorOutput Yellow "Шаг 6: Подключение к серверу и обновление..."
Write-ColorOutput Cyan "Сервер: $ServerUser@$ServerIP"
Write-ColorOutput Cyan "Путь: $ServerPath"
Write-Output ""

# Проверяем наличие скрипта на сервере
$scriptExists = ssh "$ServerUser@$ServerIP" "test -f $ServerPath/server-update.sh && echo 'yes' || echo 'no'"

if ($scriptExists -eq "yes") {
    Write-ColorOutput Yellow "Использование скрипта server-update.sh на сервере..."
    ssh "$ServerUser@$ServerIP" "cd $ServerPath && bash server-update.sh $Branch"
} else {
    Write-ColorOutput Yellow "Скрипт не найден, выполнение команд напрямую..."
    
    # Выполняем команды по одной
    $commands = @(
        "cd $ServerPath",
        "git fetch origin",
        "git checkout $Branch 2>&1 || git checkout -b $Branch origin/$Branch",
        "git pull origin $Branch",
        "find . -type d -exec chmod 755 {} \;",
        "find . -type f -exec chmod 644 {} \;",
        "chmod 600 wp-config.php",
        "chmod 775 wp-content wp-content/plugins wp-content/themes",
        "wp cache flush 2>/dev/null || true"
    )
    
    $fullCommand = $commands -join " && "
    ssh "$ServerUser@$ServerIP" $fullCommand
}

if ($LASTEXITCODE -eq 0) {
    Write-ColorOutput Green "✓ Деплой на сервер выполнен успешно!"
} else {
    Write-ColorOutput Yellow "Возможны ошибки при обновлении на сервере."
    Write-ColorOutput Yellow "Проверьте подключение и выполните вручную:"
    Write-ColorOutput Cyan "ssh $ServerUser@$ServerIP 'cd $ServerPath && git pull origin $Branch'"
}

Write-Output ""
Write-ColorOutput Green "=========================================="
Write-ColorOutput Green "  Деплой завершен успешно!"
Write-ColorOutput Green "=========================================="


#!/bin/bash
# Скрипт для обновления на сервере
# Использование: ./server-update.sh [ветка]

BRANCH=${1:-bethday}
SERVER_PATH="/var/www/wordpress"

echo "=========================================="
echo "  Обновление на сервере"
echo "=========================================="
echo ""

cd "$SERVER_PATH" || exit 1

echo "Текущая ветка:"
git branch --show-current
echo ""

echo "Получение изменений из GitHub..."
git fetch origin
echo ""

echo "Переключение на ветку $BRANCH..."
git checkout "$BRANCH" 2>&1 || git checkout -b "$BRANCH" origin/"$BRANCH"
echo ""

echo "Обновление кода..."
git pull origin "$BRANCH"
echo ""

echo "Проверка статуса..."
git status --short
echo ""

echo "Установка прав доступа..."
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;
chmod 600 wp-config.php
chmod 775 wp-content
chmod 775 wp-content/uploads 2>/dev/null || true
chmod 775 wp-content/plugins
chmod 775 wp-content/themes
echo ""

echo "Очистка кеша WordPress (если WP-CLI доступен)..."
wp cache flush 2>/dev/null || echo "WP-CLI не доступен, пропуск очистки кеша"
echo ""

echo "=========================================="
echo "Обновление завершено!"
echo "=========================================="


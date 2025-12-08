# Действия после git pull на сервере

## Последовательность действий после обновления кода

### 1. Проверка прав доступа к файлам

```bash
# Установить правильные права на файлы WordPress
cd /var/www/wordpress

# Владелец файлов (обычно www-data для Apache/Nginx)
sudo chown -R www-data:www-data wp-content/

# Права на директории
find wp-content/ -type d -exec chmod 755 {} \;

# Права на файлы
find wp-content/ -type f -exec chmod 644 {} \;

# Особые права для плагина (если нужно)
chmod 755 wp-content/plugins/segezha-user-sync/
chmod 644 wp-content/plugins/segezha-user-sync/*.php
```

### 2. Активация плагина (если еще не активирован)

#### Через админ-панель WordPress:
1. Зайдите в админ-панель: `https://ваш-сайт.ru/wp-admin`
2. Перейдите в **Плагины** → **Установленные плагины**
3. Найдите **Segezha User Sync**
4. Нажмите **Активировать**

#### Через WP-CLI (если установлен):
```bash
cd /var/www/wordpress
wp plugin activate segezha-user-sync
```

#### Через базу данных (если нет доступа к админке):
```bash
# Войти в MySQL
mysql -u root -p

# Выбрать базу данных WordPress
USE имя_базы_данных;

# Активировать плагин
UPDATE wp_options SET option_value = REPLACE(option_value, '";a:0:{}', '";a:1:{i:0;s:23:"segezha-user-sync/segezha-user-sync.php";}') WHERE option_name = 'active_plugins';
```

### 3. Очистка кеша

#### Если используется кеширующий плагин:
- **WP Super Cache**: Очистить кеш в настройках плагина
- **W3 Total Cache**: Очистить все кеши
- **WP Rocket**: Очистить кеш
- **LiteSpeed Cache**: Очистить кеш

#### Через WP-CLI:
```bash
wp cache flush
```

#### Очистка кеша сервера (если используется):
```bash
# Для Nginx
sudo service nginx reload

# Для Apache
sudo service apache2 reload

# Для PHP-FPM
sudo service php-fpm reload
```

### 4. Проверка файлов плагина

```bash
# Проверить, что все файлы плагина на месте
ls -la wp-content/plugins/segezha-user-sync/
ls -la wp-content/plugins/segezha-user-sync/includes/

# Должны быть файлы:
# - segezha-user-sync.php
# - README.md
# - includes/class-user-fields-manager.php
# - includes/class-user-sync-service.php
# - includes/class-cron-manager.php
# - includes/class-api-handler.php
```

### 5. Проверка логов на ошибки

```bash
# Проверить логи PHP
tail -f /var/log/php/error.log

# Или логи Apache/Nginx
tail -f /var/log/apache2/error.log
tail -f /var/log/nginx/error.log

# Логи WordPress (если включены)
tail -f wp-content/debug.log
```

### 6. Проверка работы функционала

#### В админ-панели WordPress:
1. Перейдите в **Пользователи** → **Ваш профиль**
2. Проверьте, что появилась секция **"Дополнительная информация Segezha"** с полями:
   - Название организации
   - Название подразделения
   - Должность
   - Дата рождения
   - Картинка из внешней системы
   - Картинка пользователя
   - ID пользователя из 1С
   - Логин руководителя

3. Проверьте страницу с новостями - должны отображаться новости из WordPress

#### Проверка Custom Post Type:
```bash
# Через WP-CLI проверить, что тип постов зарегистрирован
wp post-type list
# Должен быть тип 'news'
```

### 7. Настройка cron (если нужно)

```bash
# Проверить, что cron установлен
wp cron event list

# Должен быть событие: segezha_sync_users_cron

# Если нет, активировать плагин заново или установить вручную
```

### 8. Проверка прав на загрузку файлов

```bash
# Проверить права на директорию загрузок
ls -la wp-content/uploads/

# Установить правильные права
chmod 755 wp-content/uploads/
chown www-data:www-data wp-content/uploads/ -R
```

### 9. Проверка базы данных (если нужно)

Если плагин добавляет новые таблицы или опции:

```bash
# Через WP-CLI проверить опции плагина
wp option get segezha_1c_json_path
wp option get segezha_last_sync_time
```

### 10. Тестирование функционала

#### Тест загрузки аватара:
1. Зайдите в личный кабинет
2. Нажмите на кнопку редактирования фото
3. Загрузите изображение
4. Проверьте, что фото обновилось

#### Тест новостей:
1. Создайте тестовую новость типа "news" в админ-панели
2. Добавьте теги к новости
3. Проверьте, что новость отображается на главной странице
4. Проверьте работу фильтра по тегам

### 11. Если что-то не работает

#### Проверка ошибок PHP:
```bash
# Включить отображение ошибок (временно)
# В wp-config.php добавить:
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

#### Перезагрузка PHP-FPM:
```bash
sudo service php-fpm restart
```

#### Проверка синтаксиса PHP файлов:
```bash
php -l wp-content/plugins/segezha-user-sync/segezha-user-sync.php
php -l wp-content/themes/segeja/functions.php
```

## Быстрый чеклист

- [ ] Установлены правильные права на файлы
- [ ] Плагин Segezha User Sync активирован
- [ ] Очищен кеш WordPress и сервера
- [ ] Проверены логи на ошибки
- [ ] Проверена работа дополнительных полей пользователя
- [ ] Проверена работа новостей и фильтров
- [ ] Проверена загрузка аватара
- [ ] Проверена работа cron (если настроен)

## Команды для быстрой проверки

```bash
# Одной командой проверить все
cd /var/www/wordpress && \
echo "=== Проверка файлов плагина ===" && \
ls -la wp-content/plugins/segezha-user-sync/ && \
echo "=== Проверка прав ===" && \
ls -ld wp-content/plugins/segezha-user-sync/ && \
echo "=== Проверка активации плагина ===" && \
wp plugin list | grep segezha-user-sync
```


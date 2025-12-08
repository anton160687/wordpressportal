# Segezha User Sync Plugin

Плагин для синхронизации пользователей WordPress с внешними системами и 1С ЗУП.

## Описание

Плагин добавляет дополнительные поля для пользователей WordPress и обеспечивает автоматическую синхронизацию данных из внешних систем и 1С ЗУП через JSON файлы.

## Функциональность

### Дополнительные поля пользователя

- **Название организации** (`organization_name`) - Название организации пользователя
- **Название подразделения** (`department_name`) - Название подразделения
- **Должность** (`position`) - Должность пользователя
- **Дата рождения** (`birth_date`) - Дата рождения
- **Картинка из внешней системы** (`external_image_url`) - URL изображения из внешней системы
- **Картинка пользователя** (`user_image_id`) - ID изображения из медиабиблиотеки WordPress
- **ID пользователя из 1С** (`user_1c_id`) - Идентификационный код пользователя из 1С
- **Логин руководителя** (`manager_login`) - Логин непосредственного руководителя

### Синхронизация

- Автоматическая синхронизация пользователей из JSON файла 1С ЗУП
- Ручная синхронизация через REST API
- Cron-задачи для автоматического обновления данных

## Установка

1. Скопируйте папку `segezha-user-sync` в `wp-content/plugins/`
2. Активируйте плагин в админ-панели WordPress
3. Настройте путь к JSON файлу в настройках (опционально)

## Использование

### Синхронизация из JSON файла

Плагин автоматически синхронизирует пользователей из JSON файла при выполнении cron-задачи. Для ручного запуска используйте REST API:

```
POST /wp-json/segezha/v1/sync-user
```

### Формат JSON данных

```json
{
  "login": "user_login",
  "1c_id": "1c_user_id",
  "email": "user@example.com",
  "display_name": "Имя Фамилия",
  "first_name": "Имя",
  "last_name": "Фамилия",
  "organization_name": "ООО Сегежа Групп",
  "department_name": "IT отдел",
  "position": "Разработчик",
  "birth_date": "1990-01-01",
  "external_image_url": "https://example.com/image.jpg",
  "manager_login": "manager_login"
}
```

## Структура плагина

- `segezha-user-sync.php` - Главный файл плагина
- `includes/class-user-fields-manager.php` - Управление полями пользователя
- `includes/class-user-sync-service.php` - Сервис синхронизации
- `includes/class-cron-manager.php` - Управление cron-задачами
- `includes/class-api-handler.php` - Обработка REST API запросов

## API Endpoints

### POST /wp-json/segezha/v1/sync-user
Синхронизирует одного пользователя

### GET /wp-json/segezha/v1/sync-status
Получает статус последней синхронизации

## Требования

- WordPress 5.8+
- PHP 7.4+

## Автор

Segezha Group

## Лицензия

GPL v2 or later


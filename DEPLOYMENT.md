# Инструкция по развертыванию

## Подключение к серверу и синхронизация Git

### Шаг 1: Подключение к серверу

```bash
ssh root@217.26.24.243
# Пароль: F#w6vK)Xn4St
```

### Шаг 2: Переход в директорию проекта

```bash
cd /var/www/html/wordpressportal
# или путь к вашему проекту WordPress
```

### Шаг 3: Проверка статуса Git

```bash
git status
git branch
```

### Шаг 4: Сохранение изменений на сервере

```bash
# Добавить все изменения
git add -A

# Создать коммит
git commit -m "Обновление: добавлены пользовательские поля, синхронизация новостей, фильтры"

# Отправить в репозиторий
git push origin addnews
```

### Шаг 5: Обновление локальной копии

На локальной машине:

```bash
cd d:\xampp\htdocs\WP\wordpressportal
git pull origin addnews
```

## Что было реализовано

### 1. Custom Post Type для новостей
- Создан тип постов `news` с поддержкой тегов
- Новости выводятся в `sidebar-main.php` и `sidebar-post.php`
- Реализована фильтрация по тегам организаций

### 2. Плагин синхронизации пользователей
- **Класс `Segezha_User_Fields_Manager`** - управление дополнительными полями пользователя
- **Класс `Segezha_User_Sync_Service`** - синхронизация пользователей из JSON
- **Класс `Segezha_Cron_Manager`** - управление cron-задачами
- **Класс `Segezha_API_Handler`** - REST API для синхронизации

### 3. Дополнительные поля пользователя
- Название организации
- Название подразделения
- Должность
- Дата рождения
- Картинка из внешней системы
- Картинка пользователя (из медиабиблиотеки)
- ID пользователя из 1С
- Логин руководителя

### 4. Обновление шаблонов
- `sidebar-main.php` - вывод новостей с фильтрацией
- `sidebar-post.php` - вывод новостей с фильтрацией
- `sidebar-lk.php` - отображение данных пользователя и загрузка аватара

### 5. Функционал загрузки аватара
- AJAX-загрузка изображения в личном кабинете
- Приоритет: пользовательская картинка > внешняя картинка > дефолтная

## Настройка синхронизации (следующая итерация)

Для настройки синхронизации из 1С ЗУП:

1. Установите путь к JSON файлу:
```php
update_option('segezha_1c_json_path', '/path/to/users.json');
```

2. Cron будет запускаться автоматически каждый день в 2:00

3. Формат JSON файла:
```json
[
  {
    "login": "user_login",
    "1c_id": "1c_user_id",
    "email": "user@example.com",
    "display_name": "Имя Фамилия",
    "organization_name": "ООО Сегежа Групп",
    "department_name": "IT отдел",
    "position": "Разработчик",
    "birth_date": "1990-01-01",
    "external_image_url": "https://example.com/image.jpg",
    "manager_login": "manager_login"
  }
]
```

## Структура файлов

```
wp-content/
├── plugins/
│   └── segezha-user-sync/
│       ├── segezha-user-sync.php
│       ├── README.md
│       └── includes/
│           ├── class-user-fields-manager.php
│           ├── class-user-sync-service.php
│           ├── class-cron-manager.php
│           └── class-api-handler.php
└── themes/
    └── segeja/
        ├── functions.php
        └── template-parts/
            ├── sidebar-main.php
            ├── sidebar-post.php
            └── sidebar-lk.php
```

## Примечания

- Все изменения находятся в ветке `addnews`
- Синхронизация пользователей будет реализована на следующей итерации
- Плагин готов к использованию, но требует настройки пути к JSON файлу для синхронизации


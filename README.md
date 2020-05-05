
Первый запуск:

1. Скопируйте репозиторий:

$ git clone https://github.com/alekseyfastovets/Testwork-Semalt.git

2. Откройте терминал из папки репозитория:
$ cd Testwork-Semalt

3. Скачайте записимостри проекта:
$ docker run --rm -v $(pwd):/app composer install

4. Измените владелца паки на текущего пользователя:
$ sudo chown -R $USER:$USER $pwd

5. Создайте и отредактируйте файле окружения Laravel
$ cp .env.example .env
$ nano .env

В файде необходимо изменить секцию DB_CONNECTION
DB_HOST=db
DB_USERNAME=laraveluser
DB_PASSWORD="your_laravel_db_password" (Ваш пароль пользователя)

В итоге секция должна выглядеть так:
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD="your_laravel_db_password" (Ваш пароль пользователя)

6. Выполнить инициализацию Docker контейнеров
$ docker-compose up -d

7. Сгенерировать ключ безопасности в файл .Env
$ docker-compose exec app php artisan key:generate

8. Дать права на редактирование пользователю БД

$ docker-compose exec db bash
mysql -u root -p
GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password (Ваш пароль пользователя)';
FLUSH PRIVILEGES;
EXIT;

9. Выполнить миграцию и генерацию тестовых данных
$ docker-compose exec app php artisan migrate --seed

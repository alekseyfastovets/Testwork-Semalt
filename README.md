
##Первый запуск:

#1. Скопируйте репозиторий

$ git clone https://github.com/alekseyfastovets/Testwork-Semalt.git <br>

#2. Откройте терминал из папки репозитория
$ cd Testwork-Semalt <br>

#3. Скачайте зависимости проекта:
$ docker run --rm -v $(pwd):/app composer install <br>

#4. Измените владельца папки на текущего пользователя
$ sudo chown -R $USER:$USER $PWD <br>

#5. Создайте и отредактируйте файл окружения Laravel
$ cp .env.example .env <br>
$ nano .env <br>

В файле необходимо изменить секцию DB_CONNECTION <br>
DB_HOST=db <br>
DB_USERNAME=laraveluser <br>
DB_PASSWORD="your_laravel_db_password" (Ваш пароль пользователя) <br>

В итоге секция должна выглядеть так: <br>
DB_CONNECTION=mysql <br>
DB_HOST=db <br>
DB_PORT=3306 <br>
DB_DATABASE=laravel <br>
DB_USERNAME=laraveluser <br>
DB_PASSWORD="your_laravel_db_password" (Ваш пароль пользователя) <br>

#6. Выполнить инициализацию Docker контейнеров
$ docker-compose up -d <br>

#7. Сгенерировать ключ безопасности в файл .Env
$ docker-compose exec app php artisan key:generate <br>

#8. Дать права на редактирование пользователю БД

$ docker-compose exec db bash <br>
mysql -u root -p <br>
GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password (Ваш пароль пользователя)'; <br>
FLUSH PRIVILEGES; <br>
EXIT;<br>

#9. Выполнить миграцию и генерацию тестовых данных
$ docker-compose exec app php artisan migrate:fresh --seed<br>

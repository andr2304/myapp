<h1>Безопасность при загрузке документов на сервер!</h1>
<ul>
    <li>Устанавливаем максимальный размер загружаемого файла в конфигурационном файле на сервере;</li>
    <li>Не должны допускаться к загрузке файлы которые выполняют программный код. Злоумышленник может загрузит так называемый скрипт "Backdoor - Черный вход" и у него появится древо всех папок и файлов на сервере, он сможет открывать и редактировать все файлы на сервере(конечно если нет ограничение прав пользователей) если он получит доступ к конфигурационному файлу базы данных то он получит данные для подключения к ней.
        Расширения которые не должны позволяться к загрузке со стороны обычного пользователя: php, cgi, pl, php3, php4, php5, php6, phps, phtml, shtml, py, exe
    </li>
    <li>Если хакер смог загрузить вредоносный файл на сервер, для этого понадобится помощь .htaccess он не позволит запуск скриптов расширение которых находится в списке запрещенных:
    </li>
    <li>Скрипт загружающий файлы должен исключить наличие символов / и .. в именах файлов. Что бы через него нельзя было залить файл в произвольную папку на сервере;</li>
    <li>С помощью функции ini_set() установить максимальное количество загружаемых файлов</li>
</ul>
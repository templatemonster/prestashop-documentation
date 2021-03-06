<h3>Ручная установка шаблона с Демо-контентом </h3>
<p class="alert alert-info custom">Если Вы не хотите тратить Ваше время на установку шаблона, вы всегда можете <span class="label label-warning opener" onclick="showChat()">заказать</span> услугу установки шаблона используя наш чат.</p>
<p>Для того чтобы ваш магазин PrestaShop выглядел к Демо-версия шаблона, Вам нужно установить <strong>Демо-контент</strong>. Он будет содержать все демонстрационные товары, категории, модули и настройки магазина. </p>
<p class="alert alert-danger"> Пожалуйста, не используйте Демо-контент для вашего рабочего магазина! Это заменит все ваши товары в магазине и настройки магазина.</p>
<p class="alert alert-warning"> Убедитесь, что ваша версия движка PrestaShop соответствует версии, указанной на вкладке «Технические детали» как «Движок PrestaShop: 1.X.X.X». <br/>
Кроме того, убедитесь, что ваш префикс таблиц базы данных – это <strong>ps_</strong>. Установите Демо-контент только в том случае, если ваш движок PrestaShop соответствует указанной версии. </p> 
<h4>Загрузка файлов шаблона</h4>
<p>Для того чтобы загрузить шаблон на ваш сервер:</p>
<ol class="index-list">
    <li>Откройте пакет шаблона.</li>
    <li>Перейдите в папку <strong>/theme/manual_install/</strong>.</li>
    <li>Загрузите папки <strong>/img/</strong>, <strong>/modules/</strong> и <strong>/themes/</strong> в корневую папку PrestaShop.</li>
</ol>
<p class="alert alert-info">Ознакомьтесь с детальным видео-туториалом, который покажет <a target="_blank" href="/help/how-upload-files-server-2.html">как загрузить файлы на сервер, используя менеджер FTP</a> и <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">как загрузить файлы на сервер, используя Панель управления хостингом (WebHost Manager, WHM)</a>.</p>
<h4>Установка Демо-контента</h4>
<p> Демо-контент представлен в виде файла .SQL. Он находится в папке <strong>theme/manual_install/</strong> пакета шаблона и называется <strong>dump.sql</strong>.</p>
<p>Файл dump.sql можно установить, используя инструмент phpMyAdmin или другой инструмент управления базы данных в вашей Панели управления хостингом. Из этого детального туториала вы узнаете, <a target="_blank" href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">как установить файлы SQL</a>, что может Вам помочь.</p>
<p class="alert alert-warning"> Прежде чем продолжить, создайте резервную копию базы данных. Вы можете ознакомиться с подробным видео-туториалом, который покажет <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">как создать резервную копию базы данных</a>.</p>
<p class="alert alert-danger"> Убедитесь, что ваша версия движка PrestaShop соответствует требованиям шаблона. В противном случае, база данных будет повреждена.</p>
<p>Закончив установку файла dump.sql, активируйте шаблон.</p>
<p>В админ панели PrestaShop, перейдите на вкладку <strong>Предпочтения > Шаблоны</strong> (Preferences > Themes), выберите ваш шаблон в разделе <strong>Шаблоны</strong> (Themes) и нажмите на кнопку <strong>Сохранить</strong> (Save).</p>

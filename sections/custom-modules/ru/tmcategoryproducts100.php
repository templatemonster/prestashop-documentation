<h3>TM Category Products 1.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Мода, Электроника, Запчасти, Мебель</p>
    </div>
<?php } ?>
<p>Этот модуль отображает товары категории в хуках displayHome и displayHomeTabContent. Модуль позволяет отображать единичные товары, товары из категории или все товары. Более того, в модуле есть карусель, которая работает, когда модуль размещен в позиции displayHome.</p>
<h5>Основная панель TM Category Products</h5>
<p>Основная панель. Здесь Вы можете настроить модуль. </p>
<figure class="img-polaroid">
    <img src="img/tmcategoryproducts-1.png" alt=""/>
</figure>
<h5>Добавление вкладки</h5>
<p>Вкладка – это блок, который отображает товары в позиции displayHomeTabContent.</p>
<ul class="index-list">
    <li><p>Перейдите в основную панель модуля и нажмите на вкладку 'плюс' (1) в списке вкладок.</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-2.png" alt=""/>
        </figure>
    </li>
    <li><p>В открывшейся форме, Вы найдёте следующие настройки:</p>
        <ul class="marked-list">
            <li>Статус – эта настройка позволяет включить/отключить вкладку.</li>
            <li>Выбор категории - категория, товары которой будут отображены.            </li>
            <li>Использовать пользовательское название - эта настройка позволяет изменить отображаемое название категории. Если эта настройка включена, будет отображена следующая форма:
                <ul class="marked-list">
                    <li> Название - пользовательское название вкладки, отображаемое на веб-сайте.</li>
                </ul>
            </li>
            <li> Выбор товара для отображения - если отключено, отобразится поле 'Количество отображаемых товаров', которое задает количество отображаемых товаров. Если включено, отображает кнопку 'Добавить товары', которая позволяет выбирать товары для отображения на вкладке.            </li>
        </ul>
    </li>
    <li><p>Изменив все нужные настройки, нажмите на кнопку 'Сохранить' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Добавление блока</h5>
<p>Этот блок позволяет выбрать товар в позиции displayHome.</p>
<ul class="index-list">
    <li><p>Перейдите в основную панель модуля и нажмите на вкладку 'плюс' (1) в списке блоков.</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-4.png" alt=""/>
        </figure>
    </li>
    <li><p> В появившейся форме Вы найдете следующие настройки:</p>
        <ul class="marked-list">
            <li><p>Статус – эта настройка позволяет включить/отключить блок.</p></li>
            <li><p>Выбрать категорию - категория, товары которой будут отображаться.</p></li>
            <li>
                <p>Использовать пользовательское название – эта настройка позволяет изменить отображаемое название категории. Если параметр включен, отобразиться следующая форма:</p>
                <ul class="marked-list">
                    <li><p>Название – пользовательское название вкладки, отображаемое на сайте.</p></li>
                </ul>
            </li>
            <li>
                <p>Выбрать товары для отображения – если отключен, отображает поле 'Количество отображаемых товаров', которое задаёт количество отображаемых товаров. Если включен, отображает кнопку 'Добавить товары', которая позволяет выбрать товар для отображения во вкладке.</p>
            </li>
            <li>
                <p> Использовать карусель - эта настройка позволяет включать/выключать карусель для товаров в блоках. После включения настройки Вы увидите следующие настройки:</p>
                <ul class="marked-list">
                   <li><p><strong>Отображаемые элементы</strong> (Visible items) – количество отображаемых элементов.</p></li>
                    <li><p><strong>Прокрутка элементов</strong> (Items scroll) – количество элементов, сменяемых при одной прокрутке карусели.</p></li>
                     <li><p><strong>Ширина слайда</strong> (Slide Width) – ширина элемента списка карусели.</p></li>
                     <li><p><strong>Поле слайда</strong> (Slide Margin) - поле элемента списка карусели.</p></li>
                     <li><p><strong>Автоматическая прокрутка</strong> (Auto scroll) – автоматическая прокрутка элементов карусели.</p></li>
                      <li><p><strong>Скорость карусели</strong> (Carousel speed) – скорость смены элементов.</p></li>
                   <li><p><strong>Пауза</strong> (Pause) – пауза между прокрутками (если "Автоматическая прокрутка" включена).</p></li>
                     <li><p><strong>Случайно</strong> (Random) – карусель начинается со случайного элемента.</p></li>
                    <li><p><strong>Луп карусели</strong> (Carousel loop) - луп: когда все элементы карусели отобразились, карусель начнется с начала.</p></li>
                    <li><p><strong>Скрыть элементы управления в конце</strong> (Hide control at the end) – скрыть кнопки управления (Предыдущий/Следующий).</p></li>
                    <li><p><strong>Пагинация</strong> (Pager) – отображение пагинации.</p></li>
                    <li><p><strong>Элементы управления</strong> (Control) – отображает элементы управления (Предыдущий/Следующий).</p></li>
                   <li><p><strong> Автоматическое управление</strong> (Auto control) - отображает элементы управления (Воспроизведение/Пауза).</p></li>
            <li><p><strong>Автоматический ховер </strong> (Auto hover) - паузы карусели, если пользователь наводит курсор мышки на элемент списка.</p></li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <p>После изменения всех необходимых настроек, нажмите на кнопку 'Сохранить' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-5.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Порядок отображения блоков/вкладок</h5>
<p> Вы можете изменить порядок блоков модуля с помощью перетягивания. Это позволяет быстро менять позиции блоков и вкладок.</p>
<figure class="img-polaroid">
    <img src="img/tmcategoryproducts-6.png" alt=""/>
</figure>
<h5>Выбор товаров</h5>
<p> Если Вы создадите элемент и включите настройку «Выбрать товары для отображения», Вы можете выбрать товары, которые Вы хотите отобразить. Для того чтобы это сделать:</p>
<ul class="index-list">
    <li><p>Нажмите на кнопку 'Добавить товары' (1):</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-7.png" alt=""/>
        </figure>
    </li>
    <li><p>В отобразившемся всплывающем окне, выберите нужный товар (2) и нажмите на кнопку 'Добавить' (3):</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-8.png" alt=""/>
        </figure>
    </li>
    <li><p> Теперь Вы можете размещать добавленные товары везде, где Вы хотите, с помощью перетягивания (4):</p>
        <figure class="img-polaroid">
            <img src="img/tmcategoryproducts-9.png" alt=""/>
        </figure>
    </li>
    <li><p> Когда все необходимые товары добавлены и упорядочены в нужном порядке, нажмите кнопку 'Сохранить'.</p>
    </li>
</ul>
<h5>Удаление блоков/вкладок</h5>
<p> Чтобы удалить элементы, нажмите на выпадающее меню рядом с нужным блоком/вкладкой (1) и нажмите Удалить (2). Элемент будет удален.</p>
<figure class="img-polaroid">
    <img src="img/tmcategoryproducts-10.png" alt=""/>
</figure>

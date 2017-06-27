<h3>TM Advanced Filter</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Запчасти</p>
    </div>
<?php } ?>
<h4>Вступление</h4>
<p> Модуль TM Advanced Filter дает возможность реализовать быстрый поиск необходимого товара на основе ключевых свойств. Он позволяет создавать фильтры с неограниченным количеством критериев поиска, которые доступны в магазине по умолчанию или создаются при добавлении товаров. Критерии фильтрации могут быть следующими: уровни категорий (путем вложения), производители, поставщики, атрибуты, функции и т. д. Также модуль имеет следующие функции: создание связанных фильтров, в которых нужные критерии становятся доступными только после выбора родительского параметра (уровень вложенности неограничен); выбор сетки критериев фильтрации для фильтра вверху страницы. Вы можете выбрать тип поля фильтра из доступных, указать родительский фильтр, добавить его название, ярлык и описание. Все легко настраивается и редактируется в удобной админ панели. Для большей скорости модуль использует алгоритм индексации товаров по заданным критериям. Модуль можно легко и быстро добавить в любой магазин Prestashop.</p>
<h4>Установка и удаление модуля</h4>
<h6>Модуль устанавливается и удаляется как любой другой модуль PrestaShop.</h6>
<p class="alert alert-info"><span>После удаления или переустановки модуля, все настройки модуля и фильтры будут удалены.</span></p>
<h4>Настройка/изменение фильтров</h4>
<p> После установки Вы можете изменить параметры модуля на странице его настройки. По умолчанию Вы увидите вкладки с доступными типами фильтров. Чтобы создать фильтр, выберите вкладку (1) и нажмите на кнопку 'Создать фильтр' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p> В появившемся окне фильтра заполните все необходимые поля.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Название</strong> (Name) - название фильтра. Оно будет отображаться на фронтенде как заголовок блока фильтра;
    </li>
    <li><strong>Описание</strong> (Description) - Описание фильтра. Он будет отображаться на фронтенде рядом с названием блока фильтра    </li>
    <li><strong>Отображать счётчик</strong> (Show counter) - позволяет отображать количество товаров, которые будут доступны после выбора текущего параметра. Количество будет отображаться рядом с критерием поиска (в скобках);    </li>
    <li><strong>Отображать выбранные фильтры</strong> (Show selected filters) - позволяет отображать список выбранных критериев поиска с возможностью отменить выбор любого из них;    </li>
    <li><strong>Отображать тип макета фильтра</strong> (Show filter layout type) - выбор сетки фильтра (доступно только для верхнего фильтра);    </li>
</ul>
<p class="alert alert-info"><span> Обратите внимание, что здесь нет обязательных полей. Если Вы оставите все поля пустыми, тогда будет создан фильтр с одной колонкой без описания и без названия.</span></p>
<h5>Редактирование фильтра</h5>
<p>Для того чтобы изменить описание и настройки фильтра, нажмите на кнопку 'Шестерёнка' в меню фильтра.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p> В режиме редактирования форма выглядит и работает как в режиме настройки.</p>
<p class="alert alert-info"><span> Выбор сетки фильтра доступен только для 'Верхнего фильтра'.</span></p>
<p class="alert alert-info"><span>При изменении сетки фильтров все элементы автоматически переносятся в первый столбец, сохраняя порядок вложения и отображения (в соответствии с принципом: все элементы предыдущего столбца с сохранённым порядком отображения).</span></p>
<h5>Удаление фильтра</h5>
<p> Чтобы изменить описание или настройки фильтра, нажмите на 'Крестик' в меню фильтра</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>и подтвердите удаление фильтра.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span> После удаления фильтра все данные будут навсегда утеряны.</span>
</div>
<h5>Индексация фильтра</h5>
<p><strong>Индексация</strong> (Indexation) - процесс создания уникальных таблиц с данными, необходимыми для фильтра, которые создаются для конкретных критериев фильтра. Они позволяют значительно ускорить работу фильтра на фронтенде.</p>
<p> Соответствующая кнопка в меню фильтра выделена красным цветом. Если кнопка не подсвечена, фильтр не нуждается в индексации.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span> Процесс переиндексации может занять некоторое время, в зависимости от количества товаров в магазине и выбранных критериев фильтрации.</span></p>
<p class="alert alert-info"><span> Если фильтр требует повторной индексации, он не будет отображаться на фронтенде.</span></p>
<h5>Создание/изменение элементов (критериев) фильтра </h5>
<p> Чтобы добавить элемент в фильтр, выберите его в панели доступных элементов (слева) и перетащите его в доступную область сетки фильтра (она загорится после выбора. В примере сетка имеет 2 столбца).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p> В выделенной области выберите столбец и позицию нового элемента и отпустите элемент.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p> В появившемся окне создания элемента введите все необходимые данные:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Название</strong> (Name) - название элемента фильтра на фронтенде. Оно не будет отображаться, если Вы оставите поле пустым.    </li>
    <li><strong>Ярлык</strong> (Label) - ярлык элемента фильтра на фронтенде. Он не будет отображаться, если Вы оставите поле пустым.        </li>
    <li><strong>Описание</strong> (Description) - описание элемента фильтра на фронтенде. Оно не будет отображаться, если Вы оставите поле пустым.       </li>
    <li><strong>Родительский фильтр</strong> (Parent filter) - Родительский элемент фильтра, после того как выбрано, какой элемент будет доступен. Элемент будет всегда доступен, если поле останется пустым.
    </li>
    <li><strong>Тип поля фильтра</strong> (Filter field type) – то, как элемент будет отображаться на фронтенде. Доступны следующие типы:
        <ul class="marked-list">
            <li>радиокнопка</li>
            <li>выбор</li>
            <li>флаговая кнопка</li>
            <li>выбор из диапазона (только для типа поля 'цена')</li>
            <li>ввод диапазона (только для типа поля 'цена')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span> Вы можете изменить все данные и родительский элемент в режиме редактирования фильтра.</span></p>
<p class="alert alert-info"><span>После редактирования элемента фильтр должен быть повторно проиндексирован, что показано кнопкой в меню фильтра. Не переиндексируйте фильтр после редактирования каждого элемента, Вы можете сделать это после применения изменений ко всем необходимым элементам - тем самым Вы сэкономите ваше время.</span></p>
<p> Если есть дерево связанных фильтров, Вы можете добавить новый элемент в качестве связанного с этим деревом.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Редактирование элемента фильтра</h5>
<p> Чтобы изменить элемент фильтра, нажмите на кнопку 'Шестерёнка' (1) в верхнем правом углу фильтра.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5> Сортировка (порядок отображения элементов фильтра)</h5>
<p> По умолчанию новые элементы отображаются после элемента в том порядке, в котором Вы их добавили. Если фильтр добавляется к дереву, он будет отображаться после существующих элементов в дереве.</p>
<p>Чтобы переместить элементы внутри фильтра, выберите нужный элемент и перетащите его в нужную позицию. Вы можете перетаскивать элементы в одной колонке, а также в другие колонки. Вы можете также изменить сортировку внутри дерева или переместить сразу все дерево.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p> После перемещения элемента из одного столбца в другой порядок отображения автоматически изменяется во всех столбцах.</p>
<h5>Удаление элемента фильтра</h5>
<p> Вы можете удалить элемент фильтра двумя способами:</p>
<ul class="index-list">
    <li><p> перетащите элемент обратно в колонку доступных элементов;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p> или нажмите на «Крестик» в верхнем правом углу нужного элемента.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p> Независимо от выбранного метода, Вы увидите окно с подтверждением удаления.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span> После удаления фильтра с вложенными элементами все вложенные элементы будут удалены.</span></p>
<p class="alert alert-info"><span>После удаления элемента фильтр должен быть повторно проиндексирован, что показано кнопкой в меню фильтра. Не переиндексируйте фильтр после редактирования каждого элемента, Вы можете сделать это после применения изменений ко всем необходимым элементам - тем самым Вы сэкономите свое время.</span></p>
<h5>"Умная" переиндексация</h5>
<p>Модуль обеспечивает автоматическую (умную) переиндексацию после внесения изменений в товары или после некоторых других важных изменений (производитель, атрибут и т. д.). Поля таблицы будут переиндексированы, если эти изменения повлияют на работу фильтра.</p>
<p class="alert alert-info"><span> Если после внесения изменений фильтр не принял их автоматически, войдите на страницу настроек фильтра и переиндексируйте данные вручную.</span></p>
<p class="alert alert-info"><span> После добавления валюты фильтр не будет автоматически переиндексирован, поэтому его следует переиндексировать вручную.</span></p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li> Я создал фильтр, но я не вижу его на фронтенде.</li>
        <li> Я добавил название и описание фильтра, но они не отображаются на фронтенде.</li>
        <li> Я добавил элементы в фильтр, но он перестал отображаться на фронтенде.</li>
        <li> Я хочу, чтобы элемент был доступен только после выбора другого элемента.</li>
        <li>Я хочу поменять элементы местами.</li>
        <li> Я хочу удалить родительский элемент, но хочу сохранить все вложенные элементы. Как это сделать?        </li>
        <li> Я хочу изменить сетку фильтра, но я не хочу снова создавать фильтр. Что я могу сделать?</li>
        <li> Как создать новый фильтр, если для этой позиции уже есть фильтр?</li>
        <li> Фильтр перестал отображаться на фронтенде.</li>
        <li> Почему не все элементы активны на фронтенде?</li>
    </ul>
    <div class="resp-tabs-container">
        <div> Фильтр не будет отображаться, если в нем нет элементов или если он не был переиндексирован. <br>
          Убедитесь, что в фильтре есть элементы и что он был переиндексирован.
        </div>
        <div> Возможно, Вы добавили данные не для всех языков. Не забывайте, что модуль многоязычный и хранит данные для каждого языка отдельно.        </div>
        <div> Убедитесь, что Вы повторно проиндексировали фильтр после внесения изменений.</div>
        <div> Выберите элемент, после выбора которого нужный элемент должен стать доступным, и задайте его как родительский элемент.</div>
        <div> Просто перетащите элемент на место, где Вы хотите его найти, он автоматически займет новое положение, и это не повлияет на функциональность фильтра.        </div>
        <div> В меню редактирования первого вложенного элемента удалите связь с родительским элементом, который Вы хотите удалить, а затем удалите родительский элемент. В этом случае все вложенные элементы не будут удалены.        </div>
        <div> Войдите в меню редактирования и выберите новую сетку фильтра, затем сохраните изменения. Все элементы фильтра будут отображаться в первом столбце новой сетки, Вы можете переместить их в нужные позиции.        </div>
        <div> Чтобы создать новый фильтр, удалите существующий.</div>
        <div> Убедитесь, что фильтр не нуждается в индексации.</div>
        <div> Проверьте, не является ли элемент дочерним по отношению к элементу, который в данный момент не активен. Убедитесь, что есть товары, соответствующие указанным критериям.
        </div>
    </div>
</div>


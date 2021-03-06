<h3>TM-Logowanie Społecznościowe 1.2.0</h3>
<p>Ten moduł pozwala zarejestrować się oraz zalogować się, korzystając ze stron klientów w Sieciach Społecznościowych,
    na przykład Facebook, Google oraz VK.</p>
<h4>Instalowanie modułu</h4>
<p>Ten moduł można zainstalować/odinstalować w taki sam sposób jak każdy inny moduł PrestaShop.</p>
<h4>Ustawienia modułu</h4>
<p>Po instalowaniu modułu możesz go skonfigurować na stronie konfiguracji modułu.</p>
<p>Aby pobrać wymagane dane dla konfiguracji modułu będziesz musiał stworzyć odpowiednią aplikację na potrzebnym ci
    zasobie.</p>
<p>Nie koniecznie stosować oba warianty logowania się (Google, Facebook) jednocześnie; wystarczy skorzystać z jednego z
    nich.</p>
<h4>Pola Facebook</h4>
<ul class="marked-list">
    <li>ID twojej Aplikacji (App)</li>
    <li>Klucz Secret Twojej Aplikacji (App)</li>
</ul>
<h4>Pola Google</h4>
<ul class="marked-list">
    <li>ID twojej Aplikacji (App)</li>
    <li>Klucz Secret Twojej Aplikacji (App)</li>
    <li> Ścieżka przekierowania po logowaniu się <strong>(adres URL Twojego
            sklepu+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong></li>
</ul>
<h4>Pola VK</h4>
<ul class="marked-list">
    <li>ID twojej Aplikacji (App)</li>
    <li>Klucz Secret Twojej Aplikacji (App)</li>
    <li> Ścieżka przekierowania po logowaniu się <strong>(adres URL Twojego
            sklepu+index.php?fc=module&module=tmsociallogin&controller=vklogin)</strong></li>
</ul>
<p class="alert alert-info">Dokładniejszą informację znajdziesz podążając za umieszczonymi poniżej linkami: <a
            href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook App</a>, <a
            href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> oraz <a href="https://vk.com/dev/web_how_to_start">VK App</a>.</p>
<p class="alert alert-warning">
    Ścieżka przekierowania musi być tą samą co jest wskazana w trakcie stworzenia aplikacji Google App lub VK App. </p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin120-1.png" alt=""/>
</figure>
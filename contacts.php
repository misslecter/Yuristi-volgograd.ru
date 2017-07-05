<div id="kontakty" class="contact">
    <h1>Контакты</h1>
    <p><strong>Позвоните</strong> на один из указаных телефонов или воспользуйтесь <strong>контактной формой</strong>, чтобы связаться с юристом.</p>

    <h3>Где нас найти</h3>
    <div class="row">
        <div class="col-sm-6">
            <div id="map"></div>
        </div>
        <div class="info col-sm-6">
            <h3>ООО «Бизнес-Консалтинг»</h3>
            <p>Служба правовой помощи и защиты</p>
            <ul>
                <li>
                    <div class="title"><strong>Е-майл:</strong></div>
                    <span class="glyphicon glyphicon-envelope"></span>
                    <a href="mailto:info@yuristi-volgograd.ru" class="link" title="Свяжитесь с нами">info@yuristi-volgograd.ru</a>
                </li>
                <li>
                    <div class="title"><strong>Телефоны:</strong></div>
                    <span class="glyphicon glyphicon-earphone"></span>
                    8 903 479 11 11, 8 917 338 11 18
                </li>
                <li>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    (8442) 38-72-71, (8442) 98-11-18
                </li>
                <li>
                    <div class="title"><strong>Адрес:</strong></div>
                    <span class="glyphicon glyphicon-map-marker"></span>
                    г. Волгоград, Центральный район, ул. Советская, дом 22
                    <div class="address-note">(8-й подъезд, вход со двора)</div>
                </li>
            </ul>
        </div>
    </div>

    <h1>Напишите нам</h1>
    <p>Опишите нам Вашу проблему через контактную форму и в течении 24 часов Вам ответит один из специалистов ООО «Бизнес-Консалтинг»</p>

    <!-- Modal -->
    <div class="modal custom-modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="form-messages"></div>
                </div>
            </div>
        </div>
    </div>

    <form id="contact" method="post" action="mailer.php">
        <div class="form-group input-bizcons">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя или название организации">
            <span class="input-label glyphicon glyphicon-user"></span>
        </div>
        <div class="row">
            <div class="form-group input-bizcons col-sm-6">
                <input type="text" class="form-control" id="tel" name="tel" placeholder="Ваш телефон" required>
                <span class="input-label glyphicon glyphicon-earphone"></span>
            </div>
            <div class="form-group input-bizcons col-sm-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ваш Email" required>
                <span class="input-label glyphicon glyphicon-envelope"></span>
            </div>
        </div>
        <div class="form-group input-bizcons">
            <textarea class="form-control" rows="10" id="message" name="message" placeholder="Опишите Вашу проблему"></textarea>
            <span class="input-label glyphicon glyphicon-pencil"></span>
        </div>

        <div class="row">
            <div class="form-group radios col-sm-6 col-md-4">
                <label>Я предпочитаю, чтобы со мной связались:</label>
                <div class="radio">
                    <input type="radio" name="contact-way" id="email-way" value="по электронной почте" checked>
                    <label for="email-way">по электронной почте</label>
                </div>
                <div class="radio">
                    <input type="radio" name="contact-way" id="tel-way" value="по телефону">
                    <label for="tel-way">по телефону</label>
                </div>
                <div class="radio">
                    <input type="radio" name="contact-way" id="nomatter-way" value="не имеет значения">
                    <label for="nomatter-way">не имеет значения</label>
                </div>
            </div>
            <div class="form-group radios col-sm-6 col-md-3 col-lg-4">
                <label>Я представляю:</label>
                <div class="radio">
                    <input type="radio" name="whois" id="person" value="частное лицо" checked>
                    <label for="person">частное лицо</label>
                </div>
                <div class="radio">
                    <input type="radio" name="whois" id="company" value="организацию">
                    <label for="company">организацию</label>
                </div>
            </div>
            <div class="send-btn col-sm-12 col-md-5 col-lg-4">
                <div class="g-recaptcha" data-sitekey="6LdZyRgUAAAAADgwHsGUfswWKIEsmo4w9ah6j2UO"></div>
                <button type="submit" class="custom">Отправить</button>
            </div>
        </div>

    </form>
</div>
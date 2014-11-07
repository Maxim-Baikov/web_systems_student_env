<div>
    <ul>
        <li>
            <h2>Регистрация нового пользователя</h2>
            <span class="require-notification">* обозначены обязательные поля</span>
        </li>
        <li>
            <label for="login">Придумайте логин</label>
            <input type="text" name="email" maxlength="15" required placeholder="Имя пользователя">
            <span class="form-hint">Не более 15 символов</span>
        </li>
        <li>
            <label for="password">Придумайте пароль</label>
            <input type="password" name="password" maxlength="15" required placeholder="Пароль">
            <span class="form-hint">Не более 15 символов</span>
        </li>
        <li>
            <button class="submit1" type="submit" value="Зарегистрироваться">Зарегистрироваться</button>
        </li>
    </ul>
</div>

<?php extract($data); ?>
<?php if ($login_status == "access_granted") { ?>
    <p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif ($login_status == "access_denied") { ?>
    <p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
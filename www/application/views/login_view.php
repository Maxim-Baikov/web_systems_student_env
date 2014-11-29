<div class="form-holder form-container form-mailing2">
    <div class="shell">
        <form action="" method="post" class="add-form">
            <h6>Введите данные для входа на сайт</h6>

            <div class="row">
                <div class="field-holder form-row">
                    <input type="text" class="field validate" id="field3" placeholder="Email*" title="email"
                           name="email" required/>
                </div>
                <div class="field-holder form-row">
                    <input type="password" class="field validate" id="field4" placeholder="Password*" title="password"
                           name="password" required/>
                </div>
            </div>
            <div class="buttons">
                <button class="button" type="submit">Войти</button>
            </div>

        </form>
    </div>
</div>
<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
    <p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
    <p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
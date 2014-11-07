<?php extract($data); ?>
<?php if ($login_status == "access_granted") { ?>
    <p style="color:green">Вы успешно зарегистрированы! Теперь вы можете зайти на сайт</p>
<?php } elseif ($login_status == "access_denied") { ?>
    <p style="color:red">Вы ввели не всю информацию, вернитесь назад и заполните все поля</p>
<?php } elseif ($login_status == "access_deni") { ?>
    <p style="color:red">Извините, введенный Вами логин уже зарегистирован.Введите другой логин</p>
<?php } elseif ($login_status == "access_den") { ?>
    <p style="color:red">Ошибка! Вы не зарегистрированы. Пожалуйста, пройдите регистрацию заново</p>
<?php } ?>
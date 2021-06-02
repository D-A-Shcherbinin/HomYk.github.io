<?php

?>
<!--=======================================
                LOGIN FORM
==========================================-->

<div class="login-form login-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="login-wrap">
                    <div class="log-title">Залогиньтесь</div>
                    <form action="" method="post" class="login-form">
                        <p><label for="email">Email</label></p>
                        <p><input type="text" name="email" placeholder="Type your email..." class="login-field"></p>

                        <p><label for="password">Пароль</label></p>
                        <p><input type="password" name="password" placeholder="Your password..." class="login-field"></p>
                        <a href="?p=reset" class="forget-btn">Таки забыли пароль?</a>

                        <p><label for="type">Тип</label></p>
                        <select name="type">
                            <option value="0">Выбрать</option>
                            <option value="1">Юзверь</option>
                            <option value="2">Админ</option>
                        </select>

                        <p><input type="submit" name="btnLogin" value="Login"></p>

                        <div>Незареганы?<a href="?p=registration" class="sign-up-btn">Сюда!</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

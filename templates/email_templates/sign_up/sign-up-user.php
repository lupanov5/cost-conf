<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=600">
    <!-- Заголовок -->
    <title>На сайте #SITE_NAME# запросили восстановление пароля</title>
    <? require_once '../_blocks/_style.php'; ?>
</head>
<body style="margin: 0; padding: 0; min-width: 600px; background-color: white; max-width: 100%;">
<table cellpadding="0" cellspacing="0"
       style="width: 100%; text-align: center; margin: 0; background-color: #F5F5F5; padding: 20px; min-width: 540px;">
    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0"
                   style="width: 600px; margin: 0 auto; padding: 30px 30px 25px; background-color: white;">
                <tr>
                    <td align="left" style="text-align: left;">
                        <!--Header-->
                        <?require_once '../_blocks/_header.php'; ?>
                        <!-- Заголовок, текст к заголовку-->
                        <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 0 auto;" class="table-lg">
                            <!-- Заголовок -->
                            <tr>
                                <td style="padding:30px 0 20px;margin:0;">
                                    <div class="h1 pb-10"><b> #USER_NAME#, благодарим за регистрацию!</b></div>
                                    <div>Вы зарегистрировались на сайте <a href="#SITE_LINK#" class="link">#SITE_NAME#</a>, добро пожаловать! Подтвердите вашу почту, нажав на кнопку ниже
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" class="pb-20">
                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" class="btn">
                                        <tbody>
                                        <tr>
                                            <td align="center" valign="middle" style="padding:12px 20px">
                                                <a  href="#LINK#" style="font-weight: 500;text-decoration:none;color:#ffffff;" target="_blank">Подтвердить почту</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- Основная информация -->
                        <table cellpadding="0" cellspacing="0"
                               class="table">
                            <tr valign="top">
                                <td colspan="2">
                                    <div style="max-width: 55%;" class="label">Если кнопка не работает, скопируйте эту
                                        ссылку и вставьте в адресную строку браузера
                                    </div>
                                    <a href="#LINK#" class="link"><b>#LINK#</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" bgcolor="transparent"
                                    style="height:40px;background-color:transparent!important;"></td>
                            </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 0 auto; background-color: #F5F5F5;">
                            <tr>
                                <td>
                                    <!-- Контакты -->
                                    <?require_once '../_blocks/_contacts.php'; ?>
                                    <!-- Соц сети -->
                                    <?require_once '../_blocks/_socials.php'; ?>
                                    <!-- Футер -->
                                    <?require_once '../_blocks/_footer.php'; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

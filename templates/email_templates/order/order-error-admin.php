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
                                    <div class="h1 pb-10"><b>На сайте #SITE_NAME# во время заказа <span class="error">произошла ошибка</span></b></div>
                                    <div class="text text-lg">Заказ №#NUMBER#</div>
                                </td>
                            </tr>
                        </table>
                        <!-- Основная информация -->
                        <table cellpadding="0" cellspacing="0" class="table">
                            <tr valign="top">
                                <td style="padding-bottom: 20px; width:230px;" width="230px">
                                    <div class="label">Дата и время</div>
                                    <b>#DATE#</b>
                                </td>
                                <td style="padding-bottom: 20px; width:230px;" width="230px">
                                    <div class="label">Заказчик</div>
                                    <b>#USER_NAME#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-bottom: 20px; width:230px;" width="230px">
                                    <div class="label">Телефон</div>
                                    <a href="tel:#PHONE#" class="link"><b>#PHONE#</b></a>
                                </td>
                                <td style="padding-bottom: 20px; width:230px;" width="230px">
                                    <div class="label">E-mail</div>
                                    <a href="mailto:#EMAIL#" class="link"><b>#EMAIL#</b></a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" style="padding-bottom: 20px;">
                                    <div class="label">Город</div>
                                    <b>#CITY#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2">
                                    <div class="label">Вопрос</div>
                                    <span>#COMMENT#</span>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" bgcolor="transparent" style="height:40px;background-color:transparent!important;"></td>
                            </tr>
                        </table>
                        <!-- Заказ -->
                        <?require_once '../_blocks/_order-list.php'; ?>
                        <!--Информация о заказе-->
                        <table cellpadding="0" cellspacing="0" class="table">
                            <tr valign="top">
                                <td style="padding-bottom: 20px;">
                                    <div class="label">Способ доставки</div>
                                    <b>#DEL_TYPE#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-bottom: 20px;">
                                    <div class="label">Адрес доставки</div>
                                    <b>#DEL_ADDRESS#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                    <div class="label">Информация об оплате</div>
                                    <b>#DEL_INFO#</b>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" bgcolor="transparent" style="height:40px;background-color:transparent!important;"></td>
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

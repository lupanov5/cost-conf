<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=600">
    <!-- Заголовок -->
    <title>На сайте #SITE_NAME# запросили восстановление пароля</title>
    <? require_once '../_blocks/_style.php';?>
</head>
<body style="margin: 0; padding: 0; min-width: 600px; background-color: white; max-width: 100%;">
<table cellpadding="0" cellspacing="0"
       style="width: 100%; text-align: center; margin: 0; background-color: #F5F5F5; padding: 20px; min-width: 600px;">
    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0"
                   style="width: 600px; margin: 0 auto; padding: 30px 30px 25px; background-color: white;">
                <tr>
                    <td align="left">
                        <!--Header-->
                        <?require_once '../_blocks/_header.php'; ?>
                        <!-- Заголовок, текст к заголовку-->
                        <table cellpadding="0" cellspacing="0" style="padding:30px 0 20px;" class="table-lg table-width">
                            <!-- Заголовок -->
                            
                            <tr>
                                <td>
                                    <div class="h1" style="margin-bottom: 10px;"><b>#USER_NAME# !</b></div>
                                    <b class="error" style="margin-bottom: 5px;">Произошла ошибка при заказе на сайте #SITE_NAME#</b>
                                    <div style="margin-bottom: 20px;">Заказ №#NUMBER#</div>
                                    <div> При заказе на сайте #SITE_NAME# произошла ошибка. Свяжитесь с нами по номеру
                                        <a href="tel:#MAIN_PHONE#" class="link">#PHONE#</a>, или <a href="#MAIN_EMAIL" class="link">напишите нам</a>, мы поможем разобраться в проблеме и сделать заказ</div>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" class="table table-width">
                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" class="btn">
                                        <tbody>
                                        <tr>
                                            <td align="center" valign="middle" style="padding:12px 20px">
                                                <a  href="#LINK#" style="font-weight: 500;text-decoration:none;color:#ffffff;" target="_blank">Перейти к оплате</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" bgcolor="transparent" style="height:40px;background-color:transparent!important;"></td>
                            </tr>
                        </table>
                        <!-- Основная информация -->
                        <table cellpadding="0" cellspacing="0" class="table table-width">
                            <tr valign="top">
                                <td style=" width:230px;" width="230px" class="pb-20">
                                    <div class="label">Дата и время</div>
                                    <b>#DATE#</b>
                                </td>
                                <td  width="230px" class="pb-20">
                                    <div class="label">Заказчик</div>
                                    <b>#USER_NAME#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-bottom: 20px; width:230px;" width="230px" class="pb-20">
                                    <div class="label">Телефон</div>
                                    <a href="tel:#PHONE#" class="link"><b>#PHONE#</b></a>
                                </td>
                                <td  style="width:230px;" width="230px" class="pb-20">
                                    <div class="label">E-mail</div>
                                    <a href="mailto:#EMAIL#" class="link"><b>#EMAIL#</b></a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" class="pb-20">
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
                        <?require_once '../_blocks/_order-info-user.php'; ?>

                        <table cellpadding="0" cellspacing="0" style="background-color: #F5F5F5;" class="table table-width">
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

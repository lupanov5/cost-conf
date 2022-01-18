<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=600">
    <!-- Заголовок -->
    <title>На сайте #SITE_NAME# запросили восстановление пароля</title>
    <style>
        .head {
            padding: 20px 0;
            background-color: #F5F5F5;
        }
        .table {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 16px;
            color: #2D2D2D;
        }
        .table-width {
            width: 100%;
            margin: 0 auto;
        }
        .table-lg {
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 25px;
            color: #2D2D2D;
        }
        .prod-price {
            padding: 0;
            margin: 0;
            font-size: 18px;
            line-height:18px;
        }
        .prod-article {
            color:#B5B5B5;
            padding: 0 0 3px;
            margin: 0;
            font-size: 13px;
        }
        .prod-quantity {
            color:#A0A0A0;
            padding: 0;
            margin: 0;
            font-size: 15px;
            line-height:15px;
        }
        .socials-el {
            padding: 0 8px;
        }
        .socials-img {
            width: 30px;
            height: 30px;
            border: none;
        }
        .contacts-link {
            color: red;
        }
        .h1 {
            font-size: 30px; line-height: 1.2; color: #2D2D2D;
        }
        .h2 {
            font-size: 25px; line-height: 1.2; color: #2D2D2D;
        }
        .text {
            font-size: 14px;
            line-height: 16px;
            color: #2D2D2D;
        }
        .text_med {
            font-size: 16px;
            line-height: 21px;
        }
        .text-lg {
            font-size: 18px;
            line-height: 25px;
        }
        .label {
            font-size: 13px;
            color: #A0A0A0;
            padding-bottom: 5px;
        }
        .note {
            font-size: 13px;
            color: #A0A0A0;
            line-height: 130%;
        }
        .link {
            color: red;
        }
        .error {
            color: #CC0F0F;
        }
        .success {
            color: #5C9F05;
        }

        .btn {
            background-color: red;
            font-family:Arial, sans-serif;
            font-size:16px;
            font-weight: 500;
        }
        .pt-20  {
            padding-top: 20px;
        }
        .pb-5 {
            padding-bottom: 5px;
        }
        .pb-10 {
            padding-bottom: 10px;
        }
        .pb-15 {
            padding-bottom: 15px;
        }
        .pb-20 {
            padding-bottom: 20px;
        }
        .pb-35  {
            padding-bottom: 35px;
        }
        .pb-40  {
            padding-bottom: 40px;
        }
    </style>
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
                                    <div class="h1 pb-10"><b>На сайте #SITE_NAME# был заказан обратный звонок </b></div>
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
                                    <div class="label">Пользователь</div>
                                    <b>#USER_NAME#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-bottom: 20px; width:230px;" width="230px">
                                    <div class="label">Телефон</div>
                                    <a href="tel:#PHONE#" class="link"><b>#PHONE#</b></a>
                                </td>
                                <td colspan="2" width="230px">
                                    <div class="label">Город</div>
                                    <b>#CITY#</b>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" style="padding-bottom: 20px;">
                                    <div class="label">Страница</div>
                                    <a href="#PAGE#" class="link"><b>#PAGE#</b></a>
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
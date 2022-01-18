<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=600">
    <!-- Заголовок -->
    <title>На сайте #SITE_NAME# откликнулись на вакансию </title>
    <?require_once '_style.php'; ?>
</head>
<body style="margin: 0; padding: 0; min-width: 600px; background-color: white; max-width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%; text-align: center; margin: 0; background-color: #F5F5F5; padding: 20px; min-width: 600px;">
    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0" class="table" style="width: 600px; margin: 0 auto; padding: 30px 30px 25px; background-color: white;">
                <tr>
                    <td align="left" style="text-align: left;">
                        <!--Header-->
                        <?require_once '_header.php'; ?>
                        <!-- Заголовок, текст к заголовку-->
                        <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 0 auto;">
                            <!-- Заголовок -->
                            <tr>
                                <td style="padding:30px 0 20px;margin:0;">
                                    <div class="h1"><b>На сайте #SITE_NAME# новый заказ</b></div>
                                    <div class="text">Заказ № #NUMBER#</div>
                                </td>
                            </tr>
                        </table>
                        <?require_once '_info.php'; ?>
                        <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 0 auto; background-color: #F5F5F5;">
                            <tr>
                                <td>
                                    <!-- Контакты -->
                                    <?require_once '_contacts.php'; ?>
                                    <!-- Соц сети -->
                                    <?require_once '_socials.php'; ?>
                                    <!-- Футер -->
                                     <?require_once '_footer.php'; ?>
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

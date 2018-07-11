<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
    <title>NixMoney Transaction (WWW.NIXMONEY.COM - версия для примера)</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<h2>(www.nixmoney.com - версия для примера)
    NixMoney Transaction, простейший пример.</h2>
<body bgcolor="#ffffff" text="#000000" link="#cbda74" vlink="#808040" alink="#808040" class="container">
<form action='https://www.nixmoney.com/merchant.jsp' method='post'>
    <div class="form-group">

    <label><input type='text' name='PAYEE_ACCOUNT'
                  value='U27255112470993
'/> - PAYEE_ACCOUNT Номер счета, на который будут приниматься средства: </label>
    <label><input type='text' name='PAYEE_NAME' value='interkassa-test'/> - PAYEE_NAME Наименование, которое будет указана во время приема
        средств на принимающей стороне.: </label>
    <label><input type='text' name='PAYMENT_AMOUNT' value='0.01'/> - PAYMENT_AMOUNT Сумма к переводу (XXXX.XX): </label>
        <p><input type='text' name='PAYMENT_FROM' value='interkassa-sender'/> - PAYMENT_SENDER whoe sends </p>
    <p><input type='text' name='PAYMENT_URL' value='https://sheltered-citadel-81659.herokuapp.com/ok.php'> - PAYMENT_URL URL на который будет перенаправлен браузер клиента в
        случае успешной транзакции.: </p>
    <p><input type='text' name='NOPAYMENT_URL' value='https://sheltered-citadel-81659.herokuapp.com/no.php'/> - NOPAYMENT_URL URL на который будет перенаправлен браузер клиента в
        случае неудачной транзакции (или отмены транзакции): </p>
    <p><input type='text' name='BAGGAGE_FIELDS'/> - BAGGAGE_FIELDS Перечисленные через пробел поля, которые необходимо
        передать во все подтверждающие URL: STATUS_URL,
        PAYMENT_URL, NOPAYMENT_URL (например: «NAME
        SOMEFIELD ANY»): any </p>
    <p><input type='text' name='PAYMENT_ID' value="<?php echo rand(1000000,9999999);?>"/> - PAYMENT_ID (опционально)
        Номер платежного требования. Уникален в
        пределах одного принимающего счета.: </p>
    <p><input type='text' name='STATUS_URL' value='https://sheltered-citadel-81659.herokuapp.com/status.php'/> - STATUS_URL (опционально)
        URL на который будет отправлена нотификация
        об успешном проведении транзакции.:
    </p>
    <p><input type='text' name='SUGGESTED_MEMO' value='memo'/> - SUGGESTED_MEMO (опционально)
        Назначение платежа.: </p>
    <p><input type='text' name='PAYER_EMAIL'/> - PAYER_EMAIL (опционально)
        Производить оплату только с кошельков
        зарегистрированных на данный email-адрес (при авторизации
        у пользователя не будет возможности изменить выбранный
        email-адрес).: </p>
    <p><input type='submit'  class="btn btn-success"/></p>
    </div>
</form>

</body>
</html>
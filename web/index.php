<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="interkassa-verification" content="e60b9d2ba474deddebd30869305e5442" />
    <title>shelter index.php</title>
</head>
<body>
<?php

echo 'this is shelter';
error_log("index.php launched!");
?>
<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
    <input type="hidden" name="ik_co_id" value="5b4736333d1eaf7c298b456b" />
    <input type="hidden" name="ik_pm_no" value="ID_4233" />
    <input type="hidden" name="ik_am" value="100.00" />
    <input type="hidden" name="ik_cur" value="UAH" />
    <input type="hidden" name="ik_desc" value="ticket to club" />
    <input type="submit" value="Pay">
</form>
</body>
</html>

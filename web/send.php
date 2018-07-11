<?php 

$url = 'https://www.nixmoney.com/send?PASSPHRASE='.urlencode($_POST['PASSPHRASE']).'&PAYER_ACCOUNT='.urlencode($_POST['PAYER_ACCOUNT']).'&PAYEE_ACCOUNT='.urlencode($_POST['PAYEE_ACCOUNT']).'&AMOUNT='.urlencode($_POST['AMOUNT']).'&MEMO='.urlencode($_POST['MEMO']);

$f=@fopen($url, 'rb');

if($f===false){
   echo 'error openning url';
}
?>
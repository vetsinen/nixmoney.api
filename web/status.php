<?php 

define("PASSWORD","speaknfun");

/*
PAYMENT_ID:PAYEE_ACCOUNT:PAYMENT_AMOUNT:PAYMENT_UNITS:PAYMENT_BATCH_NUM:PAYER_ACCOUNT:PasswordMD5:TIMESTAMPGMT
*/

  $string=
     $_POST['PAYMENT_ID'].':'.$_POST['PAYEE_ACCOUNT'].':'.$_POST['PAYMENT_AMOUNT'].':'.$_POST['PAYMENT_UNITS'].':'.
     $_POST['PAYMENT_BATCH_NUM'].':'.$_POST['PAYER_ACCOUNT'].':'.strtoupper(md5(PASSWORD)).':'.$_POST['TIMESTAMPGMT'];
     
$v2key=$_POST['V2_HASH'];
$hash=strtoupper(md5($string));
  
if($hash==$v2key) error_log( "we got bablo");
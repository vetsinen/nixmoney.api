<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <script src="../bootstrap.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balance</title>
</head>
<body>

<script>
    fetch('https://www.nixmoney.com/balance?ACCOUNTID=v.godzevich@interkassa.com&PASSPHRASE=intermarmelad', {'mode': 'no-cors'}).then(function(response) {
        return response.blob();
    }).then(function(myBlob) {
        //console.log('we got');
    });
</script>

</body>
</html>
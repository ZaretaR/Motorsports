<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>

    <h1>Bericht van {{ $data['naam'] }}</h1>
    <p>Email-adres van {{ $data['email'] }}</p>
    <hr>
    {{ $data['bericht'] }}

</body>

</html>

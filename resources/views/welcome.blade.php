<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('assets/global.css') }}>
    <title>Ninja Network</title>
</head>

<body>
    <h1>Welcome to the Ninja Network</h1>
    <p>CLick the buttom below to view the list of ninjas..</p>
    <a href="ninjas" class="btn">Find Ninjas!</a>
</body>

</html>

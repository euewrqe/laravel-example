<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
    <h1>Todos</h1>
    <hr />
    {{ $slot }}
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create page</h1>
    <form action="/myres" method="POST">
        @csrf
        firstname:<input type="text" name="firstname" value="">
        lastname:<input type="text" name="lastname" value="">
        email: <input type="text" name="email">
        {{-- <select name="email_suffix">
            <option value="economist.com">economist.com</option>
            <option value="google.it">google.it</option>
            <option value="economist.com">economist.com</option>
        </select> --}}
        <button>submit</button>
    </form>
</body>
</html>
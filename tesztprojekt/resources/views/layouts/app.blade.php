<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/hello">Hello</a></li>
                <li><a href="/profile/1">Admin user adatai</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>
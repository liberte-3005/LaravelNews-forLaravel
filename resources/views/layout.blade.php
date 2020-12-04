<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel News</title>
    <link
        rel="stylesheet" type="text/css"
        href="CSS/index.css" >
</head>
<body>
    <header>
        <div class="main-title">
            <a href="{{ url('') }}">
            Laravel News
            </a>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>
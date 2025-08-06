<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album Musik</title>
    <link rel="stylesheet" href="{{ asset('css/land.css') }}">
</head>
<body>

    <section>
        <div class="imagebg">
            <div class="header-buttons">
                <a href="{{ route('login') }}" class="btn">Login</a>
                <a href="{{ route('register') }}" class="btn">Register</a>
              </div>

            <div class="overlay"></div>
            <div class="content">
                Album Musik Asik
              </div>
        </div>
    </section>

</body>
</html>
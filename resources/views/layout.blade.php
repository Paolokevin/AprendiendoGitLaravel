<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="about" class="navbar-brand">About</a>
            <a href="contact" class="navbar-brand">Contract</a>
            <a href="portfolio" class="navbar-brand">Portfolio</a>
            <a href="formListPortfolio" class="navbar-brand">Listar Portafolio</a>
            <a href="home" class="navbar-brand">Home</a>
            <a href="formPersona" class="navbar-brand">Persona</a>
        </div>

    @yield('content')

</body>
</html>
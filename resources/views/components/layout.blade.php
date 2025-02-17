<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @yield('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap">
    <link rel="icon" href="{{ asset('img/elizashootwhite.png') }}" type="image/png"> <!-- Adiciona a tag favicon -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/elizashootwhite.png') }}" alt="Eliza Shoot">
        </a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    {{ $slot }}

    <br><br>
    <br><br>
    <footer class="text-center mt-4">
        <p>© 2025 ElizaShoot. Todos os direitos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

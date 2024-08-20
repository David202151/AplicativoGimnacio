<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fitnessstudio Control</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

       <!-- Styles -->
       <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background: linear-gradient(135deg, #1e1e2f, #383838); /* Gradiente desde gris oscuro a un tono medio */
                color: #fff;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .header {
                background-color: #2b2b3c;
                padding: 7rem;
                text-align: center;
                border-radius: 10px;
                margin-bottom: 2rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .header h1 {
                font-size: 2rem;
                margin-bottom: 0.5rem;
                color: #ff7b00; /* Color que combina con el logo */
            }

            .header p {
                font-size: 1.25rem;
                color: #ff7b00; /* Color que combina con el logo */
            }

            .header img {
                max-width: 300px; /* Ajusta el tamaño del logo */
                height: auto;
                margin-bottom: 1rem;
            }

            .auth-links {
                margin-top: 1rem;
            }

            .auth-links a {
                margin-right: 1rem;
                color: #ff7b00; /* Color que combina con el logo */
                font-weight: 600;
            }

            .main-content {
                text-align: center;
                max-width: 600px;
            }

            .cta h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
                color: #ff7b00; /* Color que combina con el logo */
            }

            .cta p {
                font-size: 1.25rem;
                margin-bottom: 2rem;
                color: #f9f9f9;
            }

            .cta button {
                background-color: #ff7b00;
                padding: 1rem 2rem;
                border: none;
                border-radius: 5px;
                color: white;
                font-size: 1rem;
                cursor: pointer;
            }

            .cta button:hover {
                background-color: #cc6500; /* Un tono más oscuro para el hover */
            }
        </style>

    </head>
    <body>
        <header class="header">
            <img src="https://www.dropbox.com/scl/fi/vpge4ccjzxk5is8fc0pny/logo2.jpg?rlkey=7gu2dyfgvbo3g6bqhsjxk5ofl&st=77z4iqf1&raw=1" alt="Descripción de la imagen" class="logo mx-auto h-12 w-auto">
            <h1>Entrena y Aprende</h1>
            <p>En casa con GymVirtual para ser tu mejor versión</p>
            @if (Route::has('login'))
                <div class="auth-links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>

        <div class="main-content">
            <div class="cta">
                <h2>Entrena desde casa con nosotros</h2>
                <p>Únete a la comunidad de GymVirtual y comienza tu transformación hoy mismo.</p>
                <button onclick="window.location.href='{{ route('register') }}'">Comenzar ahora</button>
            </div>
        </div>
    </body>
</html>

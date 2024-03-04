<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/estils.css" type="text/css">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <form method="get">

                <h1>Articles</h1>
                <p>Numero de pàgines:</p>
                <select name="nArticles" onchange="this.form.submit()">
                    <option value="5" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 10 ? 'selected' : '' }}>10</option>
                    <option value="15" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 15 ? 'selected' : '' }}>15</option>
                    <option value="30" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 30 ? 'selected' : '' }}>30</option>
                    <option value="50" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ isset($_GET["nArticles"]) && $_GET["nArticles"] == 100 ? 'selected' : '' }}>100</option>
                </select>
                <button type="button" value="log-in" onclick="window.location.href='login.view.php'" class="botonesAD">Log-in</button>
                <button type="button" value="register" onclick="window.location.href='register.view.php'">Register</button>
                <section class="articles">
                    <ul>
                        <!-- Mostrar los artículos -->
                        {{-- @php consultaArticles(); @endphp --}}
                    </ul>
                </section>
        
                <section class="paginacio">
                    <!-- Mostrar los botones de la paginación -->
                    {{-- @php mostrarPagines(); @endphp --}}
                </section>
            </form>

            </div>
        </div>
    </body>
</html>

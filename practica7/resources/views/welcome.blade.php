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
        <style>
            /*Angel Tarensi*/
            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                background: #e9e9e9;
                color: #2e2e2e;
                font-family: 'Open Sans Condensed', sans-serif;
            }

            .contenidor {
                width: 90%;
                max-width: 1000px;
                margin: auto; 
            }

            h1 {
                margin: 20px 0;
                text-align: center;
                font-family: 'Open Sans Condensed', sans-serif;
                color: #1b4a81;
                font-weight: black;
            }

            .contenidor .articles {
                margin-bottom: 20px;
            }

            .contenidor .articles ul {
                list-style: none;
            }

            .contenidor .articles ul li {
                padding:15px 10px;
                border-bottom: 1px solid #c8c8c8;
            }

            .paginacio ul {
                list-style: none;
            }

            .paginacio ul li {
                display: inline-block;
                margin-right: 10px; 
            }

            .paginacio ul .active a {
                background: #2580b4;
            }

            .paginacio ul .disabled {
                background: #c2bfbf;
                display: inline-block;
                font-family: 'Open Sans Condensed', sans-serif;
                padding: 2px 2px;
                cursor:not-allowed;
                color:#fff;
                text-decoration: none;
                display: none;
            }

            .paginacio ul li a {
                display: inline-block;
                font-family: 'Open Sans Condensed', sans-serif;
                padding: 10px 20px;
                background: #424242;
                color:#fff;
                text-decoration: none;
            }

            .paginacio ul li a:hover {
                text-decoration: none;
                background: #399228;
            }

            .botonesAD{
                margin-left: 84%;
            }
            .botonTS{
                margin-left: 40%;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f7f7ff;
                padding: 10px;
                margin: 0;
            }
            ._container{
                max-width: 400px;
                background-color: #ffffff;
                padding: 20px;
                margin: 0 auto;
                border: 1px solid #cccccc;
                border-radius: 2px;
            }
            ._container.btn{
                text-align: center;
            }
            .heading{
                text-align: center;
                color: #4d4d4d;
                text-transform: uppercase;
            }
            .login-with-google-btn {
                transition: background-color 0.3s, box-shadow 0.3s;
                padding: 12px 16px 12px 42px;
                border: none;
                border-radius: 3px;
                box-shadow: 0 -1px 0 rgb(0 0 0 / 4%), 0 1px 1px rgb(0 0 0 / 25%);
                color: #ffffff;
                font-size: 14px;
                font-weight: 500;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
                background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
                background-color: #4a4a4a;
                background-repeat: no-repeat;
                background-position: 12px 11px;
                text-decoration: none;
                position: relative;
            }
            .login-with-google-btn:hover {
                box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.04), 0 2px 4px rgba(0, 0, 0, 0.25);
            }
            .login-with-google-btn:active {
                background-color: #000000;
            }
            .login-with-google-btn:focus {
                outline: none;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.04), 0 2px 4px rgba(0, 0, 0, 0.25), 0 0 0 3px #c8dafc;
            }
            .login-with-google-btn:disabled {
                filter: grayscale(100%);
                background-color: #ebebeb;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.04), 0 1px 1px rgba(0, 0, 0, 0.25);
                cursor: not-allowed;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f7f7ff;
                padding: 10px;
                margin: 0;
            }
            ._container{
                max-width: 400px;
                background-color: #ffffff;
                padding: 20px;
                margin: 0 auto;
                border: 1px solid #cccccc;
                border-radius: 2px;
            }
            .heading{
                text-align: center;
                color: #4d4d4d;
                text-transform: uppercase;
            }
            ._img{
                overflow: hidden;
                width: 100px;
                height: 100px;
                margin: 0 auto;
                border-radius: 50%;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            }
            ._img > img{
                width: 100px;
                min-height: 100px;
            }
            ._info{
                text-align: center;
            }
            ._info h1{
                margin:10px 0;
                text-transform: capitalize;
            }
            ._info p{
                color: #555555;
            }
            ._info a{
                display: inline-block;
                background-color: #E53E3E;
                color: #fff;
                text-decoration: none;
                padding:5px 10px;
                border-radius: 2px;
                border: 1px solid rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <button type="button"  onclick="window.location.href='{{ route('login') }}'" class="botonesAD">Log in</button>
                        
                        @if (Route::has('register'))
                            <button type="button" onclick="window.location.href='{{ route('register') }}'" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</button>
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
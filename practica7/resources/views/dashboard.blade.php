<head>
    <style>
        svg{
            width: 100px;
            height: 100px;
            fill: #E53E3E;
        }
        .articles {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .articles ul {
            list-style-type: none;
            padding: 0;
        }

        .articles li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .articles li::before {
            content: "\2022"; /* Código Unicode para un punto de lista */
            color: #007bff; /* Color del punto de la lista */
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .articles li span {
            font-weight: bold;
        }

        .articles li:nth-child(odd) {
            background-color: #f7f7f7; /* Cambiar el color de fondo de cada otro elemento para dar un efecto de zebra */
        }
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination li a,
        .pagination li span {
            padding: 8px 12px;
            border: 1px solid #007bff;
            color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination li a:hover,
        .pagination li span.current {
            background-color: #007bff;
            color: #ffffff;
        }

        .pagination .active span {
            background-color: #007bff;
            color: #ffffff;
            pointer-events: none;
        }
    </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--Hacer que el action apunte a articlesController.php-->
                    <form  method="GET">
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
                    </form>
                    <section class="articles">
                        <ul>
                            @foreach($articles as $article)
                            <li>
                                {{ $article->id }}
                                {{ $article->article }}
                            </li>
                            @endforeach
                        </ul>
                    </section>
                    <div class="pagination">
                        <!-- Mostrar los botones de la paginación -->
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

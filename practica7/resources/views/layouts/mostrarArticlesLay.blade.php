<section class="articles" style="position: relative">
    <ul>
        @foreach($articles as $article)
        <li>
            {{ $article->id }}
            {{ $article->article }}
        </li>
        @endforeach
    </ul>
</section><br>
<div class="pagination">
    <!-- Mostrar los botones de la paginación -->
    {{ $articles->appends(['numArt' => $numArt])->links() }}
</div>
<section class="articles" style="position: relative">
    <ul>
        @forelse($articles as $article)
        <li>
            {{ $article->id }}
            {{ $article->article }}
        </li>
        @empty
            <p style="display: flex; justify-content: center; align-items: center; color:red;">No hay articulos</p>
        @endforelse
    </ul>
</section><br>
<div class="pagination">
    <!-- Mostrar los botones de la paginación -->
    {{ $articles->appends(['numArt' => $numArt])->links() }}
</div>
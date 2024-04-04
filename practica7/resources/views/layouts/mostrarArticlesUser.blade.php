<section class="articles" style="position: relative">
    <!--Button for add new article-->
    <button class="btn btn-primary" style="border: 1px solid black; background-color:rgb(0, 89, 255); color:white" onclick="location.href='{{ route('articles.create') }}'">Añadir artículo</button>
    <ul>
        @forelse($articles as $article)
        <li>
            {{ $article->id }}
            {{ $article->article }}
            <!--Poner botones de modificar y eliminar con sus respectivos ids-->
            <button class="btn btn-primary" onclick="location.href='{{ route('articles.edit', $article->id) }}'" style="border: 1px solid black; background-color:rgb(0, 89, 255); color:white">Modificar</button>
            <form class="deleteForm" action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" style="background-color:red; color:white; border:1px solid black">Eliminar</button>
            </form>            
            
            <script>
                document.querySelectorAll('.deleteForm').forEach(form => {
                    form.addEventListener('submit', function(event) {
                        var confirmDelete = confirm('¿Estás seguro de que deseas eliminar este artículo?');
                        if (!confirmDelete) {
                            event.preventDefault(); // Evita que se envíe el formulario si el usuario cancela la eliminación
                        }
                    });
                });
            </script>
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
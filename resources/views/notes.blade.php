@extends('layout')
@section('title', 'Listado de Notas')
@section('content')
<main class="content">
    <div class="cards">
        <div class="card">
            @forelse ($notes as $note)
            <div class="notes__item card shadow-sm">
                <div class="card-body">
                    <h4>{!! $note->title !!}</h4>
            
                    <p>
                        {!! $note->content !!}
                    </p>
                    <form method="POST" action="{{url('notas/'.$note->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">
                        Eliminar Nota
                    </button>
                    </form>
                </div>
        
                <footer class="card-footer">
                    <a href="{{ route('notes.edit', ['id' => $loop->iteration]) }}" class="action-link action-edit">
                        <i class="icon icon-pen"></i>
                    </a>
                    <a class="action-link action-delete">
                        <i class="icon icon-trash"></i>
                    </a>
                </footer>
            </div>
            @empty
                <p>No has agregado ninguna nota hasta el momento. <a href="{{ url('notes/crear') }}">Agregar nota</a></p>
            @endforelse
        </div>
        <!-- <div class="card">
            <div class="card-body">
                <h4>Cambia el formato de parámetros dinámicos</h4>
                <p>
                    Puedes colocar el siguiente código en el método <code>boot</code>
                    de <code>app/Providers/RouteServiceProvider.php</code>
                    para restringir cualquier parámetro de las rutas a un formato numérico:
                </p>

                <pre>Route::pattern('nombre-del-parametro', '\d+');</pre>

                <p>Puedes por supuesto usar otras expresiones regulares para restringir a otros formatos.</p>
            </div>

            <footer class="card-footer">
                <a class="action-link action-edit">
                    <i class="icon icon-pen"></i>
                </a>
                <a class="action-link action-delete">
                    <i class="icon icon-trash"></i>
                </a>
            </footer>
        </div> -->
    </div>
</main>
@endsection
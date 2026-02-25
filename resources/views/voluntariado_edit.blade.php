<form action="{{ route('voluntariado.update', $voluntariado->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" class="form-control"
           value="{{ old('nombre', $voluntariado->nombre) }}">

    <input type="email" name="gmail" class="form-control"
           value="{{ old('gmail', $voluntariado->gmail) }}">

    <input type="text" name="telefono" class="form-control"
           value="{{ old('telefono', $voluntariado->telefono) }}">

    <input type="text" name="tipo_voluntariado" class="form-control"
           value="{{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) }}">

    <textarea name="mensaje" class="form-control">{{ old('mensaje', $voluntariado->mensaje) }}</textarea>

    <button class="btn btn-primary mt-3">Guardar Cambios</button>
</form>
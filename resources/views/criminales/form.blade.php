@if (isset($criminal))
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ $criminal->Nombre }}" id="Nombre"><br>

    <label for="Apellidos">Apellidos</label>
    <input type="text" name="Apellidos" value="{{ $criminal->Apellidos }}" id="Apellidos"><br>

    <label for="DNI">DNI</label>
    <input type="text" name="DNI" value="{{ $criminal->DNI }}" id="DNI"><br>

    <label for="Altura">Altura</label>
    <input type="number" step="any" name="Altura" value="{{ $criminal->Altura }}" id="Altura"><br>

    <label for="Peso">Peso</label>
    <input type="number" step="any" name="Peso" value="{{ $criminal->Peso }}" id="Peso"><br>

    <label for="Edad">Edad</label>
    <input type="number" name="Edad" value="{{ $criminal->Edad }}" id="Edad"><br>

    <label for="Crimen">Crimen</label>
    <input type="text" name="Crimen" value="{{ $criminal->Crimen }}" id="Crimen"><br>

    <label for="Estado">Estado</label>
    <select name="Estado" id="estado">
        <option value="Capturado" {{ $criminal->Estado == 'Capturado' ? 'selected' : '' }}>Capturado</option>
        <option value="Busqueda y captura" {{ $criminal->Estado == 'Busqueda y captura' ? 'selected' : '' }}>Busqueda y
            captura</option>
        <option value="Fallecido" {{ $criminal->Estado == 'Fallecido' ? 'selected' : '' }}>Fallecido</option>
    </select><br>

    <label for="Recompensa">Recompensa</label>
    <input type="number" step="any" name="Recompensa" value="{{ $criminal->Recompensa }}" id="Recompensa"><br>

    <label for="Foto">Foto</label>
    <img src="{{ asset('storage').'/'.$criminal->Foto }}" alt="fotoCriminal" class="main__img">
    <input type="file" name="Foto" id="Foto"><br>

    <label for="Descripcion">Descripción</label>
    <textarea style="resize: none;" rows="10" cols="30" maxlength="500" name="Descripcion"
        id="Descripcion">{{ $criminal->Descripcion }}</textarea><br>

    <button id="guardar">Guardar</button>

@else
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"><br>

    <label for="Apellidos">Apellidos</label>
    <input type="text" name="Apellidos" id="Apellidos"><br>

    <label for="DNI">DNI</label>
    <input type="text" name="DNI" id="DNI"><br>

    <label for="Altura">Altura</label>
    <input type="number" step="any" name="Altura" id="Altura"><br>

    <label for="Peso">Peso</label>
    <input type="number" step="any" name="Peso" id="Peso"><br>

    <label for="Edad">Edad</label>
    <input type="number" name="Edad" id="Edad"><br>

    <label for="Crimen">Crimen</label>
    <input type="text" name="Crimen" id="Crimen"><br>

    <label for="Estado">Estado</label>
    <select name="Estado" id="estado">
        <option value="Capturado">Capturado</option>
        <option value="Busqueda y captura">Busqueda y
            captura</option>
        <option value="Fallecido">Fallecido</option>
    </select><br>

    <label for="Recompensa">Recompensa</label>
    <input type="number" step="any" name="Recompensa" id="Recompensa"><br>

    <label for="Foto">Foto</label>
    <input type="file" name="Foto" id="Foto"><br>

    <label for="Descripcion">Descripción</label>
    <textarea style="resize: none;" rows="10" cols="30" maxlength="500" name="Descripcion" id="Descripcion"></textarea><br>

    <button id="guardar">Añadir</button>


@endif
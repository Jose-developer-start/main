<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="nombre">Cantidad de productos</label>
            <input name="stock" class="form-control {{ $errors->has('quanty') ? 'is-invalid' : '' }}" id="nombre"
                type="number" min="0" value="{{ old('name', $inventario->stock) }}" aria-describedby="emailHelp"
                placeholder="Ingresar nombre">
            {!! $errors->first('name', '<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

        <div class="form-check">
            <input class="form-check-input {{ $errors->has('status') ? 'is-invalid' : '' }}" type="radio" name="status"
                id="status" value="1" checked>
            <label class="form-check-label" for="status">
                Activo
            </label>
            {!! $errors->first('name', '<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

        <div class="form-check">
            <input class="form-check-input {{ $errors->has('status') ? 'is-invalid' : '' }}" type="radio" name="status"
                id="status" value="0">
            <label class="form-check-label" for="status">
                Inactivo
            </label>
            {!! $errors->first('name', '<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
    </div>
</div>

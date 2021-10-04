<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}" id="nombre" type="text" value="{{ old('name',$rol->name) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('name','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
      </div>
    </div>
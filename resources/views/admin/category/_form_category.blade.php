<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}" id="nombre" type="text" min="0" value="{{ old('name', $category->name) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('name','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

      </div>
      <div class="col-lg-6">
        
        <div class="form-group">
          <label for="image">Imagen</label>
          <input class="form-control-file {{ $errors->has('image') ? 'is-invalid': '' }}" name="image" id="image" type="file" aria-describedby="fileHelp">
          {!! $errors->first('image','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
      </div>

      
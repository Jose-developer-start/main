<div class="row">
    <div class="col-lg-6">
      {{-- /////////////////////////////////////////////////////////--}}
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}" id="nombre" type="text" value="{{ old('name', $supplier->name) }}" aria-describedby="emailHelp" placeholder="Ingresar proveedor">
          {!! $errors->first('name','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
        {{-- /////////////////////////////////////////////////////////--}}
          <div class="form-group">
        <label for="direction">Dirrecion</label>
          <input name="direction" class="form-control {{ $errors->has('direction') ? 'is-invalid': '' }}" id="direction" type="text" value="{{ old('direction', $supplier->direction) }}" aria-describedby="emailHelp" placeholder="Ingresar direccion">
          {!! $errors->first('direction','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
            </div>
             <div class="col-lg-6">
        {{-- /////////////////////////////////////////////////////////--}}
   <div class="form-group">
 <label for="phone">Telefono</label>
          <input name="phone" class="form-control {{ $errors->has('direction') ? 'is-invalid': '' }}" id="phone" type="tel" value="{{ old('phone', $supplier->phone) }}" aria-describedby="emailHelp" placeholder="Ingresar telefono">
          {!! $errors->first('phone','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
        {{-- /////////////////////////////////////////////////////////--}}

        {{-- /////////////////////////////////////////////////////////--}}


        {{-- /////////////////////////////////////////////////////////--}}


        <div class="form-group">
          <label for="image">Imagen</label>
          <input class="form-control-file {{ $errors->has('image') ? 'is-invalid': '' }}" name="image" id="image" type="file" aria-describedby="fileHelp">
          {!! $errors->first('image','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
    </div>

      </div>
    </div>
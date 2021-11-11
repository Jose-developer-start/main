<div class="row">
    <div class="col-lg-12 ">
        <div class="form-group">
          <label for="brand_name">Nombre</label>
          <input name="brand_name" class="form-control {{ $errors->has('brand_name') ? 'is-invalid': '' }}" id="brand_name" type="text" min="0" value="{{ old('brand_name', $brand->brand_name) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('brand_name','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

      </div>

   
    

      
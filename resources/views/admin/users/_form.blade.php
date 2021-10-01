<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}" id="nombre" type="text" value="{{ old('name',$user->name) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('name','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
        <div class="form-group">
          <label for="nombre">Apellido</label>
          <input name="surname" class="form-control {{ $errors->has('surname') ? 'is-invalid': '' }}" id="nombre" type="text" value="{{ old('surname',$user->surname) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('surname','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
        <div class="form-group">
          <label for="description">Dirección</label>
          <textarea class="form-control {{ $errors->has('direction') ? 'is-invalid': '' }}" name="direction" id="description">{{ old('direction',$user->direction) }}</textarea>
          {!! $errors->first('direction','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

        <div class="form-group">
          <label for="nombre">Email</label>
          <input name="email" class="form-control {{ $errors->has('email') ? 'is-invalid': '' }}" id="nombre" type="text" value="{{ old('email',$user->name) }}" aria-describedby="emailHelp" placeholder="Ingresar nombre">
          {!! $errors->first('surname','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>

        <div class="form-group">
          <label for="image">Imagen</label>
          <input class="form-control-file {{ $errors->has('image') ? 'is-invalid': '' }}" name="photo" id="image" type="file" aria-describedby="fileHelp">
          {!! $errors->first('image','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
        </div>
    </div>
    <div class="col-lg-4 offset-lg-1">
        <div class="form-group">
          <label for="exampleSelect1">Roles</label>
          <select class="form-control {{ $errors->has('role_id') ? 'is-invalid': '' }}" id="brand" name="role_id">
            @if(isset($user->role->id))
            <option value="{{ $user->role->id }}" selected>{{ $user->role->name }}</option>
            @else
            <option value="">Seleccionar</option>
            @endif
            @foreach ($rols as $rol)
            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
            @endforeach
            
          </select>
        </div>

        <div class="old-img">
          @if (isset($user->photo))
            <h4>Imagen actual</h4>
            <img class="img-fluid" src="{{ asset('storage/'.$user->photo) }}" alt="">
          @endif
        </div>
      </div>
    </div>
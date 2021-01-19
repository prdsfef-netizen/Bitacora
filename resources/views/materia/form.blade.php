<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($materium->nombre) ? $materium->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Carrera') ? 'has-error' : ''}}">
    <label for="Carrera" class="control-label">{{ 'Carrera' }}</label>
    <input class="form-control" name="Carrera" type="text" id="Carrera" value="{{ isset($materium->Carrera) ? $materium->Carrera : ''}}" >
    {!! $errors->first('Carrera', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<div class="form-group {{ $errors->has('rfid') ? 'has-error' : ''}}">
    <label for="rfid" class="control-label">{{ 'Rfid' }}</label>
    <input class="form-control" name="rfid" type="text" id="rfid" value="{{ isset($docente->rfid) ? $docente->rfid : ''}}" >
    {!! $errors->first('rfid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($docente->nombre) ? $docente->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($docente->apellido) ? $docente->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_empleado') ? 'has-error' : ''}}">
    <label for="no_empleado" class="control-label">{{ 'No Empleado' }}</label>
    <input class="form-control" name="no_empleado" type="text" id="no_empleado" value="{{ isset($docente->no_empleado) ? $docente->no_empleado : ''}}" >
    {!! $errors->first('no_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<div class="form-group {{ $errors->has('rfid') ? 'has-error' : ''}}">
    <label for="rfid" class="control-label">{{ 'Rfid' }}</label>
    <input class="form-control" name="rfid" type="text" id="rfid" value="{{ isset($bitacora->rfid) ? $bitacora->rfid : ''}}" >
    {!! $errors->first('rfid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Materia') ? 'has-error' : ''}}">
    <label for="Materia" class="control-label">{{ 'Materia' }}</label>
    <input class="form-control" name="Materia" type="text" id="Materia" value="{{ isset($bitacora->Materia) ? $bitacora->Materia : ''}}" >
    {!! $errors->first('Materia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('horaentrada') ? 'has-error' : ''}}">
    <label for="horaentrada" class="control-label">{{ 'Horaentrada' }}</label>
    <input class="form-control" name="horaentrada" type="time" id="horaentrada" value="{{ isset($bitacora->horaentrada) ? $bitacora->horaentrada : ''}}" >
    {!! $errors->first('horaentrada', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('horasalida') ? 'has-error' : ''}}">
    <label for="horasalida" class="control-label">{{ 'Horasalida' }}</label>
    <input class="form-control" name="horasalida" type="time" id="horasalida" value="{{ isset($bitacora->horasalida) ? $bitacora->horasalida : ''}}" >
    {!! $errors->first('horasalida', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

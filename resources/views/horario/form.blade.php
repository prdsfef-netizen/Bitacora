<div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    <label for="hora" class="control-label">{{ 'Hora' }}</label>
    <input class="form-control" name="hora" type="time" id="hora" value="{{ isset($horario->hora) ? $horario->hora : ''}}" >
    {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

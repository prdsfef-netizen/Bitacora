<div class="form-group {{ $errors->has('tipo_reporte') ? 'has-error' : ''}}">
    <label for="tipo_reporte" class="control-label">{{ 'Tipo Reporte' }}</label>
    <input class="form-control" name="tipo_reporte" type="text" id="tipo_reporte" value="{{ isset($reporte->tipo_reporte) ? $reporte->tipo_reporte : ''}}" >
    {!! $errors->first('tipo_reporte', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Asunto') ? 'has-error' : ''}}">
    <label for="Asunto" class="control-label">{{ 'Asunto' }}</label>
    <input class="form-control" name="Asunto" type="text" id="Asunto" value="{{ isset($reporte->Asunto) ? $reporte->Asunto : ''}}" >
    {!! $errors->first('Asunto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

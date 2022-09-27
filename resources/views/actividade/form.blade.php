<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $actividade->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::select('responsables_id',$responsable, $actividade->responsables_id, ['class' => 'form-control' . ($errors->has('responsables_id') ? ' is-invalid' : ''), 'placeholder' => 'Select..']) }}
            {!! $errors->first('responsables_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estados_actividades_id', $actividade->estados_actividades_id, ['class' => 'form-control' . ($errors->has('estados_actividades_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingresado']) }}
            {!! $errors->first('estados_actividades_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('categorias_id',$categoria, $actividade->categorias_id, ['class' => 'form-control' . ($errors->has('categorias_id') ? ' is-invalid' : ''), 'placeholder' => 'Select']) }}
            {!! $errors->first('categorias_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a type="button"  href="{{ route('actividades.index') }}" class="btn btn-dark">Volver</a>

    </div>
</div>
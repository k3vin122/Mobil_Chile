@extends('layouts.base')

@section('template_title')
    {{ $bitacora->name ?? 'Show Bitacora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bitacora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bitacoras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $bitacora->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bitacora->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dependecia:</strong>
                            {{ $bitacora->dependecia }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Sistema:</strong>
                            {{ $bitacora->nombre_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $bitacora->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura:</strong>
                            {{ $bitacora->cobertura }}
                        </div>
                        <div class="form-group">
                            <strong>Ambiente Servidor:</strong>
                            {{ $bitacora->ambiente_servidor }}
                        </div>
                        <div class="form-group">
                            <strong>Ambiente Web:</strong>
                            {{ $bitacora->ambiente_web }}
                        </div>
                        <div class="form-group">
                            <strong>Compatibilidad Servidor:</strong>
                            {{ $bitacora->compatibilidad_servidor }}
                        </div>
                        <div class="form-group">
                            <strong>Compatibilidad Web:</strong>
                            {{ $bitacora->compatibilidad_web }}
                        </div>
                        <div class="form-group">
                            <strong>Desarrollado:</strong>
                            {{ $bitacora->desarrollado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Responsable:</strong>
                            {{ $bitacora->id_responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Em Responsable:</strong>
                            {{ $bitacora->nombre_em_responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $bitacora->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Perfil:</strong>
                            {{ $bitacora->perfil }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.base')
@section('template_title')
    {{ $actividade->name ?? 'Show Actividade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Actividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $actividade->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Responsables Id:</strong>
                            {{ $actividade->responsables_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estados Actividades Id:</strong>
                            {{ $actividade->estados_actividades_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categorias Id:</strong>
                            {{ $actividade->categorias_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

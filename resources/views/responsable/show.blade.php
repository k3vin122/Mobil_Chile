@extends('layouts.base')
@section('template_title')
    {{ $responsable->name ?? 'Show Responsable' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Responsable</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('responsables.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $responsable->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $responsable->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $responsable->cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

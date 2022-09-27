@extends('layouts.app')

@section('template_title')
    {{ $ayuda->name ?? 'Show Ayuda' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Info Ayuda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ayudas.index') }}"> Salir </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $ayuda->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $ayuda->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $ayuda->Fono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

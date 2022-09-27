@extends('layouts.app')

@section('template_title')
    {{ $politica->name ?? 'Show Politica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Politica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('politicas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

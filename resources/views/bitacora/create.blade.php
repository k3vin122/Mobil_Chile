@extends('layouts.base')

@section('template_title')
    Create Bitacora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div  style="background-color:#BBB3B2" class="card-header">
                        <span class="card-title">Datos de la solicitud</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bitacoras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('bitacora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

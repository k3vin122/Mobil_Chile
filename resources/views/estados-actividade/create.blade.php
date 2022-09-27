@extends('layouts.base')
@section('template_title')
    Create Estados Actividade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Estados Actividade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estados-actividades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estados-actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

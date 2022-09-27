@extends('layouts.app')

@section('template_title')
Mesa De Ayuda
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ayudas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ayuda.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

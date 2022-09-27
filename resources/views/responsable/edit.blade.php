@extends('layouts.base')
@section('template_title')
    Update Responsable
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Responsable</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('responsables.update', $responsable->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('responsable.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

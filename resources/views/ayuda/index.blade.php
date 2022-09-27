@extends('layouts.app')

@section('template_title')
Ayuda
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Casos Pendientes </span>

                        <div class="float-right">
                            <a href="{{ route('ayudas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo Caso') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th style="background-color: rgb(102, 255, 153);">Id</th>

                                    <th style="background-color: rgb(102, 255, 153);">Titulo</th>
                                    <th style="background-color: rgb(102, 255, 153);">Asunto</th>
                                    <th style="background-color: rgb(102, 255, 153);">Fono</th>

                                    <th style="background-color: rgb(102, 255, 153);"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ayudas as $ayuda)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $ayuda->titulo }}</td>
                                    <td >{{ $ayuda->asunto }}</td>
                                    <td>{{ $ayuda->Fono }}</td>

                                    <td>
                                        <!-- <form action="{{ route('ayudas.destroy',$ayuda->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('ayudas.show',$ayuda->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Ver</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('ayudas.edit',$ayuda->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a type="button" href="{{ route('ayudas.create') }}" class="btn btn-dark">Salir</a>

                    </div>
                </div>
            </div>
            {!! $ayudas->links() !!}
        </div>
    </div>
</div>
@endsection
@extends('layouts.base')

@section('template_title')
    Bitacora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bitácora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bitacoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Nueva Bitácora
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
                                        
										<th>Folio</th>
										<th>Nombre</th>
										<th>Dependecia</th>
										<th>Nombre Sistema</th>
										<th>Descripcion</th>
										<th>Cobertura</th>
										<th>Ambiente Servidor</th>
										<th>Ambiente Web</th>
										<th>Compatibilidad Servidor</th>
										<th>Compatibilidad Web</th>
										<th>Desarrollado</th>
										<th>Rut</th>
										<th>Nombre Responsable</th>
										<th>Categoria</th>
										<th>Perfil</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bitacoras as $bitacora)
                                        <tr>
                                            
											<td>{{ $bitacora->folio }}</td>
											<td>{{ $bitacora->nombre }}</td>
											<td>{{ $bitacora->dependecia }}</td>
											<td>{{ $bitacora->nombre_sistema }}</td>
											<td>{{ $bitacora->descripcion }}</td>
											<td>{{ $bitacora->cobertura }}</td>
											<td>{{ $bitacora->ambiente_servidor }}</td>
											<td>{{ $bitacora->ambiente_web }}</td>
											<td>{{ $bitacora->compatibilidad_servidor }}</td>
											<td>{{ $bitacora->compatibilidad_web }}</td>
											<td>{{ $bitacora->desarrollado }}</td>
											<td>{{ $bitacora->id_responsable }}</td>
											<td>{{ $bitacora->nombre_em_responsable }}</td>
											<td>{{ $bitacora->categoria }}</td>
											<td>{{ $bitacora->perfil }}</td>

                                            <td>
                                                <form action="{{ route('bitacoras.destroy',$bitacora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bitacoras.show',$bitacora->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bitacoras.edit',$bitacora->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $bitacoras->links() !!}
            </div>
        </div>
    </div>
@endsection

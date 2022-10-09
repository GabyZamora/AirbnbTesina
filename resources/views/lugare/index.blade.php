@extends('layouts.app')

@section('template_title')
    Lugare
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lugare') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('lugares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Nombrelugar</th>
										<th>Idcategoria</th>
										<th>Idmunicipio</th>
										<th>Iddepartamento</th>
										<th>Latitud</th>
										<th>Longitud</th>
										<th>Descripcion</th>
										<th>Mascotas</th>
										<th>Imagen</th>
										<th>Precio</th>
										<th>Numhuesped</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lugares as $lugare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lugare->nombreLugar }}</td>
											<td>{{ $lugare->categoria->categoria }}</td>
											<td>{{ $lugare->idMunicipio }}</td>
											<td>{{ $lugare->idDepartamento }}</td>
											<td>{{ $lugare->latitud }}</td>
											<td>{{ $lugare->longitud }}</td>
											<td>{{ $lugare->Descripcion }}</td>
											<td>{{ $lugare->mascotas }}</td>
											<td>{{ $lugare->Imagen }}</td>
											<td>{{ $lugare->precio }}</td>
											<td>{{ $lugare->numHuesped }}</td>

                                            <td>
                                                <form action="{{ route('lugares.destroy',$lugare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lugares.show',$lugare->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lugares.edit',$lugare->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $lugares->links() !!}
            </div>
        </div>
    </div>
@endsection

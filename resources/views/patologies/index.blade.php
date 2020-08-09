@extends('layouts.app')

@section('title', 'Patologías') 

@section('breadcrumbs')
    
@endsection

@section('content')
    <div class="page-header">
        <h4 class="page-title">Listado de Patologías</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de Patologías</li>
        </ol>

    </div>
    <div class="row">
        <div class="col-12">
           @if (session('notification'))
                  <div class="alert alert-icon alert-success" role="alert">
                      <p>{{ session('notification') }}</p>
                  </div>
                  @endif
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li style="list-style: none;">{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title ">Patologías</h3>
                    <div class="card-options">
                        <button id="add__new__list" type="button" class="btn btn-sm btn-success " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Añadir Patología</button>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Editar </th>
                                <th scope="col">Mostrar Perfil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patologies as $patology)
                                <tr>
                                <th scope="row">{{ $patology->id }}</th>
                                <td>{{ $patology->name }}</td>
                                @if ($patology->status)
                                    <td><strong><p class="text-success">Activo</p></td></strong>
                                @else
                                    <td><strong><p class="text-primary">Inactivo</p></td></strong>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit{{$patology->id}}"><i class="fa fa-edit"></i> Editar </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete{{$patology->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_show{{$patology->id}}"><i class="fa fa-info-circle"></i> Mostrar</button>
                                </td>
                            </tr>
                            @include('patologies.modals.modal_create')
                            @include('patologies.modals.modal_edit')
                            @include('patologies.modals.modal_delete')
                            @include('patologies.modals.modal_show')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            {{ $patologies->render() }}
        </div>
    </div>
@endsection

@push('styles')
    {{-- expr --}}
@endpush

@push('scripts')
    {{-- expr --}}
@endpush
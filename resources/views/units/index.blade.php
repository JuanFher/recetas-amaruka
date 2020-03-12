@extends('layouts.app')

@section('title', 'Unidades de medida') 

@section('breadcrumbs')
    
@endsection

@section('content')
    <div class="page-header">
        <h4 class="page-title">Unidades de medida</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Unidades de medida</li>
        </ol>

    </div>
    <div class="row">
        <div class="col-12">
           @if (session('notification'))
                  <div class="alert alert-success">
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
                    <h3 class="card-title ">Unidades de medida</h3>
                    <div class="card-options">
                        <button id="add__new__list" type="button" class="btn btn-sm btn-success " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Añadir unidad de medida</button>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Símbolo</th>
                                <th scope="col">Editar </th>
                                <th scope="col">Mostrar </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                <th scope="row">{{ $unit->id }}</th>
                                <td>{{ $unit->name }}</td>
                                <td>{{ $unit->simbol }}</td>
                                
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit{{$unit->id}}"><i class="fa fa-edit"></i> Editar </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete{{$unit->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                                </td>
                                <td>
                                    
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_show{{$unit->id}}"><i class="fa fa-info-circle"></i> Mostrar</button>
                                </td>
                            </tr>
                            @include('units.modals.modal_create')
                            @include('units.modals.modal_edit')
                            @include('units.modals.modal_delete')
                            @include('units.modals.modal_show')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            {{ $units->render() }}
        </div>
    </div>
@endsection

@push('styles')
    {{-- expr --}}
@endpush

@push('scripts')
    {{-- expr --}}
@endpush

<div id="modal_edit{{$medicine->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('medicine.update', ['medicine' => $medicine->id]) }}">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle del {{$medicine->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Nombre </label>
                                <input type="text" class="form-control" name="name" value="{{ $medicine->name }}" id="name" required placeholder="Ingrese el nombre del paciente">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Descripción</label>
                                <input type="text" class="form-control" name="description" id="description" value="{{ $medicine->description }}" required placeholder="Ingrese la descripción">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Composición</label>
                                <input type="text" class="form-control" name="compound" id="compound" value="{{ $medicine->compound }}" required placeholder="Ingrese la composición">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Contenido</label>
                                <input type="text" class="form-control" name="container" value="{{ $medicine->container }}" id="container" required placeholder="Ingrese el contenido">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <label for="listname">Unidad de Medida </label>
                                <select name="type_document" required class="form-control custom-select">
                                    <option value="{{ $medicine->unit['id'] }}">{{ $medicine->unit['name'] }}</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit }}">{{ $unit->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Laboratorio</label>
                                <input type="text" class="form-control" name="laboratory_id" value="{{ $medicine->laboratory['name'] }}" id="laboratory_id" placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
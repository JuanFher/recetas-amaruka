
<div id="modal_show{{$patology->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form>
           
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle de la {{$patology->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Nombre </label>
                                <input type="text" class="form-control" disabled name="name" value="{{ $patology->name }}" id="name" required placeholder="Ingrese el nombre de la patología">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Descripción</label>
                                <input type="text" class="form-control" disabled name="description" value="{{ $patology->description }}" id="description"  placeholder="Ingrese la descripción">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="status" value="1" disabled checked>
                                    <span class="custom-control-label">Activo</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="status" disabled value="0">
                                    <span class="custom-control-label">Inactivo</span>
                                </label>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
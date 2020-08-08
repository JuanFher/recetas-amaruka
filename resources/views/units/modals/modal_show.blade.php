
<div id="modal_show{{$unit->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle del {{$unit->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Nombre </label>
                                <input type="text" class="form-control" name="name" value="{{ $unit->name }}" id="name" disabled required placeholder="Ingrese el nombre del laboratorio">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Símbolo</label>
                                <input type="text" class="form-control" name="simbol" value="{{ $unit->simbol }}" disabled id="simbol" required placeholder="Ingrese la descripción">
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
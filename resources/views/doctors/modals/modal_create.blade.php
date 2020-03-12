<div id="modal_create" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">

    <form method="post" action="{{ route('doctor.store') }}">
                    {{ csrf_field() }}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Crear Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="card-body">
                
                    <div class="form-group">
                        <label for="listname">Nombre de Impuesto</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre del Impuesto">
                    </div>
                    <div class="form-group">
                        <label for="listname">Porcentaje</label>
                        <input type="number" class="form-control" name="percentaje" id="percentaje" placeholder="Ingrese el valor del porcentaje">
                    </div>
                    
                                        
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
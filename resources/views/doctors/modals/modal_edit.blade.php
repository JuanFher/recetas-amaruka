<div id="modal_edit{{$doctor->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog modal-md">
    <form method="post" action="{{ route('doctor.update', ['doctor' => $doctor->id]) }}">
                    {{ csrf_field() }}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Editar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="listname">Nombre de Doctor</label>
                    <input type="text" class="form-control" name="name" value="{{$doctor->user['name']}}" id="name" placeholder="Ingrese el nombre Categoría">
                </div>
                <div class="form-group">
                    <label for="listname">Porcentaje de Doctor</label>
                    <input type="text" class="form-control" name="percentaje" value="{{$doctor->phone}}" id="percentaje" placeholder="Ingrese el valor del porcentaje">
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
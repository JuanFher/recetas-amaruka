<div id="modal_delete{{$doctor->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('doctor.destroy', ['doctor' => $doctor->id]) }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Eliminar Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="listname">¿Está seguro de eliminar al Doctor <strong>{{ $doctor->user['name'] }}</strong>?</label>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Sí, eliminar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
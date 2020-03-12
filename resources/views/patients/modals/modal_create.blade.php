<div id="modal_create" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('patient.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Crear paciente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Nombre </label>
                                <input type="text" class="form-control" name="name" id="name" required placeholder="Ingrese el nombre del paciente">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" required placeholder="Ingrese el apellido del paciente">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required placeholder="Ingrese el email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Tipo de documento </label>
                                <select name="type_document" required class="form-control custom-select">
                                    <option value="1">Cédula</option>
                                    <option value="2">Ruc</option>
                                    <option value="3">Pasaporte</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Número de documento</label>
                                <input type="text" class="form-control" name="document" id="document"required placeholder="Ingrese el número de documento">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Dirección</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Teléfono celular </label>
                                <input type="text" class="form-control" name="phone" id="phone" required placeholder="Ingrese el teléfono celular">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Teléfono hogar/oficina</label>
                                <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="Ingrese el teléfono de casa">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Edad</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Ingrese la edad">
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

<div id="modal_edit{{$doctor->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('doctor.update', ['doctor' => $doctor->id]) }}">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle del {{$doctor->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Nombre </label>
                                <input type="text" class="form-control" name="name" value="{{ $doctor->name }}" id="name" required placeholder="Ingrese el nombre del doctor">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $doctor->lastname }}" required placeholder="Ingrese el apellido del doctor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $doctor->email }}" required placeholder="Ingrese el email">
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
                                <input type="text" class="form-control" name="document" value="{{ $doctor->document }}" id="document" required placeholder="Ingrese el número de documento">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Dirección</label>
                                <input type="text" class="form-control" name="address" value="{{ $doctor->address }}" id="address" placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Teléfono celular </label>
                                <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}" id="phone" required placeholder="Ingrese el teléfono celular">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listname">Teléfono hogar/oficina</label>
                                <input type="text" class="form-control" name="home_phone" value="{{ $doctor->home_phone }}" id="home_phone" placeholder="Ingrese el teléfono de casa">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Título</label>
                                <input type="text" class="form-control" value="{{ $doctor->title }}" name="title" id="title" placeholder="Ingrese el título">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
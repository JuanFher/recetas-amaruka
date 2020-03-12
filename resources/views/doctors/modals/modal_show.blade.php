<div id="modal_show{{$doctor->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-md">

            <form>
                            
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Detalle Impuesto {{$doctor->user['name'] }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="card-body">
                        
                            <div class="form-group">
                                <label for="listname">Nombre de impuesto</label>
                                <input type="text" class="form-control" name="name" value="{{$doctor->user['lastname'] }}" id="name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="listname">Porcentaje de impuesto</label>
                                <input type="number" class="form-control" name="percentaje" value="{{$doctor->phone}}" id="percentaje" disabled>
                            </div>
                                                
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
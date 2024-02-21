<!-- Modal -->
<div class="modal fade" id="edit{{$cliente->Id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.update',$cliente->Id)}}" method="post" enctype="multipart/form-data" id="formularioEdit" onsubmit="return valEdit()">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input
                type="text"
                class="form-control"
                name="Nombre"
                id="nombreFormEdit"
                aria-describedby="helpId"
                placeholder=""value="{{$cliente->Nombre}}"
              
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TELEFONO</label>
            <input
                type="text"
                class="form-control"
                name="Telefono"
                id="telefonoFormEdit"
                aria-describedby="helpId"
                placeholder=""value="{{$cliente->Telefono}}"
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CORREO</label>
            <input
                type="email"
                class="form-control"
                name="Correo"
                id="correoFormEdit"
                aria-describedby="helpId"
                placeholder=""value="{{$cliente->Correo}}"
            />
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">GUARDAR</button>
      </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="delete{{$cliente->Id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.destroy',$cliente->Id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
      <div class="modal-body">
        Quieres eliminar a <strong>{{$cliente->Nombre}} ? </strong>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">ELIMINAR</button>
      </div>
      </form>
    </div>
  </div>
</div>
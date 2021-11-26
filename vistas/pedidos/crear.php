<div class="card">
    <div class="card-header">
       Agregar Pedidos
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input pattern="[a-zA-Z]+"required type="text" 
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del cliente">
            </div>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input  pattern="[a-zA-Z]+" required type="text" 
                class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Ingrese alguno de los apellido ">
            </div>

            <div class="mb-3">
              <label for="telefono" class="form-label">Telefono de contacto</label>
              <input pattern="[0-9]+" required type="number"  class="form-control" name="telefono" id="telefono" aria-describedby="HelpId" placeholder="+52 000 000 00 00">
            </div>

            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección</label>
              <input required type="text" 
                class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Lugar de entrega">
            </div>

            <div class="mb-3">
              <label for="orden" class="form-label">Orden</label>
              <input required type="text" 
                class="form-control" name="orden" id="orden" aria-describedby="helpId" placeholder="Productod del menu ordenado">
            </div>


            <div class="mb-3">
              <label for="precio" class="form-label">precio</label>
              <input pattern="[0-9]+" required type="number" 
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio del producto">
            </div>

            <div class="mb-3">
              <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
              <input required type="text" 
                class="form-control" name="fecha_entrega" id="fecha_entrega" aria-describedby="helpId" placeholder="Fecha de entrega ejemplo: 20/11/2021">
            </div>

            <div class="mb-3">
              <label for="situacion" class="form-label">Situacion del producto</label>
              <input pattern="[a-zA-Z]+" required type="text" 
                class="form-control" name="situacion" id="situacion" aria-describedby="helpId" placeholder="Entregado/Pendiente">
            </div>
            <input name="" id="" class="btn-success" type="submit" value="Agregar pedido">
  
          </form>    


    </div>
</div>

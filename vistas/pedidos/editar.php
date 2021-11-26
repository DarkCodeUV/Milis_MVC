<div class="card">
    <div class="card-header">
       Editar pedido
    </div>
    <div class="card-body">
        <form action="" method="post">
        
            <div class="mb-3">
              <label for="id" class="form-label">ID:</label>
              <input readonly type="text"
                class="form-control" value="<?php echo $pedido->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID del pedido">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->apellido; ?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Ingrese su apellido">
            </div>


            <div class="mb-3">
              <label for="telefono" class="form-label">Telefono</label>
              <input type="text" value="<?php echo $pedido->telefono; ?>" class="form-control" name="telefono" id="telefono" placeholder="+52 000 000 00 00">
            </div>

            <div class="mb-3">
              <label for="direccion" class="form-label">Direccion</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->direccion; ?>" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese la direc del pedido">
            </div>

            <div class="mb-3">
              <label for="orden" class="form-label">Orden</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->orden; ?>" name="orden" id="orden" aria-describedby="helpId" placeholder="Nombre de la orden con descripcion">
            </div>

            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="number"
                class="form-control" value="<?php echo $pedido->precio; ?>" name="precio" id="precio" aria-describedby="helpId" placeholder="precio delproducto">
            </div>

            <div class="mb-3">
              <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->fecha_entrega; ?>" name="fecha_entrega" id="fecha_entrega" aria-describedby="helpId" placeholder="Fecha de entrega del producto ejemplo 20/11/2021">
            </div>

            <div class="mb-3">
              <label for="situacion" class="form-label">Situacion</label>
              <input type="text"
                class="form-control" value="<?php echo $pedido->situacion; ?>" name="situacion" id="situacion" aria-describedby="helpId" placeholder="situacion Entregado/Pendiente">
            </div>

           
            <div class="btn-group" role="group" aria-label="">
            <input name="actualizar" id="actualizar" class="btn-success" type="submit" value="Actualizar usuario">
               <a href="?controlador=pedidos&&accion=inicio" type="button" class="btn btn-danger">Cancelar</a>        
       
            </div>
        </form>    


    </div>
</div>

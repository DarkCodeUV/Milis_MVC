<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=pedidos&&accion=crear" role="button">Agregar pedido</a>
    
    </div>
    <div class="card-body">
    

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Orden</th>
            <th>Precio</th>
            <th>Fecha de entrega</th>
            <th>Situacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pedidos as $pedido ){ ?>
            
            <tr>
                <td><?php echo $pedido->id;?></td>
                <td><?php echo $pedido->nombre;?></td>
                <td><?php echo $pedido->apellido;?></td>
                <td><?php echo $pedido->telefono;?></td>
                <td><?php echo $pedido->direccion;?></td>
                <td><?php echo $pedido->orden;?></td>
                <td><?php echo $pedido->precio;?></td>
                <td><?php echo $pedido->fecha_entrega;?></td>
                <td><?php echo $pedido->situacion;?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=pedidos&&accion=editar&id=<?php echo $pedido->id;?>" type="button" class="btn btn-primary">Editar</a>   
                        <a href="?controlador=pedidos&&accion=borrar&id=<?php echo $pedido->id;?>" type="button" class="btn btn-danger">Borrar</a>        
                    </div>
                
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</div>
    
</div>








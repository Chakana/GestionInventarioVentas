<script type="text/javascript">
$(document).ready(function(){
$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});

	    $.ajax({
                type: "GET",
                url: '/GestionInventarioVentas/productos/json_listadoEdicionProductos',
                dataType: 'json',
                success: function(json) {

                    var $elnombre = $("#modificarNombre");
                    var $eldescripcion = $("#modificarDescripcion");
                    $elnombre.empty(); // remove old options
                    $.each(json, function(value, key) {
                        console.log (key.Producto.nombreProducto);
                        $elnombre.append($("<option></option>")
                                .attr("value", key.Producto.id).text(key.Producto.nombreProducto));
                        
                    });														
	                

                    
                    
                }
            });

 $("#nuevo_guardar").click(function(){
 		var nombreProducto=$('#nuevo_nombreProducto').val();
 		var numeroCodigo=$('#nuevo_numeroCodigo').val();
 		var numeroBarras=$('#nuevo_numeroBarras').val();
 		var existeciaProducto=$('#nuevo_existeciaProducto').val();
 		var descripcionProducto=$('#nuevo_descripcionProducto').val();
 		var introducirPresio=$('#nuevo_introducirPresio').val();
 		var precio1=$('#nuevo_precio1').val();
 		var precio2=$('#nuevo_precio2').val();
 		var precio3=$('#nuevo_precio3').val();
 		var precio4=$('#nuevo_precio4').val();
 		var seleccionImagen=$('#nuevo_seleccionImagen').val();
 		var data = JSON.stringify({"nombreProducto": nombreProducto,"numeroCodigo":numeroCodigo,"numeroBarras":numeroBarras,"existeciaProducto":existeciaProducto,"descripcionProducto":descripcionProducto,"introducirPresio":introducirPresio,"precio1":precio1,"precio2":precio2,"precio3":precio3,"precio4":precio4,"seleccionImagen":seleccionImagen});
			console.log(data);
			$.ajax({  
          url: "/GestionInventarioVentas/Productos/ingresarProducto",  
          type: "POST",  
          dataType: "json",  
          contentType: "json",  
          data: data,  
          success: function(data){              
            alert("success");  
            console.log(data); 
          }
    }); 
 });

 		$("#modificar").click(function(){
			$('#modalModificar').modal('show');
	    });

});
</script>
<div class="productos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Productos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Opciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Producto'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Ver Inventario'), array('controller' => 'inventarioproductos', 'action' => 'index'), array('escape' => false)); ?> </li>					
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Ver Movimientos'), array('controller' => 'movimientoproductos', 'action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Listado Simple de Productos'), array('action' => 'listadoProductos'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Ver Productos Inactivos'), array('action' => 'listadoProductosInactivos'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Buscar Productos'), array('action' => 'buscarProducto'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
          <div class="form-group">
  				<label for="usr">Ingreso</label>
 					<div class="row">
 					<div class="col-md-4">

 						<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#Nuevo">
 					<i class="fa fa-plus-circle fa-3x"></i></br>Nuevo
					</button>

 					</div>
 					
 					<div class="col-md-4">
 						<button type="button" id="modificar" class="btn btn-primary btn-block">
 					<i class="fa fa-file-text-o fa-3x"></i></br>Modificar
					</button>

 					</div>
 					<div class="col-md-4">
 						
 						<button type="button" id="Reportes" class="btn btn-primary btn-block">
 					<i class="fa fa-clipboard fa-3x"></i></br>Reportes
					</button>

 					</div>
 					
 					</div>
 					<br/>
 					<div class="row">
 					<div class="col-md-4"></div>
 					<div class="col-md-4"></div>
 					<div class="col-md-4">
 						
 						
                    <a href="/GestionInventarioVentas/inventarioproductos">
                    	<button type="button" id = "Inventario" class="btn btn-primary btn-block">
 					    <i class="fa fa-suitcase fa-3x"></i></br>Inventario
                    </a>

					</button>


 					</div>
 					
 					</div>
 					
 					
		</div>


		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->

<div class="modal fade" id="Nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="nuevoProducto">Nuevo Producto</h4>
      </div>
      <div class="modal-body">

   			<form>
   			<div class="form-group">
	   			<div class="col-md-6">
	   			 	<label for="exampleInputEmail1">Nombre</label>
	   			 	<input type="text" class="form-control" id="nuevo_nombreProducto" placeholder="">
	   			 	<label for="exampleInputEmail1">Descripcion</label>
	   			 	<input type="text" class="form-control" id="nuevo_descripcionProducto" placeholder="">
	  			    <label for="exampleInputEmail1">Codigo</label>
	   			    <input type="number" class="form-control" id="nuevo_numeroCodigo" placeholder="">
	   			    <label for="exampleInputEmail1">Codigo de Barras</label>
	   			    <input type="number" class="form-control" id="nuevo_numeroBarras" placeholder="">
	   			    <label for="exampleInputEmail1">Existencia del Producto</label>
	   			    <input type="number" class="form-control" id="nuevo_existeciaProducto" placeholder="">
	   			    
				</br>
			 <button class="btn btn-primary" id = 'nuevo_introducirPresio'type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="	false" aria-controls="collapseExample">Introducir Presio</button>
			 	<div class="collapse" id="collapseExample">
	  				<div class="well">
						 <div class="input-group">
				  			<span class="input-group-addon">Precio 1</span>
				  			<input type="number" id="nuevo_precio1" class="form-control" placeholder="" aria-describedby="basic-addon1" value="0">
				  		 </div>
				  		 <div class="input-group">	
				  			<span class="input-group-addon" >Precio 2</span>
				  			<input type="number" id="nuevo_precio2" class="form-control" placeholder="" aria-describedby="basic-addon1" value="0">
			  		     </div>
			  		     </br>
				  		 <div class="input-group">	
				  			<span class="input-group-addon">Precio 3</span>
				  			<input type="number" id="nuevo_precio3" class="form-control" placeholder="" aria-describedby="basic-addon1" value="0">
				  		 </div>
				  		 <div class="input-group">	
				  			<span class="input-group-addon" >Precio 4</span>
				  			<input type="number"id="nuevo_precio4" class="form-control" placeholder="" aria-describedby="basic-addon1" value="0">
						 </div>
					</div>
				</div>
				</div>

  			</div>
  		</form>
  	    <form>
           <div class="col-md-6">
	            <label class="control-label">Seleccionar Imagen</label>
				<input id="nuevo_seleccionImagen" type="file" class="file">
			 
           </div>
		</form>
      </br>
      </div>

      </br>
      <div class="modal-footer">
        <button type="button" id='nuevo_cerrar' class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id='nuevo_guardar' class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editar_producto">Modificar Producto</h4>
      </div>
      <div class="modal-body">

   			<form>
   			<div class="form-group">
	   			<div class="col-md-6">
	   			 	
	   			 	<label for="exampleInputEmail1">Nombre
		   			 	<SELECT id="modificarNombre" NAME="Nombre" SIZE="1" class="selectpicker"> 
						  
						</SELECT> </label>

					<br></br>
	   			 	<label for="exampleInputEmail1">Descripcion</label>
	   			 	<input type="text" class="form-control" id="editar_descripcion" placeholder="">   
	  			    <label for="exampleInputEmail1">Codigo</label>
	   			    <input type="number" class="form-control" id="editar_codigo" placeholder="">
	   			    <label for="exampleInputEmail1">Codigo de Barras</label>
	   			    <input type="number" class="form-control" id="editar_barras" placeholder="">
	   			    <label for="exampleInputEmail1">Existencia del Producto</label>
	   			    <input type="number" class="form-control" id="editar_existencia" placeholder="">
				</br>
			 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="	false" aria-controls="collapseExample">Introducir Presio</button>
			 	<div class="collapse" id="editar_precio">
  				<div class="well">
					 <div class="input-group">
			  			<span class="input-group-addon" id="editar_precio1">Precio 1</span>
			  			<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="editar_precio2">Precio 2</span>
			  			<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon1">
		  		     </div>
		  		     </br>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="editar_precio3">Precio 3</span>
			  			<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="editar_precio4">Precio 4</span>
			  			<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon1">
					 </div>
				</div>
				</div>
				</div>

  		
  		</form>
  		        <form>
           <div class="col-md-6">
	            <label class="control-label">Seleccionar Imagen</label>
				<input id="editar_imagen" type="file" class="file">
			 
           </div>
		</form>
      </br>
      </div>

      </br>
      <div class="modal-footer">
        <button type="button" id="editar_cerrar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="editar_guardar" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
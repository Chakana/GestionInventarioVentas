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
 						<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#Modificar">
 					<i class="fa fa-file-text-o fa-3x"></i></br>Modificar
					</button>

 					</div>
 					<div class="col-md-4">
 						
 						<button type="button" class="btn btn-primary btn-block">
 					<i class="fa fa-clipboard fa-3x"></i></br>Reportes
					</button>

 					</div>
 					
 					</div>
 					<br/>
 					<div class="row">
 					<div class="col-md-4"></div>
 					<div class="col-md-4"></div>
 					<div class="col-md-4">
 						
 						<button type="button" class="btn btn-primary btn-block">
 					<i class="fa fa-suitcase fa-3x"></i></br>Inventario
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
        <h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4>
      </div>
      <div class="modal-body">

   			<form>
   			<div class="form-group">
	   			<div class="col-md-6">
	   			 	<label for="exampleInputEmail1">Nombre</label>
	   			 	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	  			    <label for="exampleInputEmail1">Codigo</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	   			    <label for="exampleInputEmail1">Codigo de Barras</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	   			    <label for="exampleInputEmail1">Existencia del Producto</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
				</br>
			 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="	false" aria-controls="collapseExample">Introducir Presio</button>
			 	<div class="collapse" id="collapseExample">
  				<div class="well">
					 <div class="input-group">
			  			<span class="input-group-addon" id="basic-addon1">Precio 1</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 2</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
		  		     </div>
		  		     </br>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 3</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 4</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
					 </div>
				</div>
				</div>
				</div>

  			</div>
  		</form>
  		        <form>
           <div class="col-md-6">
	            <label class="control-label">Select File</label>
				<input id="input-1" type="file" class="file">
			 
           </div>
		</form>
      
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">

   			<form>
   			<div class="form-group">
	   			<div class="col-md-6">
	   			 	<label for="exampleInputEmail1">Nombre</label>
	   			 	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	  			    <label for="exampleInputEmail1">Codigo</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	   			    <label for="exampleInputEmail1">Codigo de Barras</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
	   			    <label for="exampleInputEmail1">Existencia del Producto</label>
	   			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
				</br>
			 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="	false" aria-controls="collapseExample">Introducir Presio</button>
			 	<div class="collapse" id="collapseExample">
  				<div class="well">
					 <div class="input-group">
			  			<span class="input-group-addon" id="basic-addon1">Precio 1</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 2</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
		  		     </div>
		  		     </br>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 3</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
			  		 </div>
			  		 <div class="input-group">	
			  			<span class="input-group-addon" id="basic-addon1">Precio 4</span>
			  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
					 </div>
				</div>
				</div>
				</div>

  		
  		</form>
  		        <form>
           <div class="col-md-6">
	            <label class="control-label">Select File</label>
				<input id="input-1" type="file" class="file">
			 
           </div>
		</form>
      
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
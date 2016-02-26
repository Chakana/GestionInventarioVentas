<div class="productos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Listado Simple Productos'); ?></h1>
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
								<li><a class="btn btn-lg btn-primary text-right" id="imprimirListadoBtn" href="#">
  				<i class="fa fa-print fa-2x"></i> Imprimir</a></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->
		
		<div id="imprimirListado">
			<div class="page-header">		
			  <hr/>			
			  <h2><?php echo $this->Session->read('nombreEmpresa')?></h2>
			  <h3>Listado Simple de productos</h3>
			  <hr/>			  
			  <h3>Fecha:<small><?php echo date("Y-m-d H:i:s") ?></small></h3>
			</div>	
			<div class="col-md-9">

				<div class="form-group">
  				<label for="usr">Busqueda del Producto:</label>
 					 <input type="text" class="form-control" id="usr">
				</div>
			</div>

			<div class="col-md-9">
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>							
							<th><?php echo $this->Paginator->sort('Codigo Producto'); ?></th>
							<th><?php echo $this->Paginator->sort('Nombre de producto'); ?></th>
							<th><?php echo $this->Paginator->sort('Agregar Mercaderia'); ?></th>
							<th><?php echo $this->Paginator->sort('Mover Mercaderia'); ?></th>
							<th><?php echo $this->Paginator->sort('Poner a la Venta'); ?></th>
							
							<th></th>	
						
						</tr>
						
					
					</thead>



					<tbody>

					<?php foreach ($productos as $producto): ?>
						<tr>							
							<td><?php echo h($producto['Producto']['nombreProducto']); ?>&nbsp;</td>
							<td><?php echo h($producto['Producto']['descripcionProducto']); ?>&nbsp;</td>						
							<td>
							<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Agregar">
 							 <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</button>
							</td>
							<td>
							<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Mover">
 							 <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
							</button>
							</td>
							<td>
							<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Venta">
 							 <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
							</button>
							</td>

						</tr>
						<!-- Modal -->
							

					<?php endforeach; ?>



					</tbody>
					
				</table>

				<p>
					<small><?php echo $this->Paginator->counter(array('format' => __('Pagina numero {:page} de {:pages}, mostrando el registro{:current} del total de {:count} , comenzando con el registro{:start}, finalizando en el registro nro{:end}')));?></small>
				</p>

				<?php
				$params = $this->Paginator->params();
				if ($params['pageCount'] > 1) {
				?>
				<ul class="pagination pagination-sm">
					<?php
						echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
						echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
						echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
					?>
				</ul>
				<?php } ?>

			</div> <!-- end col md 9 -->
			</div> <!-- end areaImprimible div -->
	</div><!-- end row -->


</div><!-- end containing of content -->

<script type="text/javascript">
	 $('#imprimirListadoBtn').click(function (event) {	 	
	 	$('#imprimirListado').printElement();
	 });

</script>

<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Mercaderia</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group">
   			 <label for="exampleInputEmail1">Numero de Mercaderia</label>
   			 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
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

<div class="modal fade" id="Mover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mover Mercaderia</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group">
   			 <label for="exampleInputEmail1">Cantidad de Mercaderia</label>
   			 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
  			</div>
  			<div class="col-lg-3">
    			<div class="input-group">
    			  <span class="input-group-addon">
     		      <input type="radio" aria-label="Demostar"> Demostrar
     		      </span>
    			</div>
    			<div class="input-group">
    			  <span class="input-group-addon">
     		      <input type="radio" aria-label="Eliminar"> Eliminar
     		      </span>
    			</div>
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


<div class="modal fade" id="Venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Venta de Mercaderia</h4>
      </div>
     	 <div class="input-group">
  			<span class="input-group-addon" id="basic-addon1">Precio 1</span>
  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
  			<span class="input-group-addon" id="basic-addon1">Precio 2</span>
  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
  		 </div>
  		 <div class="input-group">	
  			<span class="input-group-addon" id="basic-addon1">Precio 3</span>
  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
  			<span class="input-group-addon" id="basic-addon1">Precio 4</span>
  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
		 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<?php foreach ($productos as $producto): ?>
	
<div class=" tarjetacompra col-md-4">
	<div class="row">
		<div style="text-align:center;">
	      <h1><span class="label label-success" id="nombreProducto"><?php echo $producto['productos']['nombreProducto']?></span></h1>
	    </div>
	</div>
	<div class="row">
		<div class = "imagentarjeta col-md-6">
				<img id="imagenTarjeta" src="<?php echo $producto['productos']['imagen']?>" alt=" " />
		  </div>
	        <div class="col-md-6">
				 <div class="row">
			    	<div class="well">
			    	<label for="exampleInputEmail1" id="precioTarjeta"><?php echo $producto['productos']['precio1']?></label><br/>
			 		<label for="exampleInputEmail1" id="descripcionTarjeta"><?php echo $producto['productos']['descripcionProducto']?></label> 
			 		</div>
			 	 </div>
			 	 <div class="row">
				 	<div align="center" id="botonOk" class ="botonAgregar"x-id = "<?php echo $producto['productos']['id']?>" x-nombre "<?php echo $producto['productos']['nombreProducto']?>" x-precio = "<?php echo $producto['productos']['precio1']?>">
				 	
				 	 <p><a href="#" class="btn btn-info btn-lg">

						<span class="glyphicon glyphicon-ok"></span> 
					</a>
					</p>
					</div>
				</div>
		 	</div>
	</div>
</div>	
<?php endforeach; ?>
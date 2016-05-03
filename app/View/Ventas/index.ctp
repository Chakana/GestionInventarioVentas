
<style>
#venta tr:hover {
    cursor: pointer;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		var carritoCompra=new Array();
		$("#botonBusqueda").click(function(){
			var textoBusqueda = $('#textoBusqueda').val();
			$('#productosBusqueda').load('http://localhost/GestionInventarioVentas/Ventas/busquedaProducto/'+textoBusqueda);

	    });
	    $('#textoBusqueda').keypress(function(event){
    		var keycode = (event.keyCode ? event.keyCode : event.which);
   			 if(keycode == '13'){ 
   			 	var textoBusqueda = $('#textoBusqueda').val();
			    $('#productosBusqueda').load('http://localhost/GestionInventarioVentas/Ventas/busquedaProducto/'+textoBusqueda);
					

   			 }
        });
        $("#botonLimpiar").click(function(){
			$('#textoBusqueda').val('');

	    });

	    $(".botonAgregar").click(function(){
	    	var idBoton = $(this).attr('x-id');
			

			carritoCompra.push(idBoton);
			console.log(carritoCompra);
	    });

	    $("#registrarCompra").click(function(){
			  var html = "";
			  html += '<table border="1" cellspacing="1" cellpadding="5" class="table table-striped">';
			  html += "<tr><td>id</td></tr>";
		    	for (var i = 0; i < carritoCompra.length; i++) {
			      
			      html += "<tr><td class=itemid>" + carritoCompra[i] + '</td><td><button type="button" class="btn btn-primary borrarElementoCarrito">borrar</button>   </td></tr>';
   				}

			    html += '</table>';
			    $('#tablaCarrito').html(html);

			$('#Finalizar').modal('show');
			 $(".borrarElementoCarrito").click(function(){
			     	var index = carritoCompra.indexOf($(this).parent().parent().find('.itemid').html());
			     	if (index > -1) {
					    carritoCompra.splice(index, 1);
					    $(this).parent().parent().remove();
					}
			    });
	    });

	    $("#cancelarCarrito").click(function(){
			carritoCompra.length = 0;

	    });

	    $("#mandarCompra").click(function(){
	    	for (var i = carritoCompra.length - 1; i >= 0; i--) {
	    		 $.ajax({
				        url: '/GestionInventarioVentas/ventas/compraProducto/'+ carritoCompra[i],
				        dataType: 'json',
				        type: 'GET',
				        // This is query string i.e. country_id=123
				        data: {},
				        success: function(data) {
				        	console.log(data);
				        	
				           if(data=='false'){
				           	//existe producto
				           	console.log(data);
				           		//bootbox.alert('No se pudo comprar');
				           }
				        },
				        error: function(jqXHR, textStatus, errorThrown) {
				            alert(errorThrown);
				        }
				    });
	    		
	    	};
			$('#Finalizar').modal('hide')

	    });

	  
	   



	});
</script>


	
<div class="ventas index">

	<div class="row">
		<div class="col-md-10">
			<div class="page-header">
				<h1><?php echo __('Ventas'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
		<?php //var_dump($ventas[0]); 

	?>

<div class="row">
	<div class="col-md-10">
		 <div class="form-group">
  				<label for="usr"><h4>Nueva Venta</h4></label>
 					<nav class="navbar navbar-default" role="navigation">

				<div class="row">
					 <div class="col-md-11">
					  	 <div class="navbar-header">
							   
							        <div class="form-group">
							          	<input type="text" class="form-control" placeholder="Producto" id = "textoBusqueda">
				    					<button type="button" class="btn btn-default" id = "botonBusqueda">Busqueda</button>
				    					<button type="button" class="btn btn-default" id = "botonLimpiar">Limpiar</button>
					 				</div>
					 			
					     </div>
		                <div class="col-md-3 col-md-offset-3">
		   					 <button id = "registrarCompra" type="button" class="btn btn-primary btn-block" data-toggle="modal" >
				 			 <i class="fa fa-shopping-cart fa-3x"></i></br>Registrar Compra
							 </button>
		  				</div>
					</div>
 				
		 </div>
	</div>


 

<div class=" tarjetas">
<div class="form-group" id = 'productosBusqueda'>
<?php foreach ($productos as $producto): ?>

<div class=" tarjetacompra col-md-4">
	<div class="row">
		<div style="text-align:center;">
	      <h1><span class="label label-success" id="nombreProducto"><?php echo $producto['Producto']['nombreProducto']?></span></h1>
	    </div>
	</div>
	<div class="row">
		<div class = "imagentarjeta col-md-6">
				<img id="imagenTarjeta" src="<?php echo $producto['Producto']['imagen']?>" alt=" " />
		  </div>
	        <div class="col-md-6">
				 <div class="row">
			    	<div class="well">
			    	<label for="exampleInputEmail1" id="precioTarjeta"><?php echo $producto['Producto']['precio1']?></label><br/>
			 		<label for="exampleInputEmail1" id="descripcionTarjeta"><?php echo $producto['Producto']['descripcionProducto']?></label> 
			 		</div>
			 	 </div>
			 	 <div class="row">
				 	<div align="center" id="botonOk"  class ="botonAgregar" x-id = "<?php echo $producto['Producto']['id']?>" x-nombre "<?php echo $producto['Producto']['nombreProducto']?>" x-precio = "<?php echo $producto['Producto']['precio1']?>">
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
		
</div>
</div>

<div class="modal fade" id="Finalizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Finalizar Compra</h4>
      </div>
      <div class="modal-body">

   			

   			<form>
   			<div class="form-group">
	   		<div id="tablaCarrito" class="col-md-12">
	   			 	
			
            </div>

		    </div>
  		
  		</form>
      </div>

</br>
      <div class="modal-footer">
        <button type="button" id="mandarCompra" class="btn btn-primary">Comprar</button>
        <button type="button" id="cancelarCarrito" class="btn btn-default" data-dismiss="modal">Cancelar</button>
     
      </div>
    </div>
  </div>
</div>
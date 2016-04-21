
<div class="switches">
	<div class="col-12">
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>NUMERO DE VENTAS</h3>
					<p></p>
					<ul>
						
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<div id="myfirstchart" style="height: 250px;"></div>
				<canvas id="ventas_mes" ></canvas>
               
			</div>
		</div>
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>SUMA TOTAL DE DEUDAS</h3>
					<p></p>
					<ul>
						
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<div id="grafica_deuda" style="height: 250px;"></div>
				<canvas id="deuda_mes" ></canvas>
               
			</div>
		</div>
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>SUMA TOTAL DE DEUDAS COBRADAS</h3>
					<p></p>
					<ul>
						
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<div id="grafica_cobro" style="height: 250px;"></div>
				<canvas id="cobro_deuda" ></canvas>
               
			</div>
		</div>
	</div>
</div>
<?php
         
     ?>
	<script type="text/javascript">
	
		
		new Morris.Line({
		  // ID of the element in which to draw the chart.
		  element: 'myfirstchart',
		  // Chart data records -- each entry in this array corresponds to a point on
		  // the chart.
		  data: <?php echo $venta ?> ,
		  // The name of the data record attribute that contains x-values.
		  xkey: ['mes'],
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['venta'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['venta']
		});

		new Morris.Line({
		  // ID of the element in which to draw the chart.
		  element: 'grafica_deuda',
		  // Chart data records -- each entry in this array corresponds to a point on
		  // the chart.
		  data: <?php echo $deuda ?> ,
		  // The name of the data record attribute that contains x-values.
		  xkey: ['mes'],
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['deuda'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['deuda']
		});

		new Morris.Line({
		  // ID of the element in which to draw the chart.
		  element: 'grafica_cobro',
		  // Chart data records -- each entry in this array corresponds to a point on
		  // the chart.
		  data: <?php echo $pagos ?> ,
		  // The name of the data record attribute that contains x-values.
		  xkey: ['mes'],
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['pagos'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['pagos']
		});


		

	</script>

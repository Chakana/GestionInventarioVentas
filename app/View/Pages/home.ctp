<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-mail-forward"></i>
					<div class="stats">
					  <h5>45 <span>%</span></h5>
					  <div class="grow">
						<p>Growth</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-users"></i>
					<div class="stats">
					  <h5>50 <span>%</span></h5>
					  <div class="grow grow1">
						<p>New Users</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-eye"></i>
					<div class="stats">
					  <h5>70 <span>%</span></h5>
					  <div class="grow grow3">
						<p>Visitors</p>
					  </div>
					</div>
				</div>
			 </div>
			 <div class="col-md-3 widget">
				<div class="r3_counter_box">
					<i class="fa fa-usd"></i>
					<div class="stats">
					  <h5>70 <span>%</span></h5>
					  <div class="grow grow2">
						<p>Profit</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<div class="switches">
	<div class="col-12">
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>TODAY'S STATS</h3>
					<p>Duis aute irure dolor in reprehenderit.</p>
					<ul>
						<li>Earning: $400 USD</li>
						<li>Items Sold: 20 Items</li>
						<li>Last Hour Sales: $34 USD</li>
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<canvas id="ventas_mes" ></canvas>
               
			</div>
		</div>
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>TODAY'S STATS</h3>
					<p>Duis aute irure dolor in reprehenderit.</p>
					<ul>
						<li>Earning: $400 USD</li>
						<li>Items Sold: 20 Items</li>
						<li>Last Hour Sales: $34 USD</li>
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<canvas id="ventas_mes" ></canvas>
               
			</div>
		</div>
		<div class="col-md-3 switch-right">
			<div class="switch-right-grid">
				<div class="switch-right-grid1">
					<h3>TODAY'S STATS</h3>
					<p>Duis aute irure dolor in reprehenderit.</p>
					<ul>
						<li>Earning: $400 USD</li>
						<li>Items Sold: 20 Items</li>
						<li>Last Hour Sales: $34 USD</li>
					</ul>
				</div>
			</div>
			<div class="sparkline">
				<canvas id="ventas_mes" ></canvas>
               
			</div>
		</div>
	</div>
</div>

	<script type="text/javascript">
		var lineChartData = {
			labels : ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ags","Sep","Oct","Nom","Dic"],
			datasets : [
				{
					fillColor : "#fff",
					strokeColor : "#F44336",
					pointColor : "#fbfbfb",
					pointStrokeColor : "#F44336",
					pointHighlightFill: "#fff",
			        pointHighlightStroke: "rgba(220,220,220,1)",

					data : [20,35,45,30,10,65,70]
				}
			]
			
		};
		new Chart(document.getElementById("ventas_mes").getContext("2d")).Line(lineChartData);
		
	</script>
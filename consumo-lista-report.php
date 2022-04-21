<?php
date_default_timezone_set('Brazil/East');

include 'conecta.php';
include 'consumo-banco.php';

include 'report-cabecalho.php';
include 'report-variaveis.php';
include 'report-listagem.php';
include 'report-totalizadores.php';
include 'report-rodape.php';
?>

<script src="js/funcoes/report.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() 
	{
	    var data = google.visualization.arrayToDataTable([
	    ['Dia da Semana', 'Qtd Café'],
	    <?php include 'report-imprime-dados-chart.php'; ?>
		]);

	    var options = {
			title: 'Cafés bebidos por dia da semana',
			is3D: true,
		};

		var chart_area = document.getElementById('piechart');
		var chart = new google.visualization.PieChart(chart_area);

		google.visualization.events.addListener(chart, 'ready', function()
		{
			chart_area.innerHTML = '<img src="' + chart.getImageURI() + '">';
		});

		chart.draw(data, options);
	}
</script>
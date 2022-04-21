<!DOCTYPE html>
<html>
	<head>
		<title>Cafeímetro</title>
		<meta charset="utf-8">
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="css/cafeimetro.css" rel="stylesheet" />
	</head>
	<body>

		<form name="form_criapdf" method="post" action="">
			<input type="hidden" name="esconde_html" id="esconde_html" value="" />
			<button type="button" name="btn_criapdf" class="btn btn-secondary" onclick="geraPDF();">Gera PDF</button>
		</form>

		<div class="container" id="div-report">
				
            <div class="principal">
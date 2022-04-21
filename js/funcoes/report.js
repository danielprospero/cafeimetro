function geraPDF() 
{
	document.getElementById('esconde_html').value = document.getElementById('div-report').innerHTML;
	document.form_criapdf.action = 'gerador-pdf.php';
	document.form_criapdf.submit();
}

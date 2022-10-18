<?php
if(isset($_POST["submit"]))
{
	$giorni = $_POST["giorni"];
	$ore = (Float)$_POST["ore"];
	$compenso = (Float)$_POST["compenso"];

	$tot = $giorni * $ore * $compenso;

	echo("Guadagnerai $tot&euro; lavorando $giorni giorni al compenso di $compenso&euro;/h");
}
?>
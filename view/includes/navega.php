<?php 
$fitxer = basename($_SERVER['PHP_SELF']);
$pieces = explode( ".", $fitxer); 
$accio = $pieces[0];
?>
<script>
function avisar(){
	var fitx = '<?php echo $accio; ?>';
	if(fitx=='altaClient'||fitx=='modificarClient'||fitx=='altaTarifa'||fitx=='modificarTarifa'||fitx=='reservarHabitacio'||fitx=='modificarReserva'||fitx=='modificarHabitacio'){
		return confirm ("Sortir sense desar les modificacions?");
	}
}
</script>
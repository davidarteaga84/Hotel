<?php

//AVISOS CLIENT:
if (isset($_GET['errAltaClient'])){
	if ($_GET['errAltaClient']==0) { echo "Client donat d'alta correctament."; }
	else if ($_GET['errAltaClient']==1) { echo "Error donant d'alta client. DNI repetit?"; }
}
if (isset($_GET['errEliminaClient'])){
	if ($_GET['errEliminaClient']==0) { echo "Client eliminat correctament."; }
	else if ($_GET['errEliminaClient']==1) { echo "Error eliminant client."; }
}
if (isset($_GET['errConsultarClient'])){
	if ($_GET['errConsultarClient']==0) { echo "Coincidencies trobades."; }
	else if ($_GET['errConsultarClient']==1) { echo "No has omplert el camp."; }
}
if (isset($_GET['errModificarClient'])){
	if ($_GET['errModificarClient']==0) { echo "Client modificat correctament."; }
	else if ($_GET['errModificarClient']==1) { echo "Ha ocorregut un error inesperat modificant client."; }
}

//AVISOS TARIFES:
if (isset($_GET['errAltaTarifa'])){
	if ($_GET['errAltaTarifa']==0) { echo "Tarifa afegida correctament."; }
	else if ($_GET['errAltaTarifa']==1) { echo "Error afegint tarifa, repetida?"; }
	else if ($_GET['errAltaTarifa']==2) { echo "Error afegint tarifa, Format: lletra"; }
}
if (isset($_GET['errEliminarTarifa'])){
	if ($_GET['errEliminarTarifa']==0) { echo "Tarifa eliminada correctament."; }
	else if ($_GET['errEliminarTarifa']==1) { echo "Error eliminant tarifa."; }
}
if (isset($_GET['errModificarTarifa'])){
	if ($_GET['errModificarTarifa']==0) { echo "Tarifa modificada correctament."; }
	else if ($_GET['errModificarTarifa']==1) { echo "Error modificant tarifa."; }
}

//AVISOS RESERVES:
if (isset($_GET['errReservarHabitacio'])){
	if ($_GET['errReservarHabitacio']==0) { echo "Reserva realitzada correctament."; }
	else if ($_GET['errReservarHabitacio']==1) { echo "Error fent reserva."; }
	else if ($_GET['errReservarHabitacio']==2) { echo "La data de sortida no pot ser inferior a la d'entrada."; }
}

if (isset($_GET['errModificarHabitacio'])){
	if ($_GET['errModificarHabitacio']==0) { echo "Habitació modificada correctament."; }
	else if ($_GET['errModificarHabitacio']==1) { echo "Error modificant habitaci&oacute;."; }
}




?>
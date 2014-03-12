<div class="menu">
	<div class="fLeft">
		<a href="index.php" onClick="return avisar();"><img src="img/logoHotel.png" alt="Logo Hotel" /></a>
	</div>
	<div class="fRight">
		<b>Usuari:</b> <?php echo $usu; ?><br />
		<a href="index.php" onClick="return avisar();">Tornar a inici</a> - <a href="../controller/tancar-sessio.php" onClick="return avisar();">Tancar Sessi&oacute;</a>
	</div>
	<div class="clear"></div>
	
	<ul id="navlist">
		<li id="active">Gestionar clients
			<ul id="subnavlist">
				<li id="subactive"><a href="consultarClient.php" onClick="return avisar();">Clients</a></li>
				<li id="subactive"><a href="altaClient.php" onClick="return avisar();">+Donar d'alta client</a></li>
			</ul>
		</li>
		<li id="active">Gestionar tarifes
			<ul id="subnavlist">
				<li id="subactive"><a href="llistarTarifes.php" onClick="return avisar();">Tarifes</a></li>
				<li id="subactive"><a href="llistarHabitacions.php" onClick="return avisar();">Habitacions</a></li>
				<li id="subactive"><a href="altaTarifa.php" onClick="return avisar();">+Donar d'alta tarifa</a></li>
			</ul>
		</li>
		<li id="active">Gestionar reserves
			<ul id="subnavlist">				
				<li id="subactive"><a href="mostrarReserves.php" onClick="return avisar();">Reserves previstes</a></li>
				<li id="subactive"><a href="mostrarHistoricReserves.php" onClick="return avisar();">Hist&ograve;ric</a></li>
				<li id="subactive"><a href="reservarTipus.php" onClick="return avisar();">+Nova reserva</a></li>
			</ul>
		</li>
	</ul>
</div>

<html>
    <head>
        <meta charset="utf-8" />
        
        <title img src="img/Appricot.png">Price Tracker</title>
        
             <link rel="stylesheet" href="stylesheet.css" />
        
    </head>
    
    <body>

        <header>
            <h1><a href="index.php">Price Tracker</a></h1>
            <h2>Logare Reusita</h2>
        </header>
        
        <nav>
            <ul class="NavBar">
                <li><a href="index.php" class="homeIcon">Acasa</a></li>
                <li><a href="#">Noutati</a></li>
                <li><a href="#">Despre PriceTracker</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="login.php">Alatura-te PriceTracker</a></li>
            </ul>
        </nav>
		
		
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
		
			<form name="form2" method="POST" action="scrie.php">

				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
						<tr>
							<td colspan="3" align = "center"><strong>Introducere produs </strong></td>
						</tr>
						<tr>
							<td width="200">Link Produs</td>
							<td width="6">:</td>
							<td width="294"><input name="LinkProdus" type="text" id="LinkProdus"></td>
						</tr>
						<tr>
							<td>Nume</td>
							<td>:</td>
							<td><input name="Nume" type="text" id="Nume"></td>
						</tr>
						<tr>
							<td>Pret</td>
							<td>:</td>
							<td><input name="Pret" type="text" id="Pret"></td>
						</tr>
						<tr>
							<td>Data (Z/L/A)</td>
							<td>:</td>
							<td><input name="Data" type="text" id="Data"></td>
						</tr>
						<tr>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="submit" name="Submit" value="Submit"></td>
						</tr>
					</table>
				</td>
			</form>
		</tr>
	</table>
		
		
        
        <footer><img src="img/Appricot.png"></footer>
            
    </body>
</html>

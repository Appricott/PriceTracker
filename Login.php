<html>

    <head>
        <meta charset="utf-8" />
        
        <title img src="img/Appricot.png">Price Tracker</title>
        
             <link rel="stylesheet" href="stylesheet.css" />
        
    </head>
    
    <body>
			
        <header>
            <h1>Price Tracker</h1>
            <h2><a href="index.php">Evaluarea produselor in functie de pret</a></h2>
        </header>
        
        <nav>
            <ul class="NavBar">
                <li><a href="index.php" class="homeIcon">Acasa</a></li>
                <li><a href="#">Noutati</a></li>
                <li><a href="#">Despre PriceTracker</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
            </ul>
        </nav>
        
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
		
			<form name="form1" method="post" action="verifica.php">

				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
						<tr>
							<td colspan="3" align = "center"><strong>Autentificare </strong></td>
						</tr>
						<tr>
							<td width="78">Username</td>
							<td width="6">:</td>
							<td width="294"><input name="username" type="text" id="username"></td>
						</tr>
						<tr>
							<td>Parola</td>
							<td>:</td>
							<td><input name="password" type="password" id="password"></td>
						</tr>
						<tr>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="submit" name="Submit" value="Login"></td>
						</tr>
					</table>
				</td>
			</form>
		</tr>
	</table>
		
        <footer><img src="img/Appricot.png"></footer>
            
    </body>
	
</html>

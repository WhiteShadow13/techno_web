<html>
	<head>
		<meta charset="UTF-8">
		<title>Informations</title>
	</head>
	<body>

		<table>	
			<form method='post' action='index.php'>	
				<input type='hidden' name='page' value='controller_valid'/>
				<input type='hidden' name='order' value='next'/>
				<tr>
					<td>Firstname</td>
					<td><input type='text' name='firstname' value ='<?php if(isset($firstname))
					echo $firstname;?>'/></td>
					<td></td>
				</tr>
				
				<tr>
					<td>Lastname</td>
					<td><input type='text' name='lastname' value ='<?php if(isset($lastname))
					echo $lastname;?>'</td>
					<td></td>
				</tr>
				
				<tr>
					<td>Age</td>
					<td><input type='text' name='age' value ='<?php if(isset($age))
					echo $age;?>'/></td>
					<td></td>
				</tr>		
								
				<tr>					
					<td><input type='submit' value='Etape suivante'/></td>
			</form>	

					<form method='post' action='index.php'>
						<td>
							<input type='hidden' name='page' value='controller_reserv'/>
							<input type='submit' value='Page précédente'/>
						</td>
					</form>

					<form method='post' action='index.php'>
						<td>				
							<input type='hidden' name='page' value='controller_annulation'/>								
							<input type='submit' value='Annuler la réservation'/>				
						</td>
					</form>
				</tr>	
		</table>
					
	</body>
</html>
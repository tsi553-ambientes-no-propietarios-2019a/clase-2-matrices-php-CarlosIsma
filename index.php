<!DOCTYPE html>
<html>
	<h1>
		Ambientes No Propietarios <br>
	 	Carlos Ismael Lucero Chamaza <br>
		Arreglo Matriz 
	</h1>
	<? php 
		$usuarios =array (
			' Sergio ' => array ( ' Lucero ' , 32 ),
			' Pedro ' => array ( ' Collaguazo ' , 31 ),
			' Jazmin ' => array ( ' Mendoza ' , 22 )
		);
 	?>
 		<table border="1">
 		<tr>
 			<th> Nombre </th>
 			<th> Apellido </th>
 			<th> Edad </th>
 		</tr>

 		<? php 
			foreach ( $ usuarios  as  $ nombres  =>  $ datos ) {
				# código ...
				echo  ' <tr> ' ;
				echo  ' <td> ' . $ nombres . ' </td> ' ;
					foreach ( $ datos    $ apellido_edad ) {
						echo  ' <td> ' ;
						echo  $ apellido_edad ;
						echo  ' </td> ' ;
					}
				echo  ' </tr> ' ;
		}
	?>
 	</table>
</html>


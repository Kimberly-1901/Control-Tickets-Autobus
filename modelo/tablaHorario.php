<?php

class Tabla extends Conectar{

	public function llenarTabla(){
		$mysqli = parent::Conexion();
		$query="SELECT * FROM horarioprecios";
		$consulta3=$mysqli->query($query);
		if($consulta3->num_rows>=1){
			echo "<table id='customers'>
			<thead>
				<tr>
					<th>Ruta</th>
					<th>Horario</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>";
			while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
				echo "<tr>
					<td>".$fila['ruta']."</td>
					<td>".$fila['horario']." AM</td>
					<td>$".$fila['precio']."</td>
				</tr>";
			}
			echo "</tbody>
		</table>";
		}else{
			echo "No hay rutas en este momento";
		}
	}
	
}
?>
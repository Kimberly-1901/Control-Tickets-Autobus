<?php

class Tabla extends Conectar{

	public function llenarTabla(){
		$mysqli = parent::Conexion();
		$query="SELECT * FROM horarioprecios";
		$consulta3=$mysqli->query($query);
        $contador = 0;
        
		if($consulta3->num_rows>=1){
			echo "<table id='customers2'>
			<thead>
				<tr>
					<th>Ruta</th>
					<th>Horario</th>
					<th>Precio</th>
                    <th>Seleccionar Ruta</th>
				</tr>
			</thead>
			<tbody>";
			while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
                $contador++;
				echo "<tr>
					<td>".$fila['ruta']."</td>
					<td>".$fila['horario']." AM</td>
					<td>$".$fila['precio']."</td>
                    <td><input class='seleccionar' type = 'button' value='Seleccionar' onclick='add(this)' id='$contador'></td>
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
<?php
    $con = mysqli_connect("localhost", "root", "", "hospital");
    $nombre = $_GET['nombre'];
    $query="SELECT * FROM medico WHERE nombre LIKE '%$nombre%'";
    $result=$con->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cedula"]. "</td><td>" . $row["nombre"] . "</td><td>". $row["apellidos"]. "</td><td>" . $row["edad"]. "</td><td>" . $row["sede"]. "</td>
        <td>" . $row["usuario"]. "</td><td>" . $row["password"]. "</td><td>" . $row["especialidad"]. "</td> </tr>";
    }
    echo "</table>";
} else { echo "0 results"; }

?>
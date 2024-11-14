<?php
  include("conexion.php");

  $query = "SELECT * FROM usuarios;";
  if (mysqli_connect_errno()) {
    echo "<div class=\"alert alert-danger\"><strong>Error</strong>" . mysqli_connect_error() . "</div>";
  }

  $result = mysqli_query($con, $query);
  mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insatagram</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Contenedor principal de BS5 -->
    <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <a class="navbar-brand" href="index.html">
              <img src="logo.jpg" alt="Insatagram Logo" style="width:40px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.html">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consulta.php">Consulta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Acerca de</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h2 class="my-5">Usuarios registrados</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['nombre'] . "</td>";
              echo "<td>" . $row['correo'] . "</td>";
              echo "<td>" . $row['edad'] . "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
</body>
</html>
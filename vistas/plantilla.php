<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halo Infinite</title>
    <?php
$url = ruta::ctrRuta();
?>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/main.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/scheme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Agrega estos enlaces después de las dependencias de Bootstrap -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    
  </head>
  <body>
    <div id="main-container">
      <header>
        <nav>
          <div class="mobile">
            <div class="header">
              <button id="bmenu">
                <span class="material-icons">&#xe5d2;</span>
              </button>
              <a href="#"> <img src="<?php echo $url;?>vistas/img/logo.png" width="150" /> </a>
              <div>
                <a href="#"> <span class="material-icons">&#xe8cc;</span> </a>
                <a href="#"> <span class="material-icons">&#xe853;</span> </a>
              </div>
            </div>

            <div class="links">
              <a href="#">Game Pass</a>
              <a href="#">Games</a>
              <a href="#">Devices</a>
              <a href="#">Cloud Gaming</a>
              <a href="#">Community</a>
              <a href="#">Support</a>
              <a href="#">My Xbox</a>
              <a href="#">All Microsoft</a>
              <a href="#">Search</a>
            </div>
          </div>

          <ul>
            <li>
              <a href="#"><img src="<?php echo $url;?>vistas/img/logo.png" width="120" /></a>
            </li>
            <li><a href="#" class="link">Pase</a></li>
            <li><a href="#" class="link link-hide">Dispositivos</a></li>
            <li><a href="#" class="link link-hide">Juega en la nube</a></li>
            <li><a href="#" class="link link-hide">Comunidad</a></li>
            <li><a href="#" class="link link-hide">Soporte</a></li>
        
          </ul>
          <ul>
            <li><a href="#" class="link">Buscar</a></li>
            <li><a href="#" class="link">Carrito de compra</a></li>
            <li><a href="#" class="link">Inicia sesión</a></li>
          </ul>
        </nav>
      </header>

      <section id="banner">
        <h2>Halo Infinite</h2>
        <p>
        <form method="POST" action="<?php echo $url;?>controladores/basesEjecutar.php">
        <textarea name="query" id="query" rows="4" cols="50" style="width:100%;"></textarea><span class="material-icons">&#xe5cc;</span>
        <p>Ejecuta tu query y vive la experiencia</p>

        <button type="submit" value="Ejecutar" class="green-link">Ejecutar
        <span class="material-icons">&#xe5cc;</span>
    </button>
</form>


          
        </p>
        <p>
       
        </p>
      </section>

      <section id="videos">
        <h2>RESULTADOS DE QUERY</h2>
        <?php
  if ($result) {
      if (is_string($result)) {
          echo "Error: " . $result;
      } else {
          // Mostrar el resultado de la consulta en una tabla
          echo "<div class='table-responsive'>";
          echo "<table id='myTable' class='table table-striped table-hover'>"; // Agrega un ID a la tabla
          echo "<thead class='table-dark'>";
          echo "<tr>";
          for ($i = 0; $i < $result->columnCount(); $i++) {
              $col = $result->getColumnMeta($i);
              echo "<th scope='col'>" . $col['name'] . "</th>";
          }
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
} else {
    echo "No se recibió ninguna consulta.";
}
?>

        <p class="w-75">
         Juega con usuarios al rededor del mundo. 
        </p>


       
      </section>

      <section id="multi-player">
        <div class="info">
          <h2>TOP 10 JUGADORES CON MÁS TIEMPO</h2>
          <?php
  if ($result2) {
      if (is_string($result2)) {
          echo "Error: " . $result2;
      } else {
          // Mostrar el resultado de la consulta en una tabla
          echo "<div class='table-responsive'>";
          echo "<table id='myTable' class='table table-striped table-hover'>"; // Agrega un ID a la tabla
          echo "<thead class='table-dark'>";
          echo "<tr>";
          for ($i = 0; $i < $result2->columnCount(); $i++) {
              $col = $result2->getColumnMeta($i);
              echo "<th scope='col'>" . $col['name'] . "</th>";
          }
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
} else {
    echo "No se recibió ninguna consulta.";
}
?>
        </div>
      </section>

      <section id="get-the-game">
        <h2>Partidas en vivo.</h2>
      
        <div class="item-store">
          <div class="left">
            <img src="<?php echo $url;?>vistas/img/game.png" alt="" />
          </div>

          <div class="right">
          <?php
  if ($result3) {
      if (is_string($result3)) {
          echo "Error: " . $result3;
      } else {
          // Mostrar el resultado de la consulta en una tabla
          echo "<div class='table-responsive'>";
          echo "<table id='myTable' class='table table-striped table-hover'>"; // Agrega un ID a la tabla
          echo "<thead class='table-dark'>";
          echo "<tr>";
          for ($i = 0; $i < $result3->columnCount(); $i++) {
              $col = $result3->getColumnMeta($i);
              echo "<th scope='col'>" . $col['name'] . "</th>";
          }
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = $result3->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
} else {
    echo "No se recibió ninguna consulta.";
}
?>
          </div>
        </div>
      </section>
      <section id="get-the-game">
        <h2>Cosmeticos Disponibles.</h2>

        <div class="item-store">
          <div class="left">
          <?php
  if ($result4) {
      if (is_string($result4)) {
          echo "Error: " . $result4;
      } else {
          // Mostrar el resultado de la consulta en una tabla
          echo "<div class='table-responsive'>";
          echo "<table id='myTable' class='table table-striped table-hover'>"; // Agrega un ID a la tabla
          echo "<thead class='table-dark'>";
          echo "<tr>";
          for ($i = 0; $i < $result4->columnCount(); $i++) {
              $col = $result4->getColumnMeta($i);
              echo "<th scope='col'>" . $col['name'] . "</th>";
          }
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = $result4->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
} else {
    echo "No se recibió ninguna consulta.";
}
?>
          </div>
          <div class="right">
            <img src="<?php echo $url;?>vistas/img/cosmeticos.jpg" alt="" />
          </div>
        </div>
      </section>
      <footer></footer>
    </div>
  <!-- Enlace al archivo JavaScript de Bootstrap y dependencias -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $url;?>vistas/js/main.js" type="module"></script>
    <script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

  </body>
</html>

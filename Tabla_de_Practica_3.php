<?php 
//include '../../Controllers/listAlumno.php'; 
require_once '../TABLAS/conexionnn.php';
//echo hola();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">-->
    <script src="https://kit.fontawesome.com/f1ab18bc8e.js" crossorigin="anonymous"></script>
    <meta name="author" content="Emanuel Vallejo Gil/>
    <meta name="description" content="Este sitio web ed de aoquilar equipos de computo"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Formulario_Alquiler</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #copy{
          initial-letter-align: top;
        }
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">FAST ALQUILER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\Users\Emanuel\Curso-de-aplicaciones-WEB\Sistema\Views/Practica-3.html">Formulario_Alquiler</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MAS OPCIONES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Ayuda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Reportar problema</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="container">
    <h1>Tabla de Formularios_Alquiler</h1>
    <table class="table table-dark" border="1">
        <tr><th colspan="5">Tabla Alquiler</th></tr>
        <tr>
            <td>ID_Alquiler</td>
            <td>ID_Equipo</td>
            <td>ID_Registro</td>
            <td>Clasificaion</td>
            <td>Nombre-usuario</td>
            <td>Precio</td>
            <td>Descripcion</td>
            <td>Fecha de Registro</td>
            <td>Operadores</td>
        </tr>
        <tbody>
                      <?php 
                        $queryResult = $pdo->query("SELECT * FROM alquiler");
                            while($alquiler = $queryResult->fetch()){ ?>
                    <tr scope="row">    
                  <td><?php echo $alquiler['ID_Alquiler'] ?></td>
                  <td><?php echo $alquiler["ID_Equipo"] ?></td>
                  <td><?php echo $alquiler["ID_Registro"] ?></td>
                  <td><?php echo $alquiler["Clasificacion"] ?></td>
                  <td><?php echo $alquiler["Nombre-usuario"] ?></td>
                  <td><?php echo $alquiler["Precio"] ?></td>
                  <td><?php echo $alquiler["Descripcion"] ?></td>
                  <td><?php echo $alquiler["Fecha de Registro"] ?></td>
                  
                  <td>
                <button type="button" class="btn btn-primary"><i class="fas fa-user-check"></i></button>
                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </td>
                </tr>
                <?php } ;?>

            </tbody>
    </table>
</div>
    <div class="copy">
        <!-- Footer -->
        <footer class="page-footer bg-secondary font-small blue pt-4">
        
          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
              <!-- Grid column -->
              <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h5 class="text-uppercase">FAST ALQUILER</h5>
                <p>Aquilar siempre es una opcion</p>
        
              </div>
              <!-- Grid column -->
        
              <hr class="clearfix w-100 d-md-none pb-3">
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Contactos</h5>
        
                <ul class="list-unstyled">
                  <li>
                    <a p style=color:white href="#!">al22184563@gmail.com</a>
                  </li>
                  <li>
                    <a p style=color:white href="#!">al22194567@gmail.com</a>
                  </li>
                  <li>
                    <a p style=color:white href="#!">al22191674@gmail.com</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Soporte</h5>
        
                <ul class="list-unstyled">
                  <li>
                    <a p style=color:white href="#!">Reportar fallos</a>
                  </li>
                  <li>
                    <a p style=color:white href="#!">Acerca de</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div p style=color:white class="footer-copyright text-center py-3">© 2020 Copyright:
            <a p style=color:white href="https://mdbootstrap.com/"> MDBootstrap.com</a>
          </div>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
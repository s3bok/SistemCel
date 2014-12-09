<!DOCTYPE html>
<html lang="es">

		<head>
			 <link href="dist/css/bootstrap.css" rel="stylesheet">
             <link href="dist/css/dashboard.css" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                 <script src="dist/js/bootstrap.min.js"></script>           
      </head>
      <body>

  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Reportes <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reparacion</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="#">Almacen</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Clientes</a></li>
          </ul>          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Reportes</h1>
          <a href="reports/reportes/exemple07.php" TARGET="_blank"><span class="glyphicon glyphicon-file">Reporte de reparacion </span> <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
   

    
  </body>
</html>
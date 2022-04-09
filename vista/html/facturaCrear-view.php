<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SGI-Generar Facturas</title>
  <link href="vista/css/estilo.css" rel="stylesheet" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  
  
</head>
<body>
  <header class="encabezado2">
    <h1 class="titulo2">Sistema de Gestion de Inventario <img class="imagen3" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
      <label class="admin2">Vendedor<a href="close.php" name="cerrarSesion">Cerrar Sesion</a> </label>
    </h1>
  </header>
  <div class="barra2">
    <nav class="navegacion3">
      <ul class="menu3">
        <li><a href="inicioVendedor.php">Inicio</a></li>
        <li><a href="consultaFactura.php">Consulta Factura</a></li>
        <li><a href="inicioVendedor.php">Generar Factura</a></li>
        <li><a href="clienteConsulta.php">Consulta Clientes</a></li>
        <li><a href="clientesCrear.php">Registrar Clientes</a></li>
      </ul>
    </nav>
  </div>
  <hr>
  <div class="clearfix"></div> 
  <main class="encabezadoFactura">
    <section class="seccion1">
      
      <form class="row g-3">
        <h3 class="Cabecera">Cabecera factura</h3>

        <div class="col-md-6">
          <label class="form-label">Razon Social:</label>
          <input type="text" class="form-control is-valid" name="nombresCli" required> 
        </div>

        <div class="col-md-3">
          <label class="form-label">CC/NIT: </label>
          <select class="form-select" name="tipoDocCliFac" required>
            <option>--Seleccionar--</option>
            <option>Cedula/Personal Natural</option>
            <option>NIT/Persona Juridica</option>
          </select> 
        </div>

        <div class="col-md-3">
          <label class="form-label">Numero Doc: </label>
          <input type="text" class="form-control is-valid" name="NumDocCliFac" required> 
        </div></br>

        <div class="col-md-4">
          <label class="form-label">Fecha Factura: </label>
          <input type="date" class="form-control is-valid" name="fechaFac" required>
        </div>

        <div class="col-md-4">
          <label class="form-label">Direccion: </label>
          <input type="text" class="form-control is-valid" name="direccionCliFac" required>          
        </div>

        <div class="col-md-4">
          <label class="form-label">Telefono: </label><br>
          <input type="text" class="form-control is-valid" name="telefonoCliFac" required>          
        </div>

        <div class="col-md-2">
          <label class= form-label>Cantidad</label>
          <input type="number" class="form-control is-valid" name="cantidadFac" id="cantidad" required>
        </div>

        <div class="col-md-3">
          <label class="form-label">Descripcion</label></td><br>
          <select name="productoFac" class="form-select" id="descripcion" required>
            <option>--Seleccionar--</option>
            <option>Producto1</option>
            <option>Producto2</option>
            <option>Producto3</option>
          </select>
        </div>

        <div class="col-md-2">
          <label class="form-label">Valor U.</label>
          <input class="form-control is-valid" type="int" name="valorUnProdFac" id="valorU" required>
        </div>
        
        <div class="col-md-2">
          <label class="form-label">IVA</label>
          <input type="int" name="ivaFac" class="form-control is-valid" id="ivaP" required>
        </div>
               
        <div class="col-md-2">
          <label class="form-label">V. Total</label>
          <input class="form-control is-valid" type="int" name="valorTProdFac" id="valortTProd" required>
        </div>

        <div class="col-md-1"><button type="submit" class="btn btn-primary" id="btnAgregrar" name="agregrarProd" onclick="getDatos()">Agregar</button></div>
        
        <table>
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Descripcion</th>
              <th>V. Unitario</th>
              <th>IVA</th>
              <th>V. Total</th> 
              <th>Accion</th>
            </tr>
          </thead>
          <tbody id="cuerpoTabla" name="cuerpoT">
            
          </tbody>
        </table>         

        <div class="col-md-2"><button type="submit" class="btn btn-primary" name="generarFac">Generar Factura</button> </div>
      </form>
    </section>
  </main>
  <hr>
  <script type="text/javascript" src="vista/js/factura"></script>
  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <hr>
  <div class="clearfix"></div>  

  <footer class="piepagina2">
    <p>Contactenos</p>
    <p>Telefono: 302 414 83 24</p>
    <p>Correo: SoporteSGI@gmail.com</p>
  </footer>




</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link rel="stylesheet" href="Add_FORM.css">
</head>
<body>
  <header>
    </article>
    <h1>NEW CROSS</h1>

   
    <section class="menu-container">
        <form action="../controladores/Controlador_Peticiones_Index.php" method="POST">
        <ul class="menu">
          
          <li class="element">
            <input type="submit" name="accion" value="AñadirProducto"></input>
          </li>

          <li class="element" id="element-productos">
            <input type="submit" name="accion" value="ListarProductos"></input>
          </li>

          <li class="element">
            <input  type="submit" name="accion" value="ModificarProducto"></input>
          </li>

          <li class="element">
            <input type="submit" name="accion" value="EliminarProducto"></input>
          </li>
        </ul>
      </form>
      </section>
   
  </header>

  <main class="container-main">
    
  <form action="../controladores/Controlador_Peticiones_Add.php" method="POST">

<label for="nombre"><input type="text" name="nombre" placeholder="Nombre" required></input></label>

<label for="descripcion"><textarea name="descripcion" id="descripcion" placeholder="Descripcion" rows="3" required></textarea></label>

<label for="precio"><input type="number" step="0.01" name="precio" placeholder="Precio" required></input></label>

<div class="buttons">
    <input type="submit" value="Añadir" name="add" class="button"></input>
    <input type="reset" value="Limpiar" class="button"></input>
</div>
</form>
   

  </main>

  <footer>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d284116.4208322317!2d-4.195082066281729!3d40.15230350566081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418abca1271545%3A0x145d868057499726!2sNike%20Store%20Getafe!5e1!3m2!1ses!2ses!4v1730638611725!5m2!1ses!2ses" id="nuestraUbicacion" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <section class="footer-1">
                    <article class="footer-info">
                        <div class="info">
                                <p>
                                  <a href="">Facebook </a><br><br> 
                                  <a href="">Instagram</a> <br><br>
                                </p>
                        </div>
                        
                        <div class="info">
                            <p>
                              <a href="">Devoluciones</a><br><br> 
                              <a href="">Order tracking </a><br><br> 
                              <a href="">Términos y condiciones </a><br><br>
                              <a href="siteMap.html">Sitemap</a>
                            </p>
                        </div>
                    </article>

                    <article class="legal">
                      <hr>
                      <br>
                        <div class="politica-Y-terminos">
                            <a href="" title="Accede a nuestra política de cookies">Política de Cookies</a>
                        </div>
                    <p class="copyright">© 2024 Todos los derechos reservados para NEW CROSS</p>
                    </article>
                </section>
</footer>
</body>
</html>
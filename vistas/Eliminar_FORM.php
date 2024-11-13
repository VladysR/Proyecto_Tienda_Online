<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="cssGeneral/general.css">
    <link rel="stylesheet" href="Eliminar_FORM.css">
    <link rel="stylesheet" href="cssGeneral/header.css">
    <link rel="stylesheet" href="cssGeneral/footer.css">
    <link rel="stylesheet" href="cssGeneral/logoUser.css">
    <?php session_start();?>
</head>
<body>
    <header>
    </article>
    <h1>NEW CROSS</h1>

    <div id="user">
      <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 50 50"><path fill="black" d="M25.1 42c-9.4 0-17-7.6-17-17s7.6-17 17-17s17 7.6 17 17s-7.7 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.8-15-15-15"/><path fill="black" d="m15.3 37.3l-1.8-.8c.5-1.2 2.1-1.9 3.8-2.7s3.8-1.7 3.8-2.8v-1.5c-.6-.5-1.6-1.6-1.8-3.2c-.5-.5-1.3-1.4-1.3-2.6c0-.7.3-1.3.5-1.7c-.2-.8-.4-2.3-.4-3.5c0-3.9 2.7-6.5 7-6.5c1.2 0 2.7.3 3.5 1.2c1.9.4 3.5 2.6 3.5 5.3c0 1.7-.3 3.1-.5 3.8c.2.3.4.8.4 1.4c0 1.3-.7 2.2-1.3 2.6c-.2 1.6-1.1 2.6-1.7 3.1V31c0 .9 1.8 1.6 3.4 2.2c1.9.7 3.9 1.5 4.6 3.1l-1.9.7c-.3-.8-1.9-1.4-3.4-1.9c-2.2-.8-4.7-1.7-4.7-4v-2.6l.5-.3s1.2-.8 1.2-2.4v-.7l.6-.3c.1 0 .6-.3.6-1.1c0-.2-.2-.5-.3-.6l-.4-.4l.2-.5s.5-1.6.5-3.6c0-1.9-1.1-3.3-2-3.3h-.6l-.3-.5c0-.4-.7-.8-1.9-.8c-3.1 0-5 1.7-5 4.5c0 1.3.5 3.5.5 3.5l.1.5l-.4.5c-.1 0-.3.3-.3.7c0 .5.6 1.1.9 1.3l.4.3v.5c0 1.5 1.3 2.3 1.3 2.4l.5.3v2.6c0 2.4-2.6 3.6-5 4.6c-1.1.4-2.6 1.1-2.8 1.6"/></svg>
      <p><?php isset($_SESSION['user']) ? print $_SESSION['user'] : print 'USER'?></p>
    </div>

    <form action="../controladores/Controlador_Peticiones_Index.php" method="post">
        <button type="submit" name="accion" id="cerrarSesion" value="cerrarSesion"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="red" d="M10 3H8v1.88l2 2zm6 6v3.88l1.8 1.8l.2-.2V9c0-1.1-.9-2-2-2V3h-2v4h-3.88l2 2zM4.12 3.84L2.71 5.25L6 8.54v5.96L9.5 18v3h5v-3l.48-.48l4.47 4.47l1.41-1.41zm8.38 13.33V19h-1v-1.83L8 13.65v-3.11l5.57 5.57z"/></svg></button>
    </form>

   
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

  <!-- main -->
  <main class="container-main">
    <h2>Eliminar producto por ID</h2>
    <p>Si tiene dudas del ID, consulte la lista de productos.</p>
    
    <form action="../controladores/Controlador_Peticiones_Eliminar.php" method="POST">
  
        <label for="id"><input type="number" name="id" placeholder="ID" step="1"  required></input></label>
        
        <div class="buttons">
            <input type="submit" value="Eliminar" name="add" class="button"></input>
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
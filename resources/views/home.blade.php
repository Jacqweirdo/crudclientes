<!doctype html>
<html lang="en">
    <head>
        <script src="https://kit.fontawesome.com/4f6d7f0454.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>CRUD</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <header class="container-fluid row bg-body-tertiary">
    <nav class="navbar navbar-expand-lg" id="nav">
    <div id="logoHome">
    <img src="/images/logoUpp2.jpg" id="logoUpp">
    <FONT size=0.6 id="Siupp">SISTEMA 
      <br/>
      INTEGRAL DE
      <br/> INFORMACIÓN</FONT>
    
    </div>

  <div id="botonesNav">
    <i class="fa-solid fa-bell" style="color: #ffffff;" id="notificacion"></i> 
    <img src="/images/user.png" class="rounded-circle" id="perfil">
    <FONT size=0.6 id="Siupp2">REYES FUENTES MELANY JACQUELINE |  </FONT>
    <FONT size=0.6 id="Siupp2">TUTOR: GONZALEZ PERALTA MAYRA FABIOLA</FONT> 
  </div>
    </nav>

    

    </header>
    <section id="aside">
      <article id="menuAside">
        <div id="menuPalabra">
        <FONT COLOR=#37646F size=2>MENÚ</FONT>
        </div>
      
      </article>
        
    </section>
    @yield('content')
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript" src="js/validaredit.js"></script>
</body>
</html>

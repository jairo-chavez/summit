<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>talleres</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      /* Reset básico */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  padding-top: 4.3rem;
  background-color: #f5f5f5;
}

/* HEADER */
.header {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px;
  background: white;
  border-bottom: 1px solid #e6e6e6;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1500;
}

/* Botón hamburguesa (visible en móvil) */
.menu-btn {
  background: none;
  border: none;
  font-size: 26px;
  cursor: pointer;
  line-height: 1;
}

/* Logo centrado en móvil */
.logo {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}
.logo img {
  max-width: 100%;
  height: 44px; 
  object-fit: contain;
}

/* Sidebar (off-canvas móvil) */
.sidebar {
  position: fixed;
  top: 0;
  left: -260px;             /* oculto por defecto */
  width: 260px;
  height: 100vh;
  background: #333;
  color: #fff;
  padding-top: 60px;
  transition: left 0.32s ease;
  z-index: 1300;
  box-shadow: 2px 0 12px rgba(0,0,0,0.15);
}

.sidebar.open {
  left: 0;
}

.close-btn {
  position: absolute;
  top: 12px;
  right: 12px;
  background: none;
  border: none;
  color: #fff;
  font-size: 28px;
  cursor: pointer;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar ul li {
  padding: 14px 18px;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}

.sidebar ul li a {
  color: #fff;
  text-decoration: none;
  display: block;
  font-weight: 500;
}
.active {
    border-bottom: none;   /* quitamos el borde */
    background: rgb(255, 255, 255,0.08);   /* le damos fondo distinto */
    border-radius: 6px;    /* opcional, para que se vea como pill */
    padding: 8px;          /* un poco de espacio */
  }

/* Overlay (cuando el sidebar está abierto) */
.overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s ease, visibility 0.25s ease;
  z-index: 1250;
}
.overlay.show {
  opacity: 1;
  visibility: visible;
}

/*heroooo*/
.hero picture,
.hero img {
  width: 100%;
  height: auto;
  display: block;
}

/*presentación*/
.presentacion {
    background-color: #fff;
    text-align: center;
    padding: 2.5rem 0 3rem 0;
    max-width: 800px;
    margin: 0 auto;
    
}
.hero-texto{
  color: #280e77;
  font-size: 1.4rem;
  padding: 0 0.2rem;
}

.descripcion {
  font-size: 1.8rem;
 max-width: 800px; /* ancho máximo para que no se extienda mucho */
  margin: 0 auto 2rem; /* centrado y espacio inferior */
  padding: 0 1rem;
  text-align: center;
  line-height: 1.6; /* más aire entre líneas */
  word-wrap: break-word; /* evita que algo muy largo se rompa */
  font-size: 1.1rem; /* tamaño cómodo en móvil */
  color: #000; /* gris oscuro, más suave que negro puro */
  letter-spacing: 0.3px; /* un poquito de espacio entre letras */
}
.descripcion p{
  margin-bottom: 1rem;
}
.btn-registro {
  display: inline-block;
  background-color: #280e77;
  color: #fff;
  padding: 15px 30px;
  border-radius: 30px;
  text-decoration: none;
  font-size: 1.2rem;
  font-weight: bold;
  
}

.img-section {
  display: flex;
  justify-content: center; /* centra horizontal */
  align-items: center;     /* centra vertical si le das altura */
  padding: 1rem;
}

.responsive-img {
  max-width: 100%;  /* que no se pase del ancho de su contenedor */
  height: auto;     /* mantiene proporción */
  display: block;   /* evita espacio extra abajo */
  box-shadow: 1px 10px 15px black;
}
@media (min-width: 768px) {
  
}

@media (min-width: 1024px) {

}

/* Lista de eventos */
/* Estilo base (First Mobile) /
.evento1 {
  display: flex;
  flex-direction: column;
  background: #f5f5f5;
  border-radius: 10px;
  padding: 1.5rem;
  border: 1px solid #ddd;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
  margin-bottom: 1.5rem;
  transition: transform 0.2s ease;
}
/* Contenedor del ponente *
.ponente1 {
  position: relative;
  width: 200px;
  text-align: center;
  margin-bottom: 1rem;
}

/* Foto del ponente *
.ponente1-foto {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #ddd;
}

/* Bandera *
.bandera1 {
  position: absolute;
  top: -5px;
  right: -5px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 2px solid white;
  z-index: 12;
  object-fit: cover;
  background: white;
}

/* Nombre debajo del ponente *
.ponente1-nombre {
  margin-top: -15px; /* lo sube un poco para pegarlo más al círculo *
  font-weight: bold;
  color: #333;
  background: white;
  display: inline-block;
  padding: 2px 6px;
  border-radius: 6px;
  position: relative;
  z-index: 13;
}
.evento1:hover {
  transform: translateY(-5px);
}

.evento-info h3 {
  margin-bottom: 0.5rem;
  color: #000;
}

.evento-info p {
  margin: 0.3rem 0;
  color: #000;
  font-size: 0.95rem;
}
.verMas{
    margin-top: 1rem;
    text-align: center;

}
.verMas a{
    text-decoration: none;
    background-color: #280e77;
    color: #fff;
    font-size: 1.4rem;
    padding: 0.8rem 1.5rem;
    border-radius: 8px;

}

/*ponentessss*
.panel-ponentes {
  padding: 2rem 1rem;
  text-align: center;
}

.panel-ponentes h2 {
  color: #2a1466;
  font-size: 2rem;
  margin-bottom: 2rem;
}

.ponentes-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
}

.ponente {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.ponente-img {
  position: relative;
  width: 200px;
  height: 200px;
}

.ponente-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #ffd700; /* borde dorado *
}

.bandera {
  position: absolute;
  top: -5px;
  right: -5px;
  width: 50px;
  height: 50px;
}

.bandera img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 2px solid #fff;
}

.ponente-info {
  background: #4b2bb2;
  color: #fff;
  padding: 0.6rem 1rem;
  border-radius: 10px;
  margin-top: -15px;
  z-index: 11;
}

.ponente-info h3 {
  margin: 0;
  font-size: 1.1rem;
}

.ponente-info p {
  margin: 0;
  font-size: 0.85rem;
}


/*sponsors*
.section {
  text-align: center;
  padding: 2.5rem 0rem;
}

.section h2 {
  font-size: 2.5rem;
  margin-bottom: 3.5rem;
  color: #280e77;
}

/* --- Animación tipo marquee --- */
.logo-slider {
  position: relative;
  overflow: hidden;
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  height: 80px;
  mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
  -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
}

.logo-track {
  display: flex;
  gap: 60px;
  animation: scroll 40s linear infinite;
  width: max-content;
  align-items: center;
}

/* Pausa al hacer hover */
.logo-slider:hover .logo-track {
  animation-play-state: paused;
}

/* 👇 Estilos base: móvil primero *
.logo-track img {
  max-height: 80px;
  max-width: 90px;
  object-fit: contain;
  filter: grayscale(30%);
  transition: filter 0.3s, transform 0.3s;
}
.logo-track.dircetur{
  max-height: 40px;
  max-width: 40px;  
}
.logo-track img:hover {
  filter: grayscale(0%);
  transform: scale(1.05);
}

@keyframes scroll {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}


/*footer*/
.footer {
  background-color: #32158c;
  color: white;
  text-align: center;
  padding: 20px 10px;
}

.social-icons {
  margin-bottom: 10px;
}

.social-icons a {
  color: white;
  font-size: 1.5rem;
  margin: 0 10px;
  display: inline-block;
  transition: transform 0.3s ease, color 0.3s ease;
}

.social-icons a:hover {
  color: #04a364; /* verde corporativo */
  transform: scale(1.2);
}

.copy {
  font-size: 0.9rem;
  margin-top: 5px;
}

@media (min-width: 768px) {

  body {
  padding-top: 5.5rem;
}

/*presentación*/
.presentacion {
    margin-top: 2rem;
    padding: 1rem 0 3rem 0;
    border-radius:40px;

}
.hero-texto{
  margin: 2.5rem 0 3rem 0;
  font-size: 1.6rem;
}

.descripcion {
  text-align: center;
  padding: 0 1rem;
  line-height: 1.6; /* más aire entre líneas */
  font-size: 1.1rem; /* tamaño cómodo en móvil */
  letter-spacing: 0.3px; /* un poquito de espacio entre letras */
}
.descripcion p {
  font-size: 1.8rem;
}
.btn-registro {
  padding: 15px 30px;
  border-radius: 30px;
  font-size: 1.2rem;
}
.btn-registro:hover {
  background-color: #4e3a8bff;
}
.img-section {
    padding: 2rem;
  }

  .responsive-img {
    max-width: 70%; /* en tablet se reduce un poco */
  }
}

/*eventooo-desglose por tipos*  
.evento1 {
    background-color: #fff;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin: auto;
    margin-top: 1rem;
    max-width: 800px;
    gap: 3rem;
  }

  .evento1:nth-child(even) {
    flex-direction: row-reverse;
  }
  .evento-info:nth-child(even) {
    margin:0 8rem;
  }

  .evento-img {
    flex: 0 0 40%;
    max-height: 220px;
  }
  .ponente1{
    margin: 0 2rem;
  }
  .lista-eventos h2{
    color: #280e77;
    text-align: center;
    margin-top: 1rem;
    padding: 2rem 0;
  }
  .evento-info {
    flex: 1;
  }

  .lista-eventos {
    max-width: 100%;
    margin: 0 auto;
    border-radius: 40px;
    padding-bottom: 5rem;
  }

/*ponentessssssss*
  .ponentes-grid {
    grid-template-columns: repeat(3, 1fr);
  }

  
/*sponsor
.section {
  text-align: center;
  padding: 60px 20px;
}
  .logo-slider {
    height: 250px;
  }
  .logo-track {
    gap: 150px;
    animation: scroll 60s linear infinite;

  }
  .logo-track img {
    max-height: 140px;    
    max-width: 180px;
    transition: transform 0.4s ease, filter 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
  }
  .logo-track img:hover {
    transform: scale(1.15);
    filter: brightness(1.2);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    border-radius: 12px;
  }
}



/* Responsive ajustes 
@media (max-width: 600px) {


  /*desglose por tipo/
  .evento1 {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
/*talleres y juegos/
  .evento-img {
    width: 100%;
    height: auto;
  }
}*/

@media (min-width: 1025px) {

   /* Oculta los controles móviles */
  .menu-btn,
  .close-btn,
  .overlay { display: none; }

  /* Header layout para escritorio */
  .header {
    padding: 12px 28px;
    align-items: center;
  }

  /* Logo a la izquierda */
  .logo {
    flex: 0 0 auto;
    justify-content: flex-start;
  }
  .logo img { height: 64px; }

  /* Convertimos el sidebar en nav horizontal visible */
  .sidebar {
    position: static;
    left: auto;
    width: auto;
    height: auto;
    background: transparent;
    color: inherit;
    padding: 0;
    box-shadow: none;
    transition: none;
    display: block;   /* se muestra en la cabecera */
    margin-left: auto; /* empuja al nav a la derecha */
  }

  .sidebar ul {
    display: flex;
    gap: 22px;
    align-items: center;
  }

  .sidebar ul li {
    padding: 0;
    border: none;
  }

  .sidebar ul li a {
    font-size: 1.3rem;
    color: #32158c;
    text-decoration: none;
    font-weight: 600;
    padding: 8px 10px;
    transition: color 0.18s ease, transform 0.18s ease;
  }

  .sidebar ul li a:hover {
    border-bottom: 1px solid #32158c;
    transform: translateY(-2px);
  }
  .active {
  border-bottom: 2px solid #004aad;
  color: #004aad;
  font-weight: 600;
}
  .responsive-img {
    max-width: 50%; /* en desktop más pequeño aún */
  }
}
    </style>

</head>
<body>
  <header class="header">
  <button id="menu-btn" class="menu-btn" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

  <div class="logo">
    <a href="../index.php"><img src="../imagenes/LOGO SUMMIT-01.png" alt="Logo de la empresa"></a>
  </div>

  <!-- El mismo nav se usa para móvil (sidebar) y escritorio (barra horizontal) -->
  <nav class="sidebar" id="sidebar" aria-hidden="true">
    <button id="close-btn" class="close-btn" aria-label="Cerrar menú">&times;</button>
    <ul>
      <li><a href="../talleres/taller.php" class="active">Conferencias y paneles</a></li>
      <li><a href="../cronograma/cronograma.php">Cronograma</a></li>
      <li><a href="../ponentes/ponentes.php">Ponentes</a></li>
      <li><a href="../juegoEmpresario/juegoEmpresaior.php">Business Game</a></li>
      <li><a href="../pitch/pitch.php">Ring de las Startups</a></li>
      <li><a href="../awards/awards.php">Incuval Awards</a></li>
    </ul>
  </nav>
</header>
<!-- Overlay (clic fuera cierra el sidebar en móvil) -->
<div id="overlay" class="overlay" aria-hidden="true"></div>

  <!-- HERO IMAGE -->
<section class="hero">
  <picture>
    <!-- Escritorio -->
    <source media="(min-width: 1024px)" srcset="../imagenes/hero-escritorio.jpg">
    <!-- Tablet -->
    <source media="(min-width: 480px)" srcset="../imagenes/hero-tablet.jpg">
    <!-- Móvil (por defecto) -->
    <img src="../imagenes/header-principal.jpg" alt="Imagen principal">
  </picture>
</section>

<section class="presentacion">
  <div class="hero-texto">
    <h1>Conferencias y Paneles</h1> 
  </div>
  <div class="descripcion">
    <p>Explora nuestras conferencias, talleres y sesiones especiales con ponentes nacionales e internacionales.</p>
    <p>Regístrate en la plataforma oficial para obtener los enlaces de acceso y no perderte nada.</p>
  </div>
  <div class="boton-container">
    <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Acceder a la Plataforma</a>
  </div>
        
</section>
  
<section class="img-section">
  <img src="../imagenes/conferencias-paneles.jpeg" alt="" class="responsive-img">
</section>
  <!-- Desglose por tipo
<section class="lista-eventos">
    <h2>Conferencias</h2>
    <article class="evento1" id="confe1">
        <div class="ponente1">
          <img src="../imagenes/avatar-mujer.png" alt="Ponente 1" class="ponente1-foto">
          <img src="../imagenes/peru_4855759.png" alt="Perú" class="bandera1">
          <p class="ponente1-nombre">Karina Revolledo Rodríguez</p>
        </div>
        <div class="evento-info" >
          <h3>Conferencia 1</h3>
          <p><strong>Día:</strong> Lunes</p>
          <p><strong>Hora:</strong> 5:30 PM</p>
          <p>Cómo aterrizar tu idea de negocio paso a paso</p>
        </div>
      </article>
    
    <article class="evento1" id="confe1">
        <div class="ponente1">
          <img src="../imagenes/avatar-hombre.png" alt="Ponente 2" class="ponente1-foto">
          <img src="../imagenes/peru_4855759.png" alt="Perú" class="bandera1">
          <p class="ponente1-nombre">Benjamín Carrasco Espinoza</p>
        </div>
        <div class="evento-info" >
          <h3>Conferencia 2</h3>
          <p><strong>Día:</strong> Lunes</p>
          <p><strong>Hora:</strong> 6:00 PM</p>
          <p>Control sin enredos: apps y tips para tus ventas e ingresos</p>
        </div>
      </article>
      
    <article class="evento1" id="confe1">
        <div class="ponente1">
          <img src="../imagenes/avatar-mujer.png" alt="Ponente 1" class="ponente1-foto">
          <img src="../imagenes/peru_4855759.png" alt="Perú" class="bandera1">
          <p class="ponente1-nombre">Vanesa Orizano</p>
        </div>
        <div class="evento-info" >
          <h3>Conferencia 3</h3>
          <p><strong>Día:</strong> Lunes</p>
          <p><strong>Hora:</strong> 6:30 PM</p>
          <p>Mi primera facturación como emprendedor: Una historia real de éxito regional</p>
        </div>

    </article>
    <div class="verMas">
        <a href="#">Ver más</a>
    </div>
    


    <h2>Paneles</h2>
    <article class="evento1">
        <img src="../imagenes/taller1.jpg" alt="Taller Innovación" class="evento-img">
        <div class="evento-info">
            <h3>Taller: Innovación</h3>
            <p><strong>Día:</strong> Martes</p>
            <p><strong>Hora:</strong> 11:00 AM</p>
            <p>Descripción breve...</p>
            <button class="btn-registrar">Regístrate</button>
        </div>
    </article>
</section>

coorganizadores-sponsor
<section class="section">
    <h2>Sponsors</h2>
    <div class="logo-slider">
      <div class="logo-track">
        <img src="../imagenes/sponsors/1.png" alt="Sponsor 1">
        <img src="../imagenes/sponsors/2.png" class="dircetur" alt="Sponsor 2">
        <img src="../imagenes/sponsors/3.png" alt="Sponsor 3">
        <img src="../imagenes/sponsors/4.png" alt="Sponsor 4">
        <img src="../imagenes/sponsors/5.jpg" alt="Sponsor 5">
        <img src="../imagenes/sponsors/6.png" alt="Sponsor 6">
        <img src="../imagenes/sponsors/7.png" alt="Sponsor 7">
        <img src="../imagenes/sponsors/8.png" alt="Sponsor 8">
        <img src="../imagenes/sponsors/9.png" alt="Sponsor 9">
        <img src="../imagenes/sponsors/10.png" alt="Sponsor 10">
        <img src="../imagenes/sponsors/11.png" alt="Sponsor 11">
        <!- duplicados para efecto infinito ->
        <img src="../imagenes/sponsors/1.png" alt="Sponsor 1">
        <img src="../imagenes/sponsors/2.png" class="dircetur" alt="Sponsor 2">
        <img src="../imagenes/sponsors/3.png" alt="Sponsor 3">
        <img src="../imagenes/sponsors/4.png" alt="Sponsor 4">
        <img src="../imagenes/sponsors/5.jpg" alt="Sponsor 5">
        <img src="../imagenes/sponsors/6.png" alt="Sponsor 6">
        <img src="../imagenes/sponsors/7.png" alt="Sponsor 7">
        <img src="../imagenes/sponsors/8.png" alt="Sponsor 8">
        <img src="../imagenes/sponsors/9.png" alt="Sponsor 9">
        <img src="../imagenes/sponsors/10.png" alt="Sponsor 10">
        <img src="../imagenes/sponsors/11.png" alt="Sponsor 11">
      </div>
    </div>
  </section>



<!-footer-->
<footer class="footer">
  <div class="social-icons">
    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
  </div>
  <p class="copy">&copy; <span id="year"></span> Incuval Ventures. Todos los derechos reservados.</p>
</footer>

<script>
  //nav
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const closeBtn = document.getElementById("close-btn");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  function openSidebar() {
    sidebar.classList.add("open");
    overlay.classList.add("show");
    menuBtn.setAttribute("aria-expanded", "true");
    sidebar.setAttribute("aria-hidden", "false");
    overlay.setAttribute("aria-hidden", "false");
  }

  function closeSidebar() {
    sidebar.classList.remove("open");
    overlay.classList.remove("show");
    menuBtn.setAttribute("aria-expanded", "false");
    sidebar.setAttribute("aria-hidden", "true");
    overlay.setAttribute("aria-hidden", "true");
  }

  menuBtn.addEventListener("click", openSidebar);
  closeBtn.addEventListener("click", closeSidebar);
  overlay.addEventListener("click", closeSidebar);

  // Cierra el menú si el usuario presiona Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeSidebar();
  });

  // Si el usuario cambia el tamaño y pasa a desktop, asegurar que el sidebar se cierre
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) closeSidebar();
  });
});



//footer
document.getElementById("year").textContent = new Date().getFullYear();

</script>
</body>
</html>
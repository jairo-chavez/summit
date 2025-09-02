<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proyecto Mobile First</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
  /* Reset básico */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
    padding-top: 4.3rem;

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

/*evento y contador*/
.evento {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
    background-color: #280e77

;
  text-align: center;
  padding: 1rem;
}

.descripcion {
  max-width: 1100px;
  font-size: 1.4rem;
  margin: 2rem 1rem;
  color: #fff;
  text-wrap: pretty;
}

.fecha {
  font-size: 1.5rem;
  color: #fff;
  margin-bottom: 2.2rem;
}

.contador {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
}

.contador div {
  background-color: #32158c;
  color: #fff;
  padding: 0.3rem 1.2rem ;
  border-radius: 5px;
  min-width: 50px;
}

.contador span {
  display: block;
  font-size: 1.2rem ;
  font-weight: bold;
}

.btn-registro {
  display: inline-block;
  padding: 0.8rem 1.5rem;
  margin-bottom: 1rem;
  background-color: #32158c;
  color: #fff;
  text-decoration: none;
  font-size: 1rem;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.btn-registro:hover {
  background-color: #fff;
  color: #280e77;
}


/* Estilos base (First Mobile) */
.video-section {
  background-color: #fff; /* morado medio */
  padding: 20px 10px;
  text-align: center;
  color: white;
}

.video-container {
  position: relative;
  width: 100%;
  max-width: 900px;
  margin: 0 auto;
  aspect-ratio: 16 / 9; /* Hace el video responsivo */
}

.video-container iframe {
  width: 90%;
  height: 100%;
  border-radius: 8px;
}

.video-title {
  color: #32158c;
  margin-top: 15px;
  font-size: 1.5rem;
}
.contenido{
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: auto;
}
.video-description {
  color: #32158c;  
  margin-top: 8px;
  font-size: 1rem;
  margin-left: 15px;
  text-align: start;
}

/*galería*/
.experiencia {
  padding: 40px 20px;
  background: #d9e9ec;
}

.experiencia h2 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 1.5rem;
  color: #280e77;
}

/* Imagenes en carrusel escritorio */
.swiper-slide img {
  width: 100%;
  padding: 10px;
    border-radius: 20px;

}

/* Galería en móvil */
.mobile-gallery {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
}

.mobile-gallery img {
  width: 90%;
  border-radius: 10px;
}


/*sponsors*/
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

/* 👇 Estilos base: móvil primero */
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


/*incuval info*/
.incuval-section {
  padding-top: 2rem;
  background: #d9e9ec;
}

.incuval-container {
  display: flex;
  flex-direction: column;
  text-align: start;
  max-width: 900px;
  margin: auto;
}

.incuval-text {
  text-align: center;
  padding: 1rem 1.5rem;
}

.incuval-text h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #32158c;
}

.incuval-text p {
  text-align: start;
  text-wrap: pretty;
  font-size: 1rem;
  line-height: 1.5;
  color: #555;
  max-width: 800px;
  margin: 0 auto 1rem;
}

.incuval-btn {
  background-color: #32158c;
  color: white;
  border: none;
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
  margin: 20px 0;
}

.incuval-btn:hover {
  background-color: #32158c;
}
.incuval-btn a{
    text-decoration: none;
    color: white;
}
.incuval-logo{
  display: flex;
}
.incuval-logo img {
  max-width: 200px;
  height: auto;
  margin: auto;
  margin-bottom: 2rem;
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


@media (min-width: 1025px) {


    body {
  padding-top: 5.5rem;
}
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

  
  .descripcion{
     font-size: 2.5rem;
    margin: 2rem 5rem;
    color: #fff
  }
.fecha {
  font-size: 1.8rem;
}
.contador div {
  padding: 0.8rem 2.5rem ;
  margin: 0 1rem;
}
.contador span {
  font-size: 2.8rem ;
}
.btn-registro {
  padding: 1rem 2rem;
  margin-bottom: 1rem;
  font-size: 1.3rem;
}

  /*videoooooooooo*/
  .video-section {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .video-container {
  margin: 0;
  padding: 0;
  margin-top: 4.7rem;
  width: 80%;
  min-width: 450px;
  }
  .video-container iframe {
  margin: 0;
  width: 85%;
  height: 80%;
}
  .video-description{
    max-width: 550px;
  }
  .contenido{
    margin: 0;
    margin: 60px 0;
    background-color: #fff;
    text-align: start;
  }
  .contenido h2{
    margin: 0;
    text-align: start;
  }
  .contenido p{
    margin: 0;
    padding-top: 10px;
  }
  .video-title {
    font-size: 2.5rem;
  }

  .video-description {
    font-size: 1.5rem;
    max-width: 600px;
  }
/*carrusel*/
.mobile-gallery {
    display: none;
  }


  /*incuval info*/
  .incuval-container{
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  
.incuval-text h2 {
color: #32158c;
font-size: 2.5rem;
}
.incuval-text p{
  font-size: 1.5rem;
}
.incuval-logo img {
  max-width: 300px;
  height: auto;
  margin: auto;
}
.incuval-section{
  padding-bottom: 3rem;
}
/*sponsor*/
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



@media (max-width: 767px) {
  .mySwiper {
    display: none;
  }
}

</style>
</head>
<body>

  <!-- HEADER -->
<header class="header">
  <button id="menu-btn" class="menu-btn" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

  <div class="logo">
    <a href="index.php"><img src="imagenes/LOGO SUMMIT-01.png" alt="Logo de la empresa"></a>
  </div>

  <!-- El mismo nav se usa para móvil (sidebar) y escritorio (barra horizontal) -->
  <nav class="sidebar" id="sidebar" aria-hidden="true">
    <button id="close-btn" class="close-btn" aria-label="Cerrar menú">&times;</button>
    <ul>
      <li><a href="talleres/taller.php">Conferencias y Paneles</a></li>
      <li><a href="cronograma/cronograma.php">Cronograma</a></li>
      <li><a href="ponentes/ponentes.php">Ponentes</a></li>
      <li><a href="juegoEmpresario/juegoEmpresaior.php">Business Game</a></li>
      <li><a href="pitch/pitch.php">Ring de las Startups</a></li>
      <li><a href="awards/awards.php">Incuval Awards</a></li>
    </ul>
  </nav>
</header>
<!-- Overlay (clic fuera cierra el sidebar en móvil) -->
<div id="overlay" class="overlay" aria-hidden="true"></div>


  <!-- HERO IMAGE -->
<section class="hero">
  <picture>
    <!-- Escritorio -->
    <source media="(min-width: 1024px)" srcset="imagenes/hero-escritorio.jpg">
    <!-- Tablet -->
    <source media="(min-width: 480px)" srcset="imagenes/hero-tablet.jpg">
    <!-- Móvil (por defecto) -->
    <img src="imagenes/header-principal.jpg" alt="Imagen principal">
  </picture>


</section>

<section class="evento">
  <p class="descripcion">
    ¡Vuelve la conferencia más importante de emprendimientos en formato virtual y presencial
  </p>
  <p class="fecha">
    Del <strong>15 al 19 de Septiembre</strong>
  </p>

  <div class="contador" id="contador">
    <div><span id="dias">0</span><small>días</small></div>
    <div><span id="horas">0</span><small>horas</small></div>
    <div><span id="minutos">0</span><small>min</small></div>
    <div><span id="segundos">0</span><small>seg</small></div>
  </div>
   <div class="boton-container">
    <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" class="btn-registro" target="_blank">INSCRÍBETE</a>
  </div>
</section>

<section class="video-section">
  <div class="video-container">
    <iframe
      src="https://www.youtube.com/embed/Mz2YEO_h7fg"
      title="Video de ejemplo"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>
  <div class="contenido">
    <h2 class="video-title">Título del Video</h2>
    <p class="video-description">
    El Vicerrectorado de Investigación a través de la Dirección de Incubadora de Empresas, presenta la 3ra edición del Summit Regional: Emprendimientos de Impacto-2025, programa que busca fortalecer el ecosistema emprendedor, la cultura emprendedora y el desarrollo de emprendimientos sostenibles y de alto impacto. Buscamos poner en vitrina al talento emprendedor basados en la innovación, la tecnología y la investigación.<br><br>
    ¡Únete al Summit Regional 2025, evento presencial y virtual!.</p>
  </p>
  </div>
</section>

<!-- Sección Nuestra experiencia 2024 -->
<section class="experiencia">
  <h2>Nuestra Experiencia del 2024</h2>

  <!-- Carrusel solo en escritorio -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="imagenes/carrusel/1.jpg" alt="Foto 1"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/2.jpg" alt="Foto 2"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/3.jpg" alt="Foto 3"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/4.jpg" alt="Foto 4"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/5.jpg" alt="Foto 5"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/6.jpg" alt="Foto 6"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/7.jpg" alt="Foto 7"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/8.jpg" alt="Foto 8"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/9.jpg" alt="Foto 9"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/10.jpg" alt="Foto 10"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/11.jpg" alt="Foto 11"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/12.jpg" alt="Foto 12"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/13.jpg" alt="Foto 13"></div>
      <div class="swiper-slide"><img src="imagenes/carrusel/14.jpg" alt="Foto 14"></div>
    </div>
  </div>

  <!-- Vista móvil: imágenes normales -->
  <div class="mobile-gallery">
    <img src="imagenes/carrusel/1.jpg" alt="Foto 1">
<img src="imagenes/carrusel/2.jpg" alt="Foto 2">
<img src="imagenes/carrusel/3.jpg" alt="Foto 3">
<img src="imagenes/carrusel/4.jpg" alt="Foto 4">
<img src="imagenes/carrusel/5.jpg" alt="Foto 5">
<img src="imagenes/carrusel/6.jpg" alt="Foto 6">
<img src="imagenes/carrusel/7.jpg" alt="Foto 7">
<img src="imagenes/carrusel/8.jpg" alt="Foto 8">
<img src="imagenes/carrusel/9.jpg" alt="Foto 9">
<img src="imagenes/carrusel/10.jpg" alt="Foto 10">
<img src="imagenes/carrusel/11.jpg" alt="Foto 11">
<img src="imagenes/carrusel/12.jpg" alt="Foto 12">
<img src="imagenes/carrusel/13.jpg" alt="Foto 13">
<img src="imagenes/carrusel/14.jpg" alt="Foto 14">
    
  </div>
</section>

  <!--sponsorss-->
<section class="section">
    <h2>sponsors</h2>
    <div class="logo-slider">
      <div class="logo-track">
        <img src="imagenes/sponsors/1.png" alt="Sponsor 1">
        <img src="imagenes/sponsors/2.png" class="dircetur" alt="Sponsor 2">
        <img src="imagenes/sponsors/3.png" alt="Sponsor 3">
        <img src="imagenes/sponsors/4.png" alt="Sponsor 4">
        <img src="imagenes/sponsors/5.jpg" alt="Sponsor 5">
        <img src="imagenes/sponsors/6.png" alt="Sponsor 6">
        <img src="imagenes/sponsors/7.png" alt="Sponsor 7">
        <img src="imagenes/sponsors/8.png" alt="Sponsor 8">
        <img src="imagenes/sponsors/9.png" alt="Sponsor 9">
        <img src="imagenes/sponsors/10.png" alt="Sponsor 10">
        <img src="imagenes/sponsors/11.png" alt="Sponsor 11">
        <!-- duplicados para efecto infinito -->
        <img src="imagenes/sponsors/1.png" alt="Sponsor 1">
        <img src="imagenes/sponsors/2.png" class="dircetur" alt="Sponsor 2">
        <img src="imagenes/sponsors/3.png" alt="Sponsor 3">
        <img src="imagenes/sponsors/4.png" alt="Sponsor 4">
        <img src="imagenes/sponsors/5.jpg" alt="Sponsor 5">
        <img src="imagenes/sponsors/6.png" alt="Sponsor 6">
        <img src="imagenes/sponsors/7.png" alt="Sponsor 7">
        <img src="imagenes/sponsors/8.png" alt="Sponsor 8">
        <img src="imagenes/sponsors/9.png" alt="Sponsor 9">
        <img src="imagenes/sponsors/10.png" alt="Sponsor 10">
        <img src="imagenes/sponsors/11.png" alt="Sponsor 11">
      </div>
    </div>
  </section>


<!--incuval info-->
<section class="incuval-section">
  <div class="incuval-container">
    <div class="incuval-text">
      <h2>Incuval Ventures</h2>
      <p>
        Somos una organización comprometida con el impulso de proyectos innovadores 
        y sostenibles. Trabajamos junto a emprendedores para potenciar sus ideas y 
        convertirlas en realidades.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam dolorum dolore quis nulla rem! Eius sapiente delectus sunt iure nostrum atque commodi quod ipsum repellat architecto impedit voluptas, deleniti voluptatibus.
      </p>
      <button class="incuval-btn"><a href="https://incuvalventures.unheval.edu.pe/" target="_blank" >Más información</a></button>
    </div>
    <div class="incuval-logo">
      <img src="imagenes/logo-incuval.png" alt="Logo Incuval Ventures">
    </div>
  </div>
</section>


<!--footer-->
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

  // 🔹 Aquí el fix: cerrar menú al hacer click en cualquier enlace del sidebar
  document.querySelectorAll("#sidebar a").forEach((link) => {
    link.addEventListener("click", () => {
      closeSidebar();
      // No se hace preventDefault, así que la redirección funciona normal
    });
  });

  // Cierra el menú si el usuario presiona Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeSidebar();
  });

  // Si el usuario cambia el tamaño y pasa a desktop, asegurar que el sidebar se cierre
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) closeSidebar();
  });
});


// Fecha objetivo (15 de septiembre a las 00:00)
const fechaEvento = new Date("2025-09-15T00:00:00").getTime();

function actualizarContador() {
  const ahora = new Date().getTime();
  const diferencia = fechaEvento - ahora;

  if (diferencia < 0) {
    document.getElementById("contador").innerHTML = "¡El evento ha comenzado!";
    return;
  }

  const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
  const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
  const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

  document.getElementById("dias").textContent = dias;
  document.getElementById("horas").textContent = horas;
  document.getElementById("minutos").textContent = minutos;
  document.getElementById("segundos").textContent = segundos;
}

setInterval(actualizarContador, 1000);

//carrusel
// Carrusel solo se muestra en escritorio
const swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  slidesPerGroup: 1, // <- Avanza de a 1 imagen
  loop: false, // No ilimitado
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: { // Móvil
      slidesPerView: 1,
      slidesPerGroup: 1,
      autoplay: false // Desactiva el auto en móvil
    },
    768: { // Escritorio
      slidesPerView: 4,
      slidesPerGroup: 1,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false
      }
    }
  }
});

//footer
document.getElementById("year").textContent = new Date().getFullYear();

  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav>
    <a href="/" class="nav-logo">miguel<span>.dev</span></a>
    <ul class="nav-links">
        <li><a href="/perfil" class="activo">Perfil</a></li>
        <li><a href="/perfil/intereses">Intereses</a></li>
        <li><a href="/perfil/habilidades">Habilidades</a></li>
        <li><a href="/perfil/metas">Metas</a></li>
    </ul>
</nav>

<div class="contenedor">

    <div class="page-header">
        <span class="etiqueta">// sobre mí</span>
        <h1>Mi <span>Perfil</span></h1>
        <p>Estudiante de Ingeniería de Sistemas apasionado por el desarrollo de software.</p>
        <div class="linea-naranja"></div>
    </div>

    <!-- Hero Card -->
    <div class="perfil-hero">
        <div class="avatar">MA</div>
        <div class="perfil-hero-info">
            <h2>Miguel Angel Solano Diaz</h2>
            <p class="rol">Desarrollador en formación · Futuro Full Stack</p>
            <p class="universidad">// UNAB · Ingeniería de Sistemas · 2026</p>
            <div class="badges">
                <span class="badge">Python</span>
                <span class="badge">JavaScript</span>
                <span class="badge">Laravel</span>
                <span class="badge">Java</span>
                <span class="badge">Git/GitHub</span>
            </div>
        </div>
    </div>

    <!-- Info personal -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Información Personal</p>
        <div class="info-grid">
            <div class="info-item">
                <p class="label">Nombre completo</p>
                <p class="valor">Miguel Angel Solano Diaz</p>
            </div>
            <div class="info-item">
                <p class="label">Ciudad</p>
                <p class="valor">Bucaramanga, Colombia</p>
            </div>
            <div class="info-item">
                <p class="label">Carrera</p>
                <p class="valor">Ingeniería de Sistemas</p>
            </div>
            <div class="info-item">
                <p class="label">Universidad</p>
                <p class="valor">UNAB</p>
            </div>
            <div class="info-item">
                <p class="label">Asignatura</p>
                <p class="valor">Desarrollo Backend</p>
            </div>
            <div class="info-item">
                <p class="label">Año</p>
                <p class="valor">2026</p>
            </div>
        </div>
    </div>

    <!-- Descripción -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Sobre Mí</p>
        <p style="color:#4b5563; font-size:0.95rem;">
            Soy estudiante de Ingeniería de Sistemas en la UNAB, con una gran pasión por el desarrollo de software.
            Me caracterizo por mi <strong style="color:var(--naranja)">aprendizaje rápido</strong> y mi facilidad para
            adaptarme a nuevas tecnologías, lo que me ha permitido trabajar con múltiples lenguajes y frameworks
            en poco tiempo.
        </p>
        <p style="color:#4b5563; font-size:0.95rem; margin-top:0.75rem;">
            Mi visión va más allá de ser empleado: quiero construir productos propios y eventualmente
            fundar mi propia empresa de desarrollo de software. Cada proyecto que hago es un paso
            hacia ese objetivo.
        </p>
    </div>

</div>

<footer>
    Hecho por <span>Miguel Angel Solano Diaz</span> · UNAB 2026
</footer>

</body>
</html>

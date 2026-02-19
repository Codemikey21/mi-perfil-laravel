<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Metas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav>
    <a href="/" class="nav-logo">miguel<span>.dev</span></a>
    <ul class="nav-links">
        <li><a href="/perfil">Perfil</a></li>
        <li><a href="/perfil/intereses">Intereses</a></li>
        <li><a href="/perfil/habilidades">Habilidades</a></li>
        <li><a href="/perfil/metas" class="activo">Metas</a></li>
    </ul>
</nav>

<div class="contenedor">

    <div class="page-header">
        <span class="etiqueta">// objetivos</span>
        <h1>Mis <span>Metas</span></h1>
        <p>El camino que quiero construir como profesional y emprendedor del software.</p>
        <div class="linea-naranja"></div>
    </div>

    <!-- Metas profesionales -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Metas Profesionales</p>

        <div class="meta-item">
            <div class="meta-numero">1</div>
            <div class="meta-contenido">
                <h3>Convertirme en Desarrollador Full Stack</h3>
                <p>Dominar tanto el backend (Laravel, Python, bases de datos) como el frontend moderno, para poder construir productos completos de forma autónoma sin depender de un equipo grande.</p>
                <span class="meta-plazo">Corto plazo · 2026–2027</span>
            </div>
        </div>

        <div class="meta-item">
            <div class="meta-numero">2</div>
            <div class="meta-contenido">
                <h3>Crear mi propia Startup</h3>
                <p>Identificar un problema real en el mercado colombiano y construir una solución tecnológica escalable, lanzando un MVP con mi equipo antes de graduarme.</p>
                <span class="meta-plazo">Mediano plazo · 2027–2028</span>
            </div>
        </div>

        <div class="meta-item">
            <div class="meta-numero">3</div>
            <div class="meta-contenido">
                <h3>Fundar mi Empresa de Desarrollo de Software</h3>
                <p>Construir una empresa de desarrollo a medida que entregue soluciones de calidad a negocios de la región. Mi objetivo es generar empleo y posicionar a Bucaramanga como polo tecnológico.</p>
                <span class="meta-plazo">Largo plazo · 2029+</span>
            </div>
        </div>
    </div>

    <!-- Metas académicas -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Metas Académicas</p>

        <div class="meta-item">
            <div class="meta-numero">4</div>
            <div class="meta-contenido">
                <h3>Graduarme con un Portafolio Sólido</h3>
                <p>Terminar mi carrera en la UNAB con al menos 5 proyectos reales publicados en GitHub que demuestren mis capacidades técnicas ante cualquier empleador o socio.</p>
                <span class="meta-plazo">Mediano plazo · 2027</span>
            </div>
        </div>

        <div class="meta-item">
            <div class="meta-numero">5</div>
            <div class="meta-contenido">
                <h3>Obtener Certificaciones Técnicas</h3>
                <p>Certifcarme en tecnologías clave como AWS Cloud Practitioner, Python avanzado o Laravel Certified Developer para validar mis conocimientos ante el mercado.</p>
                <span class="meta-plazo">Largo plazo · 2028</span>
            </div>
        </div>
    </div>

    <!-- Frase de cierre -->
    <div class="tarjeta" style="background: linear-gradient(135deg, #1a1a2e, #2d2d44); border: none;">
        <p class="tarjeta-titulo" style="color: rgba(232,119,34,0.8);">// mi visión</p>
        <p style="font-size: 1.05rem; color: #e5e7eb; line-height: 1.9;">
            No quiero solo programar para otros — quiero
            <span style="color: var(--naranja-claro); font-weight: 600;">construir algo mío</span>.
            Cada línea de código que escribo hoy es un ladrillo de la empresa que voy a levantar mañana.
        </p>
        <p style="font-size: 0.8rem; color: #6b7280; margin-top: 0.75rem; font-family: 'JetBrains Mono', monospace;">
            — Miguel Angel Solano Diaz · UNAB 2026
        </p>
    </div>

</div>

<footer>
    Hecho por <span>Miguel Angel Solano Diaz</span> · UNAB 2026
</footer>

</body>
</html>

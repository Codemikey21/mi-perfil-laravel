<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Habilidades</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav>
    <a href="/" class="nav-logo">miguel<span>.dev</span></a>
    <ul class="nav-links">
        <li><a href="/perfil">Perfil</a></li>
        <li><a href="/perfil/intereses">Intereses</a></li>
        <li><a href="/perfil/habilidades" class="activo">Habilidades</a></li>
        <li><a href="/perfil/metas">Metas</a></li>
    </ul>
</nav>

<div class="contenedor">

    <div class="page-header">
        <span class="etiqueta">// skills</span>
        <h1>Mis <span>Habilidades</span></h1>
        <p>Tecnologías que manejo y nivel de dominio actual.</p>
        <div class="linea-naranja"></div>
    </div>

    <!-- Barras de progreso -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Habilidades Técnicas</p>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">HTML / CSS</span>
                <span class="skill-porcentaje">85%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:85%"></div>
            </div>
        </div>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">Python</span>
                <span class="skill-porcentaje">80%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:80%"></div>
            </div>
        </div>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">JavaScript</span>
                <span class="skill-porcentaje">70%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:70%"></div>
            </div>
        </div>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">Laravel / PHP</span>
                <span class="skill-porcentaje">65%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:65%"></div>
            </div>
        </div>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">Java</span>
                <span class="skill-porcentaje">70%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:70%"></div>
            </div>
        </div>

        <div class="skill-grupo">
            <div class="skill-header">
                <span class="skill-nombre">Git / GitHub</span>
                <span class="skill-porcentaje">75%</span>
            </div>
            <div class="barra-fondo">
                <div class="barra-relleno" style="width:75%"></div>
            </div>
        </div>
    </div>

    <!-- Tags -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Tecnologías & Herramientas</p>
        <div class="skills-tags">
            <span class="skill-tag">Python</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">HTML5</span>
            <span class="skill-tag">CSS3</span>
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">PHP 8</span>
            <span class="skill-tag">Java</span>
            <span class="skill-tag">Blade Templates</span>
            <span class="skill-tag">Git</span>
            <span class="skill-tag">GitHub</span>
            <span class="skill-tag">MySQL</span>
            <span class="skill-tag">XAMPP</span>
            <span class="skill-tag">Composer</span>
            <span class="skill-tag">VS Code</span>
        </div>
    </div>

    <!-- Habilidades blandas -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Habilidades Blandas</p>
        <div class="info-grid">
            <div class="info-item">
                <p class="label">Aprendizaje Rápido</p>
                <p class="valor">Me adapto con facilidad a nuevas tecnologías y entornos de trabajo.</p>
            </div>
            <div class="info-item">
                <p class="label">Adaptabilidad</p>
                <p class="valor">Flexibilidad para trabajar con diferentes stacks y metodologías.</p>
            </div>
            <div class="info-item">
                <p class="label">Resolución de Problemas</p>
                <p class="valor">Pensamiento lógico y analítico para encontrar soluciones eficientes.</p>
            </div>
            <div class="info-item">
                <p class="label">Autodidacta</p>
                <p class="valor">Capacidad de aprender de forma independiente con documentación y recursos online.</p>
            </div>
        </div>
    </div>

</div>

<footer>
    Hecho por <span>Miguel Angel Solano Diaz</span> · UNAB 2026
</footer>

</body>
</html>

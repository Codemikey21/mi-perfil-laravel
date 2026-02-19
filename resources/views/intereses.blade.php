<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Intereses</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav>
    <a href="/" class="nav-logo">miguel<span>.dev</span></a>
    <ul class="nav-links">
        <li><a href="/perfil">Perfil</a></li>
        <li><a href="/perfil/intereses" class="activo">Intereses</a></li>
        <li><a href="/perfil/habilidades">Habilidades</a></li>
        <li><a href="/perfil/metas">Metas</a></li>
    </ul>
</nav>

<div class="contenedor">

    <div class="page-header">
        <span class="etiqueta">// pasatiempos</span>
        <h1>Mis <span>Intereses</span></h1>
        <p>Las cosas que me dan energía fuera del código.</p>
        <div class="linea-naranja"></div>
    </div>

    <!-- Intereses principales -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">Pasatiempos & Hobbies</p>
        <div class="interes-grid">
            <div class="interes-card">
                <span class="interes-icon">🎮</span>
                <p class="interes-nombre">Videojuegos</p>
                <p class="interes-desc">RPGs, estrategia y mundos abiertos</p>
            </div>
            <div class="interes-card">
                <span class="interes-icon">⚽</span>
                <p class="interes-nombre">Deportes</p>
                <p class="interes-desc">Fútbol y actividades al aire libre</p>
            </div>
            <div class="interes-card">
                <span class="interes-icon">📚</span>
                <p class="interes-nombre">Lectura</p>
                <p class="interes-desc">Tecnología, ciencia y desarrollo personal</p>
            </div>
        </div>
    </div>

    <!-- Detalles de cada interés -->
    <div class="tarjeta">
        <p class="tarjeta-titulo">¿Por qué me apasionan?</p>
        <div class="info-grid">
            <div class="info-item">
                <p class="label">🎮 Videojuegos</p>
                <p class="valor">Me enseñaron a pensar estratégicamente y a resolver problemas complejos de forma divertida.</p>
            </div>
            <div class="info-item">
                <p class="label">⚽ Deportes</p>
                <p class="valor">El deporte me ayuda a mantener el equilibrio mental y físico para rendir mejor en mis estudios.</p>
            </div>
            <div class="info-item">
                <p class="label">📚 Lectura</p>
                <p class="valor">Leer sobre tecnología y emprendimiento alimenta mi visión de crear mi propia empresa.</p>
            </div>
            <div class="info-item">
                <p class="label">💻 Programación</p>
                <p class="valor">Más que una carrera, es un hobby: construir cosas desde cero me genera una satisfacción única.</p>
            </div>
        </div>
    </div>

    <!-- Frase motivacional -->
    <div class="tarjeta" style="background: linear-gradient(135deg, #1a1a2e, #2d2d44); border: none;">
        <p class="tarjeta-titulo" style="color: rgba(232,119,34,0.8);">// mi filosofía</p>
        <p style="font-size: 1.05rem; color: #e5e7eb; font-style: italic; line-height: 1.9;">
            "Los videojuegos me enseñaron que cada fallo es solo un intento previo al éxito.
            La programación me confirmó que eso es completamente verdad."
        </p>
        <p style="font-size: 0.8rem; color: #6b7280; margin-top: 0.5rem; font-family: 'JetBrains Mono', monospace;">
            — Miguel Angel Solano Diaz
        </p>
    </div>

</div>

<footer>
    Hecho por <span>Miguel Angel Solano Diaz</span> · UNAB 2026
</footer>

</body>
</html>
